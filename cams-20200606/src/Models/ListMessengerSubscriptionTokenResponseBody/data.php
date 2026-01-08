<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListMessengerSubscriptionTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $creationTimestamp;

    /**
     * @var string
     */
    public $customAudienceId;

    /**
     * @var int
     */
    public $nextEligibleTime;

    /**
     * @var string
     */
    public $notificationMessagesReoptin;

    /**
     * @var string
     */
    public $notificationMessagesTimezone;

    /**
     * @var string
     */
    public $notificationMessagesToken;

    /**
     * @var string
     */
    public $pageId;

    /**
     * @var string
     */
    public $recipientId;

    /**
     * @var int
     */
    public $tokenExpiryTimestamp;

    /**
     * @var string
     */
    public $topicTitle;

    /**
     * @var string
     */
    public $userTokenStatus;
    protected $_name = [
        'creationTimestamp' => 'CreationTimestamp',
        'customAudienceId' => 'CustomAudienceId',
        'nextEligibleTime' => 'NextEligibleTime',
        'notificationMessagesReoptin' => 'NotificationMessagesReoptin',
        'notificationMessagesTimezone' => 'NotificationMessagesTimezone',
        'notificationMessagesToken' => 'NotificationMessagesToken',
        'pageId' => 'PageId',
        'recipientId' => 'RecipientId',
        'tokenExpiryTimestamp' => 'TokenExpiryTimestamp',
        'topicTitle' => 'TopicTitle',
        'userTokenStatus' => 'UserTokenStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTimestamp) {
            $res['CreationTimestamp'] = $this->creationTimestamp;
        }

        if (null !== $this->customAudienceId) {
            $res['CustomAudienceId'] = $this->customAudienceId;
        }

        if (null !== $this->nextEligibleTime) {
            $res['NextEligibleTime'] = $this->nextEligibleTime;
        }

        if (null !== $this->notificationMessagesReoptin) {
            $res['NotificationMessagesReoptin'] = $this->notificationMessagesReoptin;
        }

        if (null !== $this->notificationMessagesTimezone) {
            $res['NotificationMessagesTimezone'] = $this->notificationMessagesTimezone;
        }

        if (null !== $this->notificationMessagesToken) {
            $res['NotificationMessagesToken'] = $this->notificationMessagesToken;
        }

        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }

        if (null !== $this->recipientId) {
            $res['RecipientId'] = $this->recipientId;
        }

        if (null !== $this->tokenExpiryTimestamp) {
            $res['TokenExpiryTimestamp'] = $this->tokenExpiryTimestamp;
        }

        if (null !== $this->topicTitle) {
            $res['TopicTitle'] = $this->topicTitle;
        }

        if (null !== $this->userTokenStatus) {
            $res['UserTokenStatus'] = $this->userTokenStatus;
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
        if (isset($map['CreationTimestamp'])) {
            $model->creationTimestamp = $map['CreationTimestamp'];
        }

        if (isset($map['CustomAudienceId'])) {
            $model->customAudienceId = $map['CustomAudienceId'];
        }

        if (isset($map['NextEligibleTime'])) {
            $model->nextEligibleTime = $map['NextEligibleTime'];
        }

        if (isset($map['NotificationMessagesReoptin'])) {
            $model->notificationMessagesReoptin = $map['NotificationMessagesReoptin'];
        }

        if (isset($map['NotificationMessagesTimezone'])) {
            $model->notificationMessagesTimezone = $map['NotificationMessagesTimezone'];
        }

        if (isset($map['NotificationMessagesToken'])) {
            $model->notificationMessagesToken = $map['NotificationMessagesToken'];
        }

        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }

        if (isset($map['RecipientId'])) {
            $model->recipientId = $map['RecipientId'];
        }

        if (isset($map['TokenExpiryTimestamp'])) {
            $model->tokenExpiryTimestamp = $map['TokenExpiryTimestamp'];
        }

        if (isset($map['TopicTitle'])) {
            $model->topicTitle = $map['TopicTitle'];
        }

        if (isset($map['UserTokenStatus'])) {
            $model->userTokenStatus = $map['UserTokenStatus'];
        }

        return $model;
    }
}
