<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appSdk\customSign;

class appSdk extends Model
{
    /**
     * @var customSign
     */
    public $customSign;
    /**
     * @var string
     */
    public $customSignStatus;
    /**
     * @var string[]
     */
    public $featureAbnormal;
    protected $_name = [
        'customSign'       => 'CustomSign',
        'customSignStatus' => 'CustomSignStatus',
        'featureAbnormal'  => 'FeatureAbnormal',
    ];

    public function validate()
    {
        if (null !== $this->customSign) {
            $this->customSign->validate();
        }
        if (\is_array($this->featureAbnormal)) {
            Model::validateArray($this->featureAbnormal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customSign) {
            $res['CustomSign'] = null !== $this->customSign ? $this->customSign->toArray($noStream) : $this->customSign;
        }

        if (null !== $this->customSignStatus) {
            $res['CustomSignStatus'] = $this->customSignStatus;
        }

        if (null !== $this->featureAbnormal) {
            if (\is_array($this->featureAbnormal)) {
                $res['FeatureAbnormal'] = [];
                $n1                     = 0;
                foreach ($this->featureAbnormal as $item1) {
                    $res['FeatureAbnormal'][$n1++] = $item1;
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
        if (isset($map['CustomSign'])) {
            $model->customSign = customSign::fromMap($map['CustomSign']);
        }

        if (isset($map['CustomSignStatus'])) {
            $model->customSignStatus = $map['CustomSignStatus'];
        }

        if (isset($map['FeatureAbnormal'])) {
            if (!empty($map['FeatureAbnormal'])) {
                $model->featureAbnormal = [];
                $n1                     = 0;
                foreach ($map['FeatureAbnormal'] as $item1) {
                    $model->featureAbnormal[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
