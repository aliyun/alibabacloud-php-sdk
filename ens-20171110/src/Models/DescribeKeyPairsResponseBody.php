<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponseBody\keyPairs;
use AlibabaCloud\Tea\Model;

class DescribeKeyPairsResponseBody extends Model
{
    /**
     * @description Details about the key pairs.
     *
     * @var keyPairs
     */
    public $keyPairs;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 37B52F33-6879-49D0-A39B-22966B01449E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of key pairs.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'keyPairs'   => 'KeyPairs',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairs) {
            $res['KeyPairs'] = null !== $this->keyPairs ? $this->keyPairs->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeKeyPairsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairs'])) {
            $model->keyPairs = keyPairs::fromMap($map['KeyPairs']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
