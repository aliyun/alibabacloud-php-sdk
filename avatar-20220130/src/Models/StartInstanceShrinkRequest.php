<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class StartInstanceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appShrink;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $channelShrink;

    /**
     * @var string
     */
    public $commandRequestShrink;

    /**
     * @example 9185
     *
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userShrink;
    protected $_name = [
        'appShrink'            => 'App',
        'bizId'                => 'BizId',
        'channelShrink'        => 'Channel',
        'commandRequestShrink' => 'CommandRequest',
        'tenantId'             => 'TenantId',
        'userShrink'           => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appShrink) {
            $res['App'] = $this->appShrink;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->channelShrink) {
            $res['Channel'] = $this->channelShrink;
        }
        if (null !== $this->commandRequestShrink) {
            $res['CommandRequest'] = $this->commandRequestShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->appShrink = $map['App'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Channel'])) {
            $model->channelShrink = $map['Channel'];
        }
        if (isset($map['CommandRequest'])) {
            $model->commandRequestShrink = $map['CommandRequest'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }

        return $model;
    }
}
