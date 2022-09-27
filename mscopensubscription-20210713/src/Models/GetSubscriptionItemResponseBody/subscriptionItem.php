<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionItem extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var int[]
     */
    public $contactIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $emailStatus;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var int
     */
    public $pmsgStatus;

    /**
     * @var int
     */
    public $smsStatus;

    /**
     * @var int
     */
    public $ttsStatus;

    /**
     * @var int[]
     */
    public $webhookIds;

    /**
     * @var int
     */
    public $webhookStatus;
    protected $_name = [
        'channel'       => 'Channel',
        'contactIds'    => 'ContactIds',
        'description'   => 'Description',
        'emailStatus'   => 'EmailStatus',
        'itemId'        => 'ItemId',
        'itemName'      => 'ItemName',
        'pmsgStatus'    => 'PmsgStatus',
        'smsStatus'     => 'SmsStatus',
        'ttsStatus'     => 'TtsStatus',
        'webhookIds'    => 'WebhookIds',
        'webhookStatus' => 'WebhookStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->emailStatus) {
            $res['EmailStatus'] = $this->emailStatus;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->pmsgStatus) {
            $res['PmsgStatus'] = $this->pmsgStatus;
        }
        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }
        if (null !== $this->ttsStatus) {
            $res['TtsStatus'] = $this->ttsStatus;
        }
        if (null !== $this->webhookIds) {
            $res['WebhookIds'] = $this->webhookIds;
        }
        if (null !== $this->webhookStatus) {
            $res['WebhookStatus'] = $this->webhookStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ContactIds'])) {
            if (!empty($map['ContactIds'])) {
                $model->contactIds = $map['ContactIds'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EmailStatus'])) {
            $model->emailStatus = $map['EmailStatus'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['PmsgStatus'])) {
            $model->pmsgStatus = $map['PmsgStatus'];
        }
        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }
        if (isset($map['TtsStatus'])) {
            $model->ttsStatus = $map['TtsStatus'];
        }
        if (isset($map['WebhookIds'])) {
            if (!empty($map['WebhookIds'])) {
                $model->webhookIds = $map['WebhookIds'];
            }
        }
        if (isset($map['WebhookStatus'])) {
            $model->webhookStatus = $map['WebhookStatus'];
        }

        return $model;
    }
}
