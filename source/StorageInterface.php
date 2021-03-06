<?php declare(strict_types = 1);

namespace arhone\storing;

/**
 * Хранилище данных (ключ - значение) (PHP 7)
 *
 * Interface StorageInterface
 * @package arhone\storing
 * @author Алексей Арх <info@arh.one>
 */
interface StorageInterface {

    /**
     * Записывает значение в файл
     *
     * @param string $key
     * @param $data
     * @return bool
     */
    public function set (string $key, $data) : bool;

    /**
     * Возвращает значение файла
     *
     * @param string $key
     * @return mixed
     */
    public function get (string $key);

    /**
     * Проверяет существует ли ключ
     *
     * @param string $key
     * @return bool
     */
    public function has (string $key) : bool;

    /**
     * Удаление значения
     *
     * @param string $key
     * @return bool
     */
    public function delete (string $key) : bool;

    /**
     * Наполнение контейнера
     *
     * @param array $data
     * @return bool
     */
    public function fill (array $data) : bool;

    /**
     * Очистить контейнер
     *
     * @return bool
     */
    public function clear () : bool;

    /**
     * Задаёт конфигурацию
     *
     * @param array $configuration
     * @return array
     */
    public function configure (array $configuration = []) : array;

}