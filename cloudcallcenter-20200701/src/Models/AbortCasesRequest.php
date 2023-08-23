<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AbortCasesRequest extends Model
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
     * @var string[]
     */
    public $phoneNumberList;
    protected $_name = [
        'campaignId'      => 'CampaignId',
        'instanceId'      => 'InstanceId',
        'phoneNumberList' => 'PhoneNumberList',
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
        if (null !== $this->phoneNumberList) {
            $res['PhoneNumberList'] = $this->phoneNumberList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbortCasesRequest
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
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = $map['PhoneNumberList'];
            }
        }

        return $model;
    }
}
