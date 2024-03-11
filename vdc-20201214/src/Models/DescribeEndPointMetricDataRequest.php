<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeEndPointMetricDataRequest extends Model
{
    /**
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 311
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1615887685
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1615888615
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example APP_CPU,SYSTEM_CPU
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
     * @example c906531af5f9****
     *
     * @var string
     */
    public $pubUserId;

    /**
     * @example testsubuserid
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
