<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList;
use AlibabaCloud\Tea\Model;

class DescribeClusterServiceConfigTagResponseBody extends Model
{
    /**
     * @var configTagList
     */
    public $configTagList;

    /**
     * @example EBB4D49C-4064-4818-B3AE-4C6BE5FC8264
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configTagList' => 'ConfigTagList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configTagList) {
            $res['ConfigTagList'] = null !== $this->configTagList ? $this->configTagList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterServiceConfigTagResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigTagList'])) {
            $model->configTagList = configTagList::fromMap($map['ConfigTagList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
