<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody\baselineItemInfos;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineItemListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageBaselineItemListResponseBody extends Model
{
    /**
     * @var baselineItemInfos[]
     */
    public $baselineItemInfos;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineItemInfos' => 'BaselineItemInfos',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemInfos) {
            $res['BaselineItemInfos'] = [];
            if (null !== $this->baselineItemInfos && \is_array($this->baselineItemInfos)) {
                $n = 0;
                foreach ($this->baselineItemInfos as $item) {
                    $res['BaselineItemInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeImageBaselineItemListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemInfos'])) {
            if (!empty($map['BaselineItemInfos'])) {
                $model->baselineItemInfos = [];
                $n                        = 0;
                foreach ($map['BaselineItemInfos'] as $item) {
                    $model->baselineItemInfos[$n++] = null !== $item ? baselineItemInfos::fromMap($item) : $item;
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
