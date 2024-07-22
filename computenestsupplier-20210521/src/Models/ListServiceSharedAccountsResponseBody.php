<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceSharedAccountsResponseBody\shareAccount;
use AlibabaCloud\Tea\Model;

class ListServiceSharedAccountsResponseBody extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAWns8w4MmhzeptXVRG0PUEU=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example CA3AE512-6D30-549A-B52D-B9042CA8D515
     *
     * @var string
     */
    public $requestId;

    /**
     * @var shareAccount[]
     */
    public $shareAccount;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'shareAccount' => 'ShareAccount',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->shareAccount) {
            $res['ShareAccount'] = [];
            if (null !== $this->shareAccount && \is_array($this->shareAccount)) {
                $n = 0;
                foreach ($this->shareAccount as $item) {
                    $res['ShareAccount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceSharedAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShareAccount'])) {
            if (!empty($map['ShareAccount'])) {
                $model->shareAccount = [];
                $n                   = 0;
                foreach ($map['ShareAccount'] as $item) {
                    $model->shareAccount[$n++] = null !== $item ? shareAccount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
