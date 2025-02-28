<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class DeleteServiceTestCaseRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $testCaseId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'testCaseId' => 'TestCaseId',
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

        return $model;
    }
}
