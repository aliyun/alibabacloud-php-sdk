<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserDomainsRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC+0.
     *
     * > The end time must be later than the start time.
     * @example 2018-05-10T14:00:00Z
     *
     * @var string
     */
    public $changeEndTime;

    /**
     * @description The start of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC+0.
     *
     * @example 2018-05-10T12:00:00Z
     *
     * @var string
     */
    public $changeStartTime;

    /**
     * @description Specifies whether to display domain names that are under review, failed the review, or failed to be configured. Valid values:
     *
     *   true: displays domain names.
     *   false: does not display domain names.
     *
     * @example false
     *
     * @var bool
     */
    public $checkDomainShow;

    /**
     * @description The acceleration region. By default, all acceleration regions are queried.
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: global (excluding the Chinese mainland)
     *   **global**: global
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The accelerated domain names. If you do not set this parameter, configurations of all domain names that match the conditions are returned.
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
     * > If you specify the domain names to query but do not set the DomainSearchType parameter, the exact match mode is used.
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
     *   **check_failed:** review failed
     *
     * @example online
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: **1** to **100000**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Valid values: **1** to **500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmv6jutt**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tags of the domain names.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
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
        'tag'              => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeDcdnUserDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
