<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

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
    public $phoneNumberListShrink;
    protected $_name = [
        'campaignId'            => 'CampaignId',
        'instanceId'            => 'InstanceId',
        'phoneNumberListShrink' => 'PhoneNumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phoneNumberListShrink) {
            $res['PhoneNumberList'] = $this->phoneNumberListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbortCasesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNumberList'])) {
            $model->phoneNumberListShrink = $map['PhoneNumberList'];
        }

        return $model;
    }
}
