<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserDomainsByFuncRequest extends Model
{
    /**
     * @description The accelerated domain name whose ICP filing status you want to update.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether the feature that is specified by the FuncId parameter is enabled.
     *
     *   **config**: enabled
     *   **unconfig**: not enabled
     *
     * @example config
     *
     * @var string
     */
    public $funcFilter;

    /**
     * @description The ID of the feature. For more information about how to query feature IDs, see [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/410622.html). For example, the ID of the origin host feature (set_req_host_header) is 18.
     *
     * This parameter is required.
     * @example 7
     *
     * @var int
     */
    public $funcId;

    /**
     * @description The type of the search. Default value: exact_match. Valid values:
     *
     *   fuzzy_match: fuzzy search.
     *   exact_match: exact search.
     *
     * @example exact_match
     *
     * @var string
     */
    public $matchType;

    /**
     * @description The number of the page to return. Default value: **1**. Valid values: **1 to 100000**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Valid values: **1 to 500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'domainName'      => 'DomainName',
        'funcFilter'      => 'FuncFilter',
        'funcId'          => 'FuncId',
        'matchType'       => 'MatchType',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->funcFilter) {
            $res['FuncFilter'] = $this->funcFilter;
        }
        if (null !== $this->funcId) {
            $res['FuncId'] = $this->funcId;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserDomainsByFuncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FuncFilter'])) {
            $model->funcFilter = $map['FuncFilter'];
        }
        if (isset($map['FuncId'])) {
            $model->funcId = $map['FuncId'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
