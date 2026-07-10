<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class GenerateGroupImageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callbackSecret;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $groupType;

    /**
     * @var string
     */
    public $platformItemIdListShrink;
    protected $_name = [
        'callbackSecret' => 'CallbackSecret',
        'callbackUrl' => 'CallbackUrl',
        'groupId' => 'GroupId',
        'groupType' => 'GroupType',
        'platformItemIdListShrink' => 'PlatformItemIdList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackSecret) {
            $res['CallbackSecret'] = $this->callbackSecret;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->platformItemIdListShrink) {
            $res['PlatformItemIdList'] = $this->platformItemIdListShrink;
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
        if (isset($map['CallbackSecret'])) {
            $model->callbackSecret = $map['CallbackSecret'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['PlatformItemIdList'])) {
            $model->platformItemIdListShrink = $map['PlatformItemIdList'];
        }

        return $model;
    }
}
