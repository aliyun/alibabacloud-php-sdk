<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceTestCaseResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example E50287CB-AABF-4877-92C0-289B339A1546
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The test case Id
     *
     * @example stc-5ba03a6a9a2746be8739
     *
     * @var string
     */
    public $testCaseId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'testCaseId' => 'TestCaseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->testCaseId) {
            $res['TestCaseId'] = $this->testCaseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceTestCaseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TestCaseId'])) {
            $model->testCaseId = $map['TestCaseId'];
        }

        return $model;
    }
}
