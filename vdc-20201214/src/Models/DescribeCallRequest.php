<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeCallRequest extends Model
{
    /**
     * @example pdtk****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1230
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1616564129
     *
     * @var int
     */
    public $createdTs;

    /**
     * @example 1616564304
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @example USER_DURATION_STAT
     *
     * @var string
     */
    public $extDataType;

    /**
     * @example false
     *
     * @var bool
     */
    public $queryExpInfo;
    protected $_name = [
        'appId'        => 'AppId',
        'channelId'    => 'ChannelId',
        'createdTs'    => 'CreatedTs',
        'destroyedTs'  => 'DestroyedTs',
        'extDataType'  => 'ExtDataType',
        'queryExpInfo' => 'QueryExpInfo',
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
        if (null !== $this->extDataType) {
            $res['ExtDataType'] = $this->extDataType;
        }
        if (null !== $this->queryExpInfo) {
            $res['QueryExpInfo'] = $this->queryExpInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCallRequest
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
        if (isset($map['ExtDataType'])) {
            $model->extDataType = $map['ExtDataType'];
        }
        if (isset($map['QueryExpInfo'])) {
            $model->queryExpInfo = $map['QueryExpInfo'];
        }

        return $model;
    }
}
