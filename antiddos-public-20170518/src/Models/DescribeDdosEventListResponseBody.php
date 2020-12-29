<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList;
use AlibabaCloud\Tea\Model;

class DescribeDdosEventListResponseBody extends Model
{
    /**
     * @var ddosEventList[]
     */
    public $ddosEventList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'ddosEventList' => 'DdosEventList',
        'requestId'     => 'RequestId',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosEventList) {
            $res['DdosEventList'] = [];
            if (null !== $this->ddosEventList && \is_array($this->ddosEventList)) {
                $n = 0;
                foreach ($this->ddosEventList as $item) {
                    $res['DdosEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosEventList'])) {
            if (!empty($map['DdosEventList'])) {
                $model->ddosEventList = [];
                $n                    = 0;
                foreach ($map['DdosEventList'] as $item) {
                    $model->ddosEventList[$n++] = null !== $item ? ddosEventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
