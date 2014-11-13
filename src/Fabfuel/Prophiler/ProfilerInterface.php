<?php
/**
 * @author @fabfuel <fabian@fabfuel.de>
 * @created 13.11.14, 07:52 
 */
namespace Fabfuel\Prophiler;

interface ProfilerInterface
{
    /**
     * Start a new benchmark
     *
     * @param string $name Unique identifier like e.g. Class::Method (\Foobar\MyClass::doSomething)
     * @param array $metadata Addtional metadata or data
     * @return string identifier token
     */
    public function start($name, array $metadata = []);

    /**
     * Stop a running benchmark
     *
     * @param string $token benchmark identifier
     * @return void
     */
    public function stop($token);

    /**
     * Get the total number of elapsed time in milliseconds
     *
     * @return double Total number of elapsed milliseconds
     */
    public function getDuration();
}
