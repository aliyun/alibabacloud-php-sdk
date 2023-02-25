<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDcdnIpaUserDomainsRequest extends Model
{
    /**
     * @description Specifies whether to display domain names that are under review, failed the review, or failed to be configured. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $checkDomainShow;

    /**
     * @description The domain name that is used as a keyword to filter domain names. Fuzzy match is supported.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The search method. Default value: full_match. Valid values:
     *
     *   **fuzzy_match**: fuzzy match
     *   **pre_match**: prefix match
     *   **suf_match**: suffix match
     *   **full_match**: exact match
     *
     * @example fuzzy_match
     *
     * @var string
     */
    public $domainSearchType;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **online**: enabled
     *   **offline**: disabled
     *   **configuring**: configuring
     *   **configure_failed**: configuration failed
     *   **checking**: reviewing
     *   **check_failed**: review failed
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The status of the feature.
     *
     *   config: The feature is enabled.
     *   unconfig: The feature is not enabled.
     *
     * @example config
     *
     * @var string
     */
    public $funcFilter;

    /**
     * @description The ID of the feature. For example, a value of 7 specifies the feature of configuring an expiration rule for a specific directory. For more information about feature IDs, see [Parameters for configuring features for domain names](~~410622~~).
     *
     * @example 7
     *
     * @var string
     */
    public $funcId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: **1** to **100000**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of domain names to return on each page. Default value: **20**. Maximum value: **500**.
     *
     * Valid values: an integer from **1** to **500**.
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example ResourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'checkDomainShow'  => 'CheckDomainShow',
        'domainName'       => 'DomainName',
        'domainSearchType' => 'DomainSearchType',
        'domainStatus'     => 'DomainStatus',
        'funcFilter'       => 'FuncFilter',
        'funcId'           => 'FuncId',
        'ownerId'          => 'OwnerId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resourceGroupId'  => 'ResourceGroupId',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDomainShow) {
            $res['CheckDomainShow'] = $this->checkDomainShow;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainSearchType) {
            $res['DomainSearchType'] = $this->domainSearchType;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->funcFilter) {
            $res['FuncFilter'] = $this->funcFilter;
        }
        if (null !== $this->funcId) {
            $res['FuncId'] = $this->funcId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnIpaUserDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDomainShow'])) {
            $model->checkDomainShow = $map['CheckDomainShow'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainSearchType'])) {
            $model->domainSearchType = $map['DomainSearchType'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['FuncFilter'])) {
            $model->funcFilter = $map['FuncFilter'];
        }
        if (isset($map['FuncId'])) {
            $model->funcId = $map['FuncId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
