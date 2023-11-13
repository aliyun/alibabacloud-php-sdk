<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteWebCacheCustomRuleRequest extends Model
{
    /**
     * @description The domain name for which you want to delete the custom rules of the Static Page Caching policy.
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

    /**
     * @description An array consisting of the names of the rules that you want to delete.
     *
     * @example test
     *
     * @var string[]
     */
    public $ruleNames;
    protected $_name = [
        'domain'          => 'Domain',
        'resourceGroupId' => 'ResourceGroupId',
        'ruleNames'       => 'RuleNames',
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
        if (null !== $this->ruleNames) {
            $res['RuleNames'] = $this->ruleNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWebCacheCustomRuleRequest
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
        if (isset($map['RuleNames'])) {
            if (!empty($map['RuleNames'])) {
                $model->ruleNames = $map['RuleNames'];
            }
        }

        return $model;
    }
}
