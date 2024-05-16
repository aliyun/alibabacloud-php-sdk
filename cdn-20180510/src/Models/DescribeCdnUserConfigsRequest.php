<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnUserConfigsRequest extends Model
{
    /**
     * @description The configuration that you want to query. Valid values:
     *
     *   **domain_business_control**: user configurations
     *   **waf**: Web Application Firewall (WAF) configurations
     *
     * This parameter is required.
     * @example domain_business_control
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnUserConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
