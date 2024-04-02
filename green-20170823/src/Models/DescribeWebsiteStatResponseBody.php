<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeWebsiteStatResponseBody\websiteStatList;
use AlibabaCloud\Tea\Model;

class DescribeWebsiteStatResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var websiteStatList[]
     */
    public $websiteStatList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'websiteStatList' => 'WebsiteStatList',
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
        if (null !== $this->websiteStatList) {
            $res['WebsiteStatList'] = [];
            if (null !== $this->websiteStatList && \is_array($this->websiteStatList)) {
                $n = 0;
                foreach ($this->websiteStatList as $item) {
                    $res['WebsiteStatList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteStatResponseBody
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
        if (isset($map['WebsiteStatList'])) {
            if (!empty($map['WebsiteStatList'])) {
                $model->websiteStatList = [];
                $n                      = 0;
                foreach ($map['WebsiteStatList'] as $item) {
                    $model->websiteStatList[$n++] = null !== $item ? websiteStatList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
