<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponseBody\keys;
use AlibabaCloud\Tea\Model;

class ListKeysResponseBody extends Model
{
    /**
     * @var keys
     */
    public $keys;

    /**
     * @description The total number of CMKs.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description An array that consists of the CMKs of the current Alibaba Cloud account in the current region.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the CMK. The ID must be globally unique.
     *
     * @example 8252db58-2036-408c-a3d5-56e656dc2551
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the CMK.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'keys'       => 'Keys',
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
        if (null !== $this->keys) {
            $res['Keys'] = null !== $this->keys ? $this->keys->toMap() : null;
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
     * @return ListKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            $model->keys = keys::fromMap($map['Keys']);
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
