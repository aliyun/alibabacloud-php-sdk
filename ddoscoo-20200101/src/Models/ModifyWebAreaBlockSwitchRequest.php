<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebAreaBlockSwitchRequest extends Model
{
    /**
     * @description Specifies whether to enable or disable the Location Blacklist (Domain Names) policy for a domain name. The value is a string that consists of a JSON struct. The JSON struct contains the following parameters:
     *
     *   **RegionblockEnable**: the status of the Location Blacklist (Domain Names) policy. This parameter is required and must be of the INTEGER type. Valid values:
     *
     *   **1**: enables the policy.
     *   **0**: disables the policy.
     *
     * @example {"RegionblockEnable": 1}
     *
     * @var string
     */
    public $config;

    /**
     * @description The domain name for which you want to enable or disable the Location Blacklist policy.
     *
     * > You can call the [DescribeDomains](~~91724~~) operation to query all the domain names that are added to Anti-DDoS Pro or Anti-DDoS Premium.
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management.
     *
     * If you do not configure this parameter, the instance belongs to the default resource group.
     * @example rg-acfm2pz25js****
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
     * @return ModifyWebAreaBlockSwitchRequest
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
