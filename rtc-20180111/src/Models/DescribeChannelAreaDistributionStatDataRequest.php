<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelAreaDistributionStatDataRequest extends Model
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
     * @var string
     */
    public $parentArea;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'parentArea'  => 'ParentArea',
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
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelAreaDistributionStatDataRequest
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
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }

        return $model;
    }
}
