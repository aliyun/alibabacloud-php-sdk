<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponseBody\alertConfig;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponseBody\alertGroup;

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
        if (null !== $this->alertConfig) {
            $this->alertConfig->validate();
        }
        if (null !== $this->alertGroup) {
            $this->alertGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toArray($noStream) : $this->alertConfig;
        }

        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = null !== $this->alertGroup ? $this->alertGroup->toArray($noStream) : $this->alertGroup;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
