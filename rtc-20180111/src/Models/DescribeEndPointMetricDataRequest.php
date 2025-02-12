<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class DescribeEndPointMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var int
     */
    public $createdTs;
    /**
     * @var int
     */
    public $destroyedTs;
    /**
     * @var string
     */
    public $metrics;
    /**
     * @var string
     */
    public $pubCallIdList;
    /**
     * @var string
     */
    public $pubUserId;
    /**
     * @var string
     */
    public $subUserId;
    protected $_name = [
        'appId'         => 'AppId',
        'channelId'     => 'ChannelId',
        'createdTs'     => 'CreatedTs',
        'destroyedTs'   => 'DestroyedTs',
        'metrics'       => 'Metrics',
        'pubCallIdList' => 'PubCallIdList',
        'pubUserId'     => 'PubUserId',
        'subUserId'     => 'SubUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }

        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->pubCallIdList) {
            $res['PubCallIdList'] = $this->pubCallIdList;
        }

        if (null !== $this->pubUserId) {
            $res['PubUserId'] = $this->pubUserId;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }

        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['PubCallIdList'])) {
            $model->pubCallIdList = $map['PubCallIdList'];
        }

        if (isset($map['PubUserId'])) {
            $model->pubUserId = $map['PubUserId'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
