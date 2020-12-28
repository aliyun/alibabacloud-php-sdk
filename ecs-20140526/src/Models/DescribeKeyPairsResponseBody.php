<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponseBody\keyPairs;
use AlibabaCloud\Tea\Model;

class DescribeKeyPairsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var keyPairs[]
     */
    public $keyPairs;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'keyPairs'   => 'KeyPairs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->keyPairs) {
            $res['KeyPairs'] = [];
            if (null !== $this->keyPairs && \is_array($this->keyPairs)) {
                $n = 0;
                foreach ($this->keyPairs as $item) {
                    $res['KeyPairs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['KeyPairs'])) {
            if (!empty($map['KeyPairs'])) {
                $model->keyPairs = [];
                $n               = 0;
                foreach ($map['KeyPairs'] as $item) {
                    $model->keyPairs[$n++] = null !== $item ? keyPairs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
