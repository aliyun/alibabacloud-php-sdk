<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\appSdk\customSign;
use AlibabaCloud\Tea\Model;

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
        'customSign' => 'CustomSign',
        'customSignStatus' => 'CustomSignStatus',
        'featureAbnormal' => 'FeatureAbnormal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSign) {
            $res['CustomSign'] = null !== $this->customSign ? $this->customSign->toMap() : null;
        }
        if (null !== $this->customSignStatus) {
            $res['CustomSignStatus'] = $this->customSignStatus;
        }
        if (null !== $this->featureAbnormal) {
            $res['FeatureAbnormal'] = $this->featureAbnormal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSdk
     */
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
                $model->featureAbnormal = $map['FeatureAbnormal'];
            }
        }

        return $model;
    }
}
