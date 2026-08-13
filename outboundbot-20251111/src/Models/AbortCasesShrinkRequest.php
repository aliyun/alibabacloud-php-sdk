<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class AbortCasesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phoneNumbersShrink;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'instanceId' => 'InstanceId',
        'phoneNumbersShrink' => 'PhoneNumbers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->phoneNumbersShrink) {
            $res['PhoneNumbers'] = $this->phoneNumbersShrink;
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
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbersShrink = $map['PhoneNumbers'];
        }

        return $model;
    }
}
