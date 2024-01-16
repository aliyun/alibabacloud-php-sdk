<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponseBody\compareResult;
use AlibabaCloud\Tea\Model;

class ComparePlaybooksResponseBody extends Model
{
    /**
     * @description The comparison result.
     *
     * @var compareResult
     */
    public $compareResult;

    /**
     * @description The request ID.
     *
     * @example 2EC05B06-BF3C-5F3E-8FE8-3B1FAD76087A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compareResult' => 'CompareResult',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compareResult) {
            $res['CompareResult'] = null !== $this->compareResult ? $this->compareResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComparePlaybooksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompareResult'])) {
            $model->compareResult = compareResult::fromMap($map['CompareResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
