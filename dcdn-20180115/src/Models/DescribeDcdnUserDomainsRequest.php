<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserDomainsRequest extends Model
{
    /**
     * @example 2018-05-10T14:00:00Z
     *
     * @var string
     */
    public $changeEndTime;

    /**
     * @example 2018-05-10T12:00:00Z
     *
     * @var string
     */
    public $changeStartTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $checkDomainShow;

    /**
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example fuzzy_match
     *
     * @var string
     */
    public $domainSearchType;

    /**
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
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
