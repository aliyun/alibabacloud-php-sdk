<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebLockInclusiveFileTypeResponseBody extends Model
{
    /**
     * @description An array that consists of the types of files that can be protected by web tamper proofing.
     *
     * @var string[]
     */
    public $inclusiveFileType;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F3B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the types of files that can be protected by web tamper proofing.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'inclusiveFileType' => 'InclusiveFileType',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inclusiveFileType) {
            $res['InclusiveFileType'] = $this->inclusiveFileType;
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
     * @return DescribeWebLockInclusiveFileTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InclusiveFileType'])) {
            if (!empty($map['InclusiveFileType'])) {
                $model->inclusiveFileType = $map['InclusiveFileType'];
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
