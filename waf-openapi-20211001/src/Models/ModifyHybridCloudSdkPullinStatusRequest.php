<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyHybridCloudSdkPullinStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $pullinStatus;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mid' => 'Mid',
        'pullinStatus' => 'PullinStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        if (null !== $this->pullinStatus) {
            $res['PullinStatus'] = $this->pullinStatus;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        if (isset($map['PullinStatus'])) {
            $model->pullinStatus = $map['PullinStatus'];
        }

        return $model;
    }
}
