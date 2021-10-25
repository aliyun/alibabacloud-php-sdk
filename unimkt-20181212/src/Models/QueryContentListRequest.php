<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryContentListRequest extends Model
{
    /**
     * @var int
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $brandUserId;

    /**
     * @var string
     */
    public $taskBizType;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'proxyUserId' => 'ProxyUserId',
        'brandUserId' => 'BrandUserId',
        'taskBizType' => 'TaskBizType',
        'taskType'    => 'TaskType',
        'channelId'   => 'ChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->brandUserId) {
            $res['BrandUserId'] = $this->brandUserId;
        }
        if (null !== $this->taskBizType) {
            $res['TaskBizType'] = $this->taskBizType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryContentListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['BrandUserId'])) {
            $model->brandUserId = $map['BrandUserId'];
        }
        if (isset($map['TaskBizType'])) {
            $model->taskBizType = $map['TaskBizType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
