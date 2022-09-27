<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class UpdateSubscriptionItemRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $contactIds;

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
    public $locale;

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
     * @var int[]
     */
    public $webhookIds;

    /**
     * @var int
     */
    public $webhookStatus;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'contactIds'    => 'ContactIds',
        'emailStatus'   => 'EmailStatus',
        'itemId'        => 'ItemId',
        'locale'        => 'Locale',
        'pmsgStatus'    => 'PmsgStatus',
        'regionId'      => 'RegionId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->emailStatus) {
            $res['EmailStatus'] = $this->emailStatus;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
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
     * @return UpdateSubscriptionItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ContactIds'])) {
            if (!empty($map['ContactIds'])) {
                $model->contactIds = $map['ContactIds'];
            }
        }
        if (isset($map['EmailStatus'])) {
            $model->emailStatus = $map['EmailStatus'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
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
