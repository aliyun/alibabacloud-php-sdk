<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;

use AlibabaCloud\Dara\Model;

class subInstances extends Model
{
    /**
     * @var string
     */
    public $globalInstanceId;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'globalInstanceId' => 'GlobalInstanceId',
        'instanceClass' => 'InstanceClass',
        'instanceID' => 'InstanceID',
        'instanceStatus' => 'InstanceStatus',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
