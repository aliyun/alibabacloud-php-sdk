<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListCheckItemResponseBody extends Model
{
    /**
     * @var checkItems[]
     */
    public $checkItems;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 9F4E6157-9600-5588-86B9-38F09067****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkItems' => 'CheckItems',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItems) {
            $res['CheckItems'] = [];
            if (null !== $this->checkItems && \is_array($this->checkItems)) {
                $n = 0;
                foreach ($this->checkItems as $item) {
                    $res['CheckItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItems'])) {
            if (!empty($map['CheckItems'])) {
                $model->checkItems = [];
                $n                 = 0;
                foreach ($map['CheckItems'] as $item) {
                    $model->checkItems[$n++] = null !== $item ? checkItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
