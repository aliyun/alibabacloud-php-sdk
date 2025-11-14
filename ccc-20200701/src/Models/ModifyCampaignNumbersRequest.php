<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ModifyCampaignNumbersRequest extends Model
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
     * @var string[]
     */
    public $numberList;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'instGroupId' => 'InstGroupId',
        'instanceId' => 'InstanceId',
        'numberList' => 'NumberList',
    ];

    public function validate()
    {
        if (\is_array($this->numberList)) {
            Model::validateArray($this->numberList);
        }
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

        if (null !== $this->numberList) {
            if (\is_array($this->numberList)) {
                $res['NumberList'] = [];
                $n1 = 0;
                foreach ($this->numberList as $item1) {
                    $res['NumberList'][$n1] = $item1;
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

        if (isset($map['InstGroupId'])) {
            $model->instGroupId = $map['InstGroupId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = [];
                $n1 = 0;
                foreach ($map['NumberList'] as $item1) {
                    $model->numberList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
