<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceInServiceListResponseBody\data\instanceVO\tags;
use AlibabaCloud\Tea\Model;

class instanceVO extends Model
{
    /**
     * @var bool
     */
    public $independentNaming;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceType;
    protected $_name = [
        'independentNaming' => 'IndependentNaming',
        'instanceName'      => 'InstanceName',
        'releaseTime'       => 'ReleaseTime',
        'instanceStatus'    => 'InstanceStatus',
        'tags'              => 'Tags',
        'instanceId'        => 'InstanceId',
        'instanceType'      => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->independentNaming) {
            $res['IndependentNaming'] = $this->independentNaming;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndependentNaming'])) {
            $model->independentNaming = $map['IndependentNaming'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
