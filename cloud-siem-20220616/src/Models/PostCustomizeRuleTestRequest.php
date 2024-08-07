<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class PostCustomizeRuleTestRequest extends Model
{
    /**
     * @description The ID of the rule.
     *
     * @example 123456789
     *
     * @var int
     */
    public $id;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions inside China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the account that you switch from the management account.
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description The type of the view. Valid values:
     * - 1: the global account
     * @example 1
     *
     * @var int
     */
    public $roleType;

    /**
     * @description The simulation data for the test. This parameter is available only when TestType is set to simulate.
     *
     * @example [{"key1":"value1","key2":"value2","key3":"value3","key4":"value4","key5":"value5"}]
     *
     * @var string
     */
    public $simulatedData;

    /**
     * @description The test type. Valid values:
     *
     *   simulate: simulation data test
     *   business: business data test
     *
     * @example simulate
     *
     * @var string
     */
    public $testType;
    protected $_name = [
        'id'            => 'Id',
        'regionId'      => 'RegionId',
        'roleFor'       => 'RoleFor',
        'roleType'      => 'RoleType',
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
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
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
