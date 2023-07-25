<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainConfigsResponseBody\domainConfigs;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @description The ID of the configuration.
     *
     * @example 5068995
     *
     * @var string
     */
    public $configId;

    /**
     * @description The configurations of the features.
     *
     * @var functionArgs
     */
    public $functionArgs;

    /**
     * @description The feature name.
     *
     * @example set_req_host_header
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The ID of the advanced condition configuration.
     *
     * @example 1234567
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The status of the configuration. Valid values:
     *
     *   **success**: successful
     *   **testing**: testing
     *   **failed**: The configuration failed.
     *   **configuring**: The configuration is in progress.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId'     => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'parentId'     => 'ParentId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
