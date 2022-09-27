<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponseBody;

use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponseBody\subscriptionItemDetail\contacts;
use AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponseBody\subscriptionItemDetail\webhooks;
use AlibabaCloud\Tea\Model;

class subscriptionItemDetail extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var contacts[]
     */
    public $contacts;

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
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $smsStatus;

    /**
     * @var int
     */
    public $ttsStatus;

    /**
     * @var int
     */
    public $webhookStatus;

    /**
     * @var webhooks[]
     */
    public $webhooks;
    protected $_name = [
        'channel'       => 'Channel',
        'contacts'      => 'Contacts',
        'description'   => 'Description',
        'emailStatus'   => 'EmailStatus',
        'itemId'        => 'ItemId',
        'itemName'      => 'ItemName',
        'pmsgStatus'    => 'PmsgStatus',
        'regionId'      => 'RegionId',
        'smsStatus'     => 'SmsStatus',
        'ttsStatus'     => 'TtsStatus',
        'webhookStatus' => 'WebhookStatus',
        'webhooks'      => 'Webhooks',
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
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }
        if (null !== $this->ttsStatus) {
            $res['TtsStatus'] = $this->ttsStatus;
        }
        if (null !== $this->webhookStatus) {
            $res['WebhookStatus'] = $this->webhookStatus;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = [];
            if (null !== $this->webhooks && \is_array($this->webhooks)) {
                $n = 0;
                foreach ($this->webhooks as $item) {
                    $res['Webhooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionItemDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }
        if (isset($map['TtsStatus'])) {
            $model->ttsStatus = $map['TtsStatus'];
        }
        if (isset($map['WebhookStatus'])) {
            $model->webhookStatus = $map['WebhookStatus'];
        }
        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = [];
                $n               = 0;
                foreach ($map['Webhooks'] as $item) {
                    $model->webhooks[$n++] = null !== $item ? webhooks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
