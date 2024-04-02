<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebsiteInstanceIdResponseBody extends Model
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
    public $websiteInstanceIdList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'websiteInstanceIdList' => 'WebsiteInstanceIdList',
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
        if (null !== $this->websiteInstanceIdList) {
            $res['WebsiteInstanceIdList'] = $this->websiteInstanceIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteInstanceIdResponseBody
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
        if (isset($map['WebsiteInstanceIdList'])) {
            if (!empty($map['WebsiteInstanceIdList'])) {
                $model->websiteInstanceIdList = $map['WebsiteInstanceIdList'];
            }
        }

        return $model;
    }
}
