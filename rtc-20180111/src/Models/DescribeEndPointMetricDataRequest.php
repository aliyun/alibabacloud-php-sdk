<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeEndPointMetricDataRequest extends Model
{
    /**
     * @description APP ID。
     *
     * This parameter is required.
     * @example testappid
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example testid
     *
     * @var string
     */
    public $channelId;

    /**
     * @description This parameter is required.
     *
     * @example 1614936817
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1614936817
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description This parameter is required.
     *
     * @example VIDEO_STUCK_CAMERA
     *
     * @var string
     */
    public $metrics;

    /**
     * @example testcall1,testcall2
     *
     * @var string
     */
    public $pubCallIdList;

    /**
     * @example testuserid
     *
     * @var string
     */
    public $pubUserId;

    /**
     * @example testuserid
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeEndPointMetricDataRequest
     */
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
