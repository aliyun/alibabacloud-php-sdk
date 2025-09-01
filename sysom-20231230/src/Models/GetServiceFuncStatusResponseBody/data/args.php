<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetServiceFuncStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class args extends Model
{
    /**
     * @var string
     */
    public $addCmd;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $javaStorePath;

    /**
     * @var string
     */
    public $locks;

    /**
     * @var int
     */
    public $loop;

    /**
     * @var string
     */
    public $mem;

    /**
     * @var string
     */
    public $systemProfiling;
    protected $_name = [
        'addCmd' => 'add_cmd',
        'cpu' => 'cpu',
        'javaStorePath' => 'java_store_path',
        'locks' => 'locks',
        'loop' => 'loop',
        'mem' => 'mem',
        'systemProfiling' => 'system_profiling',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addCmd) {
            $res['add_cmd'] = $this->addCmd;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
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

        if (null !== $this->systemProfiling) {
            $res['system_profiling'] = $this->systemProfiling;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['add_cmd'])) {
            $model->addCmd = $map['add_cmd'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
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

        if (isset($map['system_profiling'])) {
            $model->systemProfiling = $map['system_profiling'];
        }

        return $model;
    }
}
