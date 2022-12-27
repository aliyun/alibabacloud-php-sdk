<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaUserDomainsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDcdnIpaUserDomainsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $checkDomainShow;

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
     * @example config
     *
     * @var string
     */
    public $funcFilter;

    /**
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
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
