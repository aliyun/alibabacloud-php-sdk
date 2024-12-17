<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeMediaDistributionResponseBody\mediaDistributionList;
use AlibabaCloud\Tea\Model;

class DescribeMediaDistributionResponseBody extends Model
{
    /**
     * @var mediaDistributionList[]
     */
    public $mediaDistributionList;

    /**
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'mediaDistributionList' => 'MediaDistributionList',
        'requestId'             => 'RequestId',
        'total'                 => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaDistributionList) {
            $res['MediaDistributionList'] = [];
            if (null !== $this->mediaDistributionList && \is_array($this->mediaDistributionList)) {
                $n = 0;
                foreach ($this->mediaDistributionList as $item) {
                    $res['MediaDistributionList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeMediaDistributionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaDistributionList'])) {
            if (!empty($map['MediaDistributionList'])) {
                $model->mediaDistributionList = [];
                $n                            = 0;
                foreach ($map['MediaDistributionList'] as $item) {
                    $model->mediaDistributionList[$n++] = null !== $item ? mediaDistributionList::fromMap($item) : $item;
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
