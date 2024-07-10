<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebStaticsInfo extends Model
{
    /**
     * @var int
     */
    public $cpuUsage;

    /**
     * @var int
     */
    public $internetTrafficOut;

    /**
     * @var int
     */
    public $invocations;

    /**
     * @var int
     */
    public $memoryUsage;
    protected $_name = [
        'cpuUsage'           => 'CpuUsage',
        'internetTrafficOut' => 'InternetTrafficOut',
        'invocations'        => 'Invocations',
        'memoryUsage'        => 'MemoryUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUsage) {
            $res['CpuUsage'] = $this->cpuUsage;
        }
        if (null !== $this->internetTrafficOut) {
            $res['InternetTrafficOut'] = $this->internetTrafficOut;
        }
        if (null !== $this->invocations) {
            $res['Invocations'] = $this->invocations;
        }
        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebStaticsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUsage'])) {
            $model->cpuUsage = $map['CpuUsage'];
        }
        if (isset($map['InternetTrafficOut'])) {
            $model->internetTrafficOut = $map['InternetTrafficOut'];
        }
        if (isset($map['Invocations'])) {
            $model->invocations = $map['Invocations'];
        }
        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }

        return $model;
    }
}
