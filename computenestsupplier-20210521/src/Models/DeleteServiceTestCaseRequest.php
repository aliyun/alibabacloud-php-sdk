<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceTestCaseRequest extends Model
{
    /**
     * @description Region ID.
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
     *
     * @example stc-0b2a3ad7e1de4c299eec
     *
     * @var string
     */
    public $testCaseId;
    protected $_name = [
        'regionId' => 'RegionId',
        'testCaseId' => 'TestCaseId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->testCaseId) {
            $res['TestCaseId'] = $this->testCaseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceTestCaseRequest
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

        return $model;
    }
}
