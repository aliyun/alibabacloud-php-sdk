<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebRulesRequest extends Model
{
    /**
     * @description The CNAME address to query.
     *
     * @example kzmk7b8tt351****.aliyunddos1014****
     *
     * @var string
     */
    public $cname;

    /**
     * @description The domain name of the website to query.
     *
     * > The domain must have been configured with website business forwarding rules. You can call [DescribeDomains](~~DescribeDomains~~) to query all domains that have been configured with website business forwarding rules.
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The list of DDoS protection instance IDs to query.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description When paginating, set the page number of the current page. The default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description When paginating, set the number of forwarding rules per page. The range of values is: 1~10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query matching pattern. Values:
     * - **fuzzy** (default): Indicates fuzzy query.
     * - **exact**: Indicates exact query.
     * @example exact
     *
     * @var string
     */
    public $queryDomainPattern;

    /**
     * @description The resource group ID of the DDoS protection instance in the resource management service.
     *
     * Not setting this parameter indicates the default resource group.
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cname'              => 'Cname',
        'domain'             => 'Domain',
        'instanceIds'        => 'InstanceIds',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'queryDomainPattern' => 'QueryDomainPattern',
        'resourceGroupId'    => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryDomainPattern) {
            $res['QueryDomainPattern'] = $this->queryDomainPattern;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryDomainPattern'])) {
            $model->queryDomainPattern = $map['QueryDomainPattern'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
