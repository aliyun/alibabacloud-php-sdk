<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigHistoryResponseBody\config;
use AlibabaCloud\Tea\Model;

class DescribeClusterServiceConfigHistoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var config
     */
    public $config;
    protected $_name = [
        'requestId' => 'RequestId',
        'config'    => 'Config',
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
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterServiceConfigHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        return $model;
    }
}
