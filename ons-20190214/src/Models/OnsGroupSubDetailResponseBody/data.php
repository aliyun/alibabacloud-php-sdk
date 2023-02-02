<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupSubDetailResponseBody\data\subscriptionDataList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the consumer group that you want to query.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The consumption mode. Valid values:
     *
     *   **CLUSTERING**: the clustering consumption mode
     *   **BROADCASTING**: the broadcasting consumption mode
     *
     * For more information about consumption modes, see [Clustering consumption and broadcasting consumption](~~43163~~).
     * @example CLUSTERING
     *
     * @var string
     */
    public $messageModel;

    /**
     * @description Indicates whether consumers in the group are online.
     *
     * @example true
     *
     * @var bool
     */
    public $online;

    /**
     * @description The topics to which consumers in the consumer group subscribe. If all consumers in the specified group are offline, no topics are returned.
     *
     * @var subscriptionDataList
     */
    public $subscriptionDataList;
    protected $_name = [
        'groupId'              => 'GroupId',
        'messageModel'         => 'MessageModel',
        'online'               => 'Online',
        'subscriptionDataList' => 'SubscriptionDataList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SubscriptionDataList'] = null !== $this->subscriptionDataList ? $this->subscriptionDataList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
