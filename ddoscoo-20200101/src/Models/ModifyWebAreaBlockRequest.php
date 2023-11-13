<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebAreaBlockRequest extends Model
{
    /**
     * @description The domain name whose configurations you want to modify.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The regions from which you block requests.
     *
     * > If you do not configure this parameter, the Blocked Regions (Domain Names) policy is disabled.
     * @example CN-SHANGHAI
     *
     * @var string[]
     */
    public $regions;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * For more information about resource groups, see [Create a resource group](~~94485~~).
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'domain'          => 'Domain',
        'regions'         => 'Regions',
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
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyWebAreaBlockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = $map['Regions'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
