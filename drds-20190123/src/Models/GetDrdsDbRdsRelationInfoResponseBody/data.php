<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @var string[]
     */
    public $readOnlyInstanceInfo;

    /**
     * @var string
     */
    public $usedInstanceId;

    /**
     * @var string
     */
    public $usedInstanceType;
    protected $_name = [
        'rdsInstanceId'        => 'RdsInstanceId',
        'readOnlyInstanceInfo' => 'ReadOnlyInstanceInfo',
        'usedInstanceId'       => 'UsedInstanceId',
        'usedInstanceType'     => 'UsedInstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }
        if (null !== $this->readOnlyInstanceInfo) {
            $res['ReadOnlyInstanceInfo'] = $this->readOnlyInstanceInfo;
        }
        if (null !== $this->usedInstanceId) {
            $res['UsedInstanceId'] = $this->usedInstanceId;
        }
        if (null !== $this->usedInstanceType) {
            $res['UsedInstanceType'] = $this->usedInstanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }
        if (isset($map['ReadOnlyInstanceInfo'])) {
            if (!empty($map['ReadOnlyInstanceInfo'])) {
                $model->readOnlyInstanceInfo = $map['ReadOnlyInstanceInfo'];
            }
        }
        if (isset($map['UsedInstanceId'])) {
            $model->usedInstanceId = $map['UsedInstanceId'];
        }
        if (isset($map['UsedInstanceType'])) {
            $model->usedInstanceType = $map['UsedInstanceType'];
        }

        return $model;
    }
}
