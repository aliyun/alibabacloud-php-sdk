<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class securityOptions extends Model
{
    /**
     * @description 机密计算模式。可能值：
     * - TDX：表示构建TDX机密计算环境。更多信息，请参见[构建TDX机密计算环境](https://help.aliyun.com/document_detail/479090.html)。
     * @example TDX
     *
     * @var string
     */
    public $confidentialComputingMode;
    protected $_name = [
        'confidentialComputingMode' => 'ConfidentialComputingMode',
    ];

    public function validate()
    {
    }

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
