<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class AddCasesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;
    /**
     * @var string
     */
    public $caseListShrink;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'campaignId'     => 'CampaignId',
        'caseListShrink' => 'CaseList',
        'instanceId'     => 'InstanceId',
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

        if (null !== $this->caseListShrink) {
            $res['CaseList'] = $this->caseListShrink;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['CaseList'])) {
            $model->caseListShrink = $map['CaseList'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
