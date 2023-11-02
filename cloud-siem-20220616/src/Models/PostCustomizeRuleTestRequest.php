<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostCustomizeRuleTestRequest extends Model
{
    /**
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example [{"key1":"value1","key2":"value2","key3":"value3","key4":"value4","key5":"value5"}]
     *
     * @var string
     */
    public $simulatedData;

    /**
     * @example simulate
     *
     * @var string
     */
    public $testType;
    protected $_name = [
        'id'            => 'Id',
        'regionId'      => 'RegionId',
        'simulatedData' => 'SimulatedData',
        'testType'      => 'TestType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->simulatedData) {
            $res['SimulatedData'] = $this->simulatedData;
        }
        if (null !== $this->testType) {
            $res['TestType'] = $this->testType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostCustomizeRuleTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SimulatedData'])) {
            $model->simulatedData = $map['SimulatedData'];
        }
        if (isset($map['TestType'])) {
            $model->testType = $map['TestType'];
        }

        return $model;
    }
}
