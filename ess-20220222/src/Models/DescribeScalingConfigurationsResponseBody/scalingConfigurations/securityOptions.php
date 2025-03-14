<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class securityOptions extends Model
{
    /**
     * @example TDX
     *
     * @var string
     */
    public $confidentialComputingMode;
    protected $_name = [
        'confidentialComputingMode' => 'ConfidentialComputingMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidentialComputingMode) {
            $res['ConfidentialComputingMode'] = $this->confidentialComputingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfidentialComputingMode'])) {
            $model->confidentialComputingMode = $map['ConfidentialComputingMode'];
        }

        return $model;
    }
}
