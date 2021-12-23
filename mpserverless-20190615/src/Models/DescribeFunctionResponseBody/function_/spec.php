<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeFunctionResponseBody\function_;

use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $timeout;
    protected $_name = [
        'instanceConcurrency' => 'InstanceConcurrency',
        'memory'              => 'Memory',
        'runtime'             => 'Runtime',
        'timeout'             => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceConcurrency) {
            $res['InstanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConcurrency'])) {
            $model->instanceConcurrency = $map['InstanceConcurrency'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
