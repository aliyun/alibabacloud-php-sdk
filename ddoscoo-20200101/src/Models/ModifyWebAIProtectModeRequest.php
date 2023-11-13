<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebAIProtectModeRequest extends Model
{
    /**
     * @description The details of the Intelligent Protection policy. This parameter is a JSON string. The string contains the following fields:
     *
     *   **AiTemplate**: the level of the Intelligent Protection policy. This field is required and must be of the STRING type. Valid values:
     *
     *   **level30**: the Low level
     *   **level60**: the Normal level
     *   **level90**: the Strict level
     *
     *   **AiMode**: the mode of the Intelligent Protection policy. This field is required and must be of the string type. Valid values:
     *
     *   **watch**: the Warning mode
     *   **defense**: the Defense mode
     *
     * @example {"AiTemplate":"level60","AiMode":"defense"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for a domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'config'          => 'Config',
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebAIProtectModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
