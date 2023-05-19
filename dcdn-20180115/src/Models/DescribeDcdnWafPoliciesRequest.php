<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafPoliciesRequest extends Model
{
    /**
     * @description The number of the page to return. Valid values: **1** to **100000**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of protection policies to return on each page. Valid values: an integer from **1** to **500**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The query conditions. The value is a JSON string. The format is `QueryArgs={"PolicyIds":"The IDs of protection policies","RuleIds":"The IDs of protection rules","PolicyNameLike":"The name of the protection policy","DomainNames":"The protected domain names","PolicyType":"default","DefenseScenes":"waf_group","PolicyStatus":"on","OrderBy":"GmtModified","Desc":"false"}`
     *
     * > If you do not set this parameter, all protection policies are queried.
     * @example {"PolicyNameLIike":"test_policy"}
     *
     * @var string
     */
    public $queryArgs;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'queryArgs'  => 'QueryArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = $this->queryArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = $map['QueryArgs'];
        }

        return $model;
    }
}
