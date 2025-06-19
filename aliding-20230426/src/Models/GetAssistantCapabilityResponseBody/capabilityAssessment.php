<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment\capabilityList;

class capabilityAssessment extends Model
{
    /**
     * @var string
     */
    public $briefCapability;

    /**
     * @var capabilityList[]
     */
    public $capabilityList;
    protected $_name = [
        'briefCapability' => 'briefCapability',
        'capabilityList' => 'capabilityList',
    ];

    public function validate()
    {
        if (\is_array($this->capabilityList)) {
            Model::validateArray($this->capabilityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->briefCapability) {
            $res['briefCapability'] = $this->briefCapability;
        }

        if (null !== $this->capabilityList) {
            if (\is_array($this->capabilityList)) {
                $res['capabilityList'] = [];
                $n1 = 0;
                foreach ($this->capabilityList as $item1) {
                    $res['capabilityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['briefCapability'])) {
            $model->briefCapability = $map['briefCapability'];
        }

        if (isset($map['capabilityList'])) {
            if (!empty($map['capabilityList'])) {
                $model->capabilityList = [];
                $n1 = 0;
                foreach ($map['capabilityList'] as $item1) {
                    $model->capabilityList[$n1] = capabilityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
