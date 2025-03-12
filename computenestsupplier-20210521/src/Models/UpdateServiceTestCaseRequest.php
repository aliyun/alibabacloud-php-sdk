<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceTestCaseRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service test case id.
     *
     * This parameter is required.
     * @example stc-2deec15c20b24aaf9f16
     *
     * @var string
     */
    public $testCaseId;

    /**
     * @description The service test case name.
     *
     * This parameter is required.
     * @example case1
     *
     * @var string
     */
    public $testCaseName;

    /**
     * @description The service test config.
     *
     * This parameter is required.
     * @example ---
     * InstancePassword: "$[iact3-auto]"
     * @var string
     */
    public $testConfig;
    protected $_name = [
        'regionId'     => 'RegionId',
        'testCaseId'   => 'TestCaseId',
        'testCaseName' => 'TestCaseName',
        'testConfig'   => 'TestConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->testCaseId) {
            $res['TestCaseId'] = $this->testCaseId;
        }
        if (null !== $this->testCaseName) {
            $res['TestCaseName'] = $this->testCaseName;
        }
        if (null !== $this->testConfig) {
            $res['TestConfig'] = $this->testConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceTestCaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TestCaseId'])) {
            $model->testCaseId = $map['TestCaseId'];
        }
        if (isset($map['TestCaseName'])) {
            $model->testCaseName = $map['TestCaseName'];
        }
        if (isset($map['TestConfig'])) {
            $model->testConfig = $map['TestConfig'];
        }

        return $model;
    }
}
