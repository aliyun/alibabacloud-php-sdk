<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebCacheSwitchRequest extends Model
{
    /**
     * @description The domain name for which you want to configure the Static Page Caching policy.
     *
     * > You can call the [DescribeDomains](~~91724~~) operation to query all the domain names that are added to Anti-DDoS Pro or Anti-DDoS Premium.
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description Specifies whether to enable or disable the Static Page Caching policy for a website. Valid values:
     *
     *   **1**: enables the policy.
     *   **0**: disables the policy.
     *
     * @example 1
     *
     * @var int
     */
    public $enable;

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
        'domain'          => 'Domain',
        'enable'          => 'Enable',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebCacheSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
