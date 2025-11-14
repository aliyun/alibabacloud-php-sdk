<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ModifyCampaignNumbersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $instGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $numberListShrink;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'instGroupId' => 'InstGroupId',
        'instanceId' => 'InstanceId',
        'numberListShrink' => 'NumberList',
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

        if (null !== $this->instGroupId) {
            $res['InstGroupId'] = $this->instGroupId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->numberListShrink) {
            $res['NumberList'] = $this->numberListShrink;
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

        if (isset($map['InstGroupId'])) {
            $model->instGroupId = $map['InstGroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NumberList'])) {
            $model->numberListShrink = $map['NumberList'];
        }

        return $model;
    }
}
