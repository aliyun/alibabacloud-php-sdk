<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\ScrollDomainListResponseBody\data;
use AlibabaCloud\Tea\Model;

class ScrollDomainListResponseBody extends Model
{
    /**
     * @description The domain names.
     *
     * @var data
     */
    public $data;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 722AB7F5-61F0-408C-A012-4784AFD34083
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The scroll ID.
     *
     * @example test
     *
     * @var string
     */
    public $scrollId;

    /**
     * @description The number of remaining domain names to be queried.
     *
     * @example 200
     *
     * @var int
     */
    public $totalItemNum;
    protected $_name = [
        'data'         => 'Data',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'scrollId'     => 'ScrollId',
        'totalItemNum' => 'TotalItemNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scrollId) {
            $res['ScrollId'] = $this->scrollId;
        }
        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScrollDomainListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScrollId'])) {
            $model->scrollId = $map['ScrollId'];
        }
        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }

        return $model;
    }
}
