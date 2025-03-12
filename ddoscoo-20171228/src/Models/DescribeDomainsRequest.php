<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainsRequest extends Model
{
    /**
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example ddoscoo-cn-XXXXXX
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example fuzzy
     *
     * @var string
     */
    public $queryDomainPattern;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'domain'             => 'Domain',
        'instanceIds'        => 'InstanceIds',
        'offset'             => 'Offset',
        'pageSize'           => 'PageSize',
        'queryDomainPattern' => 'QueryDomainPattern',
        'resourceGroupId'    => 'ResourceGroupId',
        'sourceIp'           => 'SourceIp',
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
