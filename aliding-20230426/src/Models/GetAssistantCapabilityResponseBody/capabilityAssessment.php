<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody\capabilityAssessment\capabilityList;
use AlibabaCloud\Tea\Model;

class capabilityAssessment extends Model
{
    /**
     * @example 能力概览
     *
     * @var string
     */
    public $briefCapability;

    /**
     * @example []
     *
     * @var capabilityList[]
     */
    public $capabilityList;
    protected $_name = [
        'briefCapability' => 'briefCapability',
        'capabilityList' => 'capabilityList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->briefCapability) {
            $res['briefCapability'] = $this->briefCapability;
        }
        if (null !== $this->capabilityList) {
            $res['capabilityList'] = [];
            if (null !== $this->capabilityList && \is_array($this->capabilityList)) {
                $n = 0;
                foreach ($this->capabilityList as $item) {
                    $res['capabilityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capabilityAssessment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['briefCapability'])) {
            $model->briefCapability = $map['briefCapability'];
        }
        if (isset($map['capabilityList'])) {
            if (!empty($map['capabilityList'])) {
                $model->capabilityList = [];
                $n = 0;
                foreach ($map['capabilityList'] as $item) {
                    $model->capabilityList[$n++] = null !== $item ? capabilityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
