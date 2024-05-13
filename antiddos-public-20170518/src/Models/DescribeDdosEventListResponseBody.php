<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList;
use AlibabaCloud\Tea\Model;

class DescribeDdosEventListResponseBody extends Model
{
    /**
     * @description An array that consists of the details of a DDoS attack event.
     *
     * @var ddosEventList
     */
    public $ddosEventList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BC0907F8-A9F3-5E11-977B-D59CD98C64ED
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of DDoS attack events.
     *
     * @example 1
     *
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
            $res['DdosEventList'] = null !== $this->ddosEventList ? $this->ddosEventList->toMap() : null;
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
            $model->ddosEventList = ddosEventList::fromMap($map['DdosEventList']);
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
