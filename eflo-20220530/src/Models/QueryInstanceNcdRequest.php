<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceNcdRequest extends Model
{
    /**
     * @description Instance 1ID
     *
     * This parameter is required.
     * @example lni-1235****
     *
     * @var string
     */
    public $instanceId1;

    /**
     * @description Instance 2ID
     *
     * This parameter is required.
     * @example lni-1234****
     *
     * @var string
     */
    public $instanceId2;

    /**
     * @description The parameter that specifies the instance type.
     *
     * Valid value:
     *
     *   node: Lingjun node.
     *   lni: lingjun network interface controller.
     *
     * This parameter is required.
     * @example lni
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId1'  => 'InstanceId1',
        'instanceId2'  => 'InstanceId2',
        'instanceType' => 'InstanceType',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId1) {
            $res['InstanceId1'] = $this->instanceId1;
        }
        if (null !== $this->instanceId2) {
            $res['InstanceId2'] = $this->instanceId2;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstanceNcdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId1'])) {
            $model->instanceId1 = $map['InstanceId1'];
        }
        if (isset($map['InstanceId2'])) {
            $model->instanceId2 = $map['InstanceId2'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
