<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebLockExclusiveFileTypeResponseBody extends Model
{
    /**
     * @description An array that consists of the types of the files that have web tamper proofing disabled.
     *
     * @var string[]
     */
    public $exclusiveFileType;

    /**
     * @description The ID of the request.
     *
     * @example 9CCD7D51-5E81-5FF5-BD74-813DDD248430
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of types of the files that have web tamper proofing disabled.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'exclusiveFileType' => 'ExclusiveFileType',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exclusiveFileType) {
            $res['ExclusiveFileType'] = $this->exclusiveFileType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebLockExclusiveFileTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExclusiveFileType'])) {
            if (!empty($map['ExclusiveFileType'])) {
                $model->exclusiveFileType = $map['ExclusiveFileType'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
