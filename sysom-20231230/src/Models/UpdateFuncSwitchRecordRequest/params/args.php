<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\UpdateFuncSwitchRecordRequest\params;

use AlibabaCloud\Tea\Model;

class args extends Model
{
    /**
     * @example java
     *
     * @var string
     */
    public $addCmd;

    /**
     * @example true
     *
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $duration;

    /**
     * @example /tmp/sysom/java-profiler
     *
     * @var string
     */
    public $javaStorePath;

    /**
     * @example true
     *
     * @var string
     */
    public $locks;

    /**
     * @example -1
     *
     * @var int
     */
    public $loop;

    /**
     * @example true
     *
     * @var string
     */
    public $mem;

    /**
     * @var int
     */
    public $pid;

    /**
     * @example true
     *
     * @var string
     */
    public $systemProfiling;
    protected $_name = [
        'addCmd' => 'add_cmd',
        'cpu' => 'cpu',
        'duration' => 'duration',
        'javaStorePath' => 'java_store_path',
        'locks' => 'locks',
        'loop' => 'loop',
        'mem' => 'mem',
        'pid' => 'pid',
        'systemProfiling' => 'system_profiling',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addCmd) {
            $res['add_cmd'] = $this->addCmd;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->javaStorePath) {
            $res['java_store_path'] = $this->javaStorePath;
        }
        if (null !== $this->locks) {
            $res['locks'] = $this->locks;
        }
        if (null !== $this->loop) {
            $res['loop'] = $this->loop;
        }
        if (null !== $this->mem) {
            $res['mem'] = $this->mem;
        }
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
        if (null !== $this->systemProfiling) {
            $res['system_profiling'] = $this->systemProfiling;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return args
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['add_cmd'])) {
            $model->addCmd = $map['add_cmd'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['java_store_path'])) {
            $model->javaStorePath = $map['java_store_path'];
        }
        if (isset($map['locks'])) {
            $model->locks = $map['locks'];
        }
        if (isset($map['loop'])) {
            $model->loop = $map['loop'];
        }
        if (isset($map['mem'])) {
            $model->mem = $map['mem'];
        }
        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }
        if (isset($map['system_profiling'])) {
            $model->systemProfiling = $map['system_profiling'];
        }

        return $model;
    }
}
