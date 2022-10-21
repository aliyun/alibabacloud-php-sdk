<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceParam extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $renewDuration;

    /**
     * @var string
     */
    public $renewDurationUnit;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'renewDuration'     => 'RenewDuration',
        'renewDurationUnit' => 'RenewDurationUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->renewDuration) {
            $res['RenewDuration'] = $this->renewDuration;
        }
        if (null !== $this->renewDurationUnit) {
            $res['RenewDurationUnit'] = $this->renewDurationUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RenewDuration'])) {
            $model->renewDuration = $map['RenewDuration'];
        }
        if (isset($map['RenewDurationUnit'])) {
            $model->renewDurationUnit = $map['RenewDurationUnit'];
        }

        return $model;
    }
}
