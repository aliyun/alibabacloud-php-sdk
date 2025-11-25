<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList;

class data extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var subscriptionDataList
     */
    public $subscriptionDataList;
    protected $_name = [
        'groupId' => 'GroupId',
        'messageModel' => 'MessageModel',
        'online' => 'Online',
        'subscriptionDataList' => 'SubscriptionDataList',
    ];

    public function validate()
    {
        if (null !== $this->subscriptionDataList) {
            $this->subscriptionDataList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->messageModel) {
            $res['MessageModel'] = $this->messageModel;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }

        if (null !== $this->subscriptionDataList) {
            $res['SubscriptionDataList'] = null !== $this->subscriptionDataList ? $this->subscriptionDataList->toArray($noStream) : $this->subscriptionDataList;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['MessageModel'])) {
            $model->messageModel = $map['MessageModel'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        if (isset($map['SubscriptionDataList'])) {
            $model->subscriptionDataList = subscriptionDataList::fromMap($map['SubscriptionDataList']);
        }

        return $model;
    }
}
