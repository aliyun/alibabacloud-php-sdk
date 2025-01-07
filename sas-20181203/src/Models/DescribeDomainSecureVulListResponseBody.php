<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureVulListResponseBody\vulList;
use AlibabaCloud\Tea\Model;

class DescribeDomainSecureVulListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 7532B7EE-7CE7-5F4D-BF04-B12447DD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of vulnerabilities returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The domain name-related vulnerabilities.
     *
     * @var vulList[]
     */
    public $vulList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vulList'    => 'VulList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vulList) {
            $res['VulList'] = [];
            if (null !== $this->vulList && \is_array($this->vulList)) {
                $n = 0;
                foreach ($this->vulList as $item) {
                    $res['VulList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureVulListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VulList'])) {
            if (!empty($map['VulList'])) {
                $model->vulList = [];
                $n              = 0;
                foreach ($map['VulList'] as $item) {
                    $model->vulList[$n++] = null !== $item ? vulList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
