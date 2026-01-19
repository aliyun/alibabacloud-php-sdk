<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Dara\Model;

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
        'campaignId' => 'CampaignId',
        'instanceId' => 'InstanceId',
        'phoneNumberList' => 'PhoneNumberList',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNumberList)) {
            Model::validateArray($this->phoneNumberList);
        }
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

        if (null !== $this->phoneNumberList) {
            if (\is_array($this->phoneNumberList)) {
                $res['PhoneNumberList'] = [];
                $n1 = 0;
                foreach ($this->phoneNumberList as $item1) {
                    $res['PhoneNumberList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['PhoneNumberList'])) {
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = [];
                $n1 = 0;
                foreach ($map['PhoneNumberList'] as $item1) {
                    $model->phoneNumberList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
