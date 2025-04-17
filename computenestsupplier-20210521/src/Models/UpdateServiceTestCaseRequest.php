<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceTestCaseRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $testCaseId;

    /**
     * @var string
     */
    public $testCaseName;

    /**
     * @var string
     */
    public $testConfig;
    protected $_name = [
        'regionId' => 'RegionId',
        'testCaseId' => 'TestCaseId',
        'testCaseName' => 'TestCaseName',
        'testConfig' => 'TestConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
