<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponseBody\alertConfig;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponseBody\alertGroup;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmGlobalAlertResponseBody extends Model
{
    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var alertGroup
     */
    public $alertGroup;

    /**
     * @example B57C121B-A45F-44D8-A9B2-13E5A5044195
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'alertGroup'  => 'AlertGroup',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = null !== $this->alertGroup ? $this->alertGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmGlobalAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = alertGroup::fromMap($map['AlertGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
