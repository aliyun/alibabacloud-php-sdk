<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebsiteInstanceKeyUrlResponseBody extends Model
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
     * @var string[]
     */
    public $websiteInstanceKeyUrlList;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'totalCount'                => 'TotalCount',
        'websiteInstanceKeyUrlList' => 'WebsiteInstanceKeyUrlList',
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
        if (null !== $this->websiteInstanceKeyUrlList) {
            $res['WebsiteInstanceKeyUrlList'] = $this->websiteInstanceKeyUrlList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteInstanceKeyUrlResponseBody
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
        if (isset($map['WebsiteInstanceKeyUrlList'])) {
            if (!empty($map['WebsiteInstanceKeyUrlList'])) {
                $model->websiteInstanceKeyUrlList = $map['WebsiteInstanceKeyUrlList'];
            }
        }

        return $model;
    }
}
