<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class software extends Model
{
    /**
     * @description The period of upgrade time.
     *
     * @example 02:00-06:00
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The version of software.
     *
     * @example 5.0-rmq-20230619-1
     *
     * @var string
     */
    public $softwareVersion;

    /**
     * @description The upgrade method.
     *
     * - Manual: manual upgrade
     * @example auto
     *
     * @var string
     */
    public $upgradeMethod;
    protected $_name = [
        'maintainTime'    => 'maintainTime',
        'softwareVersion' => 'softwareVersion',
        'upgradeMethod'   => 'upgradeMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maintainTime) {
            $res['maintainTime'] = $this->maintainTime;
        }
        if (null !== $this->softwareVersion) {
            $res['softwareVersion'] = $this->softwareVersion;
        }
        if (null !== $this->upgradeMethod) {
            $res['upgradeMethod'] = $this->upgradeMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return software
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maintainTime'])) {
            $model->maintainTime = $map['maintainTime'];
        }
        if (isset($map['softwareVersion'])) {
            $model->softwareVersion = $map['softwareVersion'];
        }
        if (isset($map['upgradeMethod'])) {
            $model->upgradeMethod = $map['upgradeMethod'];
        }

        return $model;
    }
}
