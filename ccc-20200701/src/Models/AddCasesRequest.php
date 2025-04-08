<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\AddCasesRequest\caseList;

class AddCasesRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var caseList[]
     */
    public $caseList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'caseList' => 'CaseList',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->caseList)) {
            Model::validateArray($this->caseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->caseList) {
            if (\is_array($this->caseList)) {
                $res['CaseList'] = [];
                $n1 = 0;
                foreach ($this->caseList as $item1) {
                    $res['CaseList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['CaseList'])) {
                $model->caseList = [];
                $n1 = 0;
                foreach ($map['CaseList'] as $item1) {
                    $model->caseList[$n1++] = caseList::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
