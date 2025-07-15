<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @description The configuration ID.
     *
     * @example 5003576
     *
     * @var string
     */
    public $configId;

    /**
     * @description The attributes of the feature.
     *
     * @var functionArgs
     */
    public $functionArgs;

    /**
     * @description The name of the feature.
     *
     * @example set_req_host_header
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The configuration status. Valid values:
     *
     *   **success**
     *   **testing**
     *   **failed**
     *   **configuring**
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId' => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = null !== $this->functionArgs ? $this->functionArgs->toMap() : null;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = functionArgs::fromMap($map['FunctionArgs']);
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
