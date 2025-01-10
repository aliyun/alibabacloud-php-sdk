<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesByNcdRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example lni-1234****
     *
     * @var string
     */
    public $instanceId;

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
     * @description Maximum network communication distance
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $maxNcd;

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
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'maxNcd'       => 'MaxNcd',
        'regionId'     => 'RegionId',
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxNcd) {
            $res['MaxNcd'] = $this->maxNcd;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesByNcdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxNcd'])) {
            $model->maxNcd = $map['MaxNcd'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
