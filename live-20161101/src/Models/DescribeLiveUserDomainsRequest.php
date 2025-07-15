<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeLiveUserDomainsRequest extends Model
{
    /**
     * @description The domain name that is used as a keyword to filter domain names. Fuzzy match is supported.
     *
     * >
     *
     *   If you set LiveDomainType to liveVideo and leave this parameter empty, the streaming domains are queried. - If you set LiveDomainType to liveEdge and leave this parameter empty, the ingest domains are queried.
     *
     * @example *.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The search mode. Valid values:
     *
     *   **fuzzy_match** (default): fuzzy match
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
     *   **online**
     *   **offline**
     *   **configuring**
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **liveVideo**: streaming domain
     *   **liveEdge**: ingest domain
     *
     * >  If you leave this parameter empty, all ingest domains and streaming domains within your Alibaba Cloud account are queried by default.
     *
     * @example liveVideo
     *
     * @var string
     */
    public $liveDomainType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Valid values: **1 to 100000**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **20**. Maximum value: **50**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region in which the domain name resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2egyoep3jp7a
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainSearchType' => 'DomainSearchType',
        'domainStatus' => 'DomainStatus',
        'liveDomainType' => 'LiveDomainType',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionName' => 'RegionName',
        'resourceGroupId' => 'ResourceGroupId',
        'securityToken' => 'SecurityToken',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainSearchType) {
            $res['DomainSearchType'] = $this->domainSearchType;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
     * @return DescribeLiveUserDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainSearchType'])) {
            $model->domainSearchType = $map['DomainSearchType'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
