<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainResourceRequest extends Model
{
    /**
     * @description The domain name of the website that you want to query.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description An array that consists of the IDs of instances to query.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The match mode. Valid values:
     *
     *   **fuzzy**: fuzzy match. This is the default value.
     *   **exact**: exact match.
     *
     * @example fuzzy
     *
     * @var string
     */
    public $queryDomainPattern;
    protected $_name = [
        'domain'             => 'Domain',
        'instanceIds'        => 'InstanceIds',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'queryDomainPattern' => 'QueryDomainPattern',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryDomainPattern) {
            $res['QueryDomainPattern'] = $this->queryDomainPattern;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResourceRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryDomainPattern'])) {
            $model->queryDomainPattern = $map['QueryDomainPattern'];
        }

        return $model;
    }
}
