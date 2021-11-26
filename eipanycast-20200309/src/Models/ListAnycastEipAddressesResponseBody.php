<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList;
use AlibabaCloud\Tea\Model;

class ListAnycastEipAddressesResponseBody extends Model
{
    /**
     * @var anycastList[]
     */
    public $anycastList;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'anycastList' => 'AnycastList',
        'nextToken'   => 'NextToken',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastList) {
            $res['AnycastList'] = [];
            if (null !== $this->anycastList && \is_array($this->anycastList)) {
                $n = 0;
                foreach ($this->anycastList as $item) {
                    $res['AnycastList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListAnycastEipAddressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastList'])) {
            if (!empty($map['AnycastList'])) {
                $model->anycastList = [];
                $n                  = 0;
                foreach ($map['AnycastList'] as $item) {
                    $model->anycastList[$n++] = null !== $item ? anycastList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
