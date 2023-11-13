<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebCacheCustomRuleRequest extends Model
{
    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name, and the domain name must be associated with an instance that uses the Enhanced function plan. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
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

    /**
     * @description The details of the custom rule. This parameter is a JSON string. The string contains the following fields:
     *
     *   **Name**: the name of the rule. This field is required and must be of the string type.
     *
     *   **Uri**: the path to the cached page. This field is required and must be of the STRING type.
     *
     *   **Mode**: the cache mode. This field is required and must be of the STRING type. Valid values:
     *
     *   **standard**: uses the standard mode.
     *   **aggressive**: uses the enhanced mode.
     *   **bypass**: No data is cached.
     *
     *   **CacheTtl**: the expiration time of the page cache. This field is required and must be of the INTEGER type. Unit: seconds.
     *
     * @example [{"Name": "test","Uri": "/a","Mode": "standard","CacheTtl": 3600}]
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
        'rules'           => 'Rules',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebCacheCustomRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
