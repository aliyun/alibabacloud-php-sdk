<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebRulesRequest extends Model
{
    /**
     * @var string
     */
    public $cname;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $queryDomainPattern;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cname' => 'Cname',
        'domain' => 'Domain',
        'instanceIds' => 'InstanceIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryDomainPattern' => 'QueryDomainPattern',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
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
