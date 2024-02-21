<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeUserDomainsRequest extends Model
{
    /**
     * @description The type of workload accelerated by Alibaba Cloud CDN. Separate types with commas (,). Valid values:
     *
     *   **web**: images and small files
     *   **download**: large files
     *   **video**: on-demand video and audio streaming
     *
     * If you do not set this parameter, all service types are queried.
     * @example download,web,video
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > The end time must be later than the start time.
     * @example 2019-10-10T12:14:58Z
     *
     * @var string
     */
    public $changeEndTime;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2019-10-10T12:14:55Z
     *
     * @var string
     */
    public $changeStartTime;

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
     * @description The acceleration region. By default, all acceleration regions are queried. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The accelerated domain. If you do not set this parameter, all domain names that match the conditions are returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The search mode. Valid values:
     *
     *   **fuzzy_match**: fuzzy match
     *   **pre_match**: prefix match
     *   **suf_match**: suffix match
     *   **full_match** (default): exact match
     *
     * > If you specify the domain names to query but do not set the DomainSearchType parameter, the exact match mode is used.
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
     *   **configure_failed**
     *   **checking**
     *   **check_failed**
     *   **stopping**
     *   **deleting**
     *
     * If you do not set this parameter, domain names in all states are queried.
     * @example configure_failed
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Valid values: **1** to **100000**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **1 to 500**. Default value: **20**. Maximum value: **500**.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group. By default, all IDs are queried.
     *
     * @example abcd1234abcd1234
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The information about the origin server.
     *
     * @example example.source.com
     *
     * @var string
     */
    public $source;

    /**
     * @description The list of tags. Maximum number of elements in the list: 20
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'cdnType'          => 'CdnType',
        'changeEndTime'    => 'ChangeEndTime',
        'changeStartTime'  => 'ChangeStartTime',
        'checkDomainShow'  => 'CheckDomainShow',
        'coverage'         => 'Coverage',
        'domainName'       => 'DomainName',
        'domainSearchType' => 'DomainSearchType',
        'domainStatus'     => 'DomainStatus',
        'ownerId'          => 'OwnerId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resourceGroupId'  => 'ResourceGroupId',
        'securityToken'    => 'SecurityToken',
        'source'           => 'Source',
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->changeEndTime) {
            $res['ChangeEndTime'] = $this->changeEndTime;
        }
        if (null !== $this->changeStartTime) {
            $res['ChangeStartTime'] = $this->changeStartTime;
        }
        if (null !== $this->checkDomainShow) {
            $res['CheckDomainShow'] = $this->checkDomainShow;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return DescribeUserDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['ChangeEndTime'])) {
            $model->changeEndTime = $map['ChangeEndTime'];
        }
        if (isset($map['ChangeStartTime'])) {
            $model->changeStartTime = $map['ChangeStartTime'];
        }
        if (isset($map['CheckDomainShow'])) {
            $model->checkDomainShow = $map['CheckDomainShow'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
