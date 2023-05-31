<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainListRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the domain name that you want to query. Valid values:
     *
     *   **root**: root domain name
     *   **sub**: subdomain name
     *
     * @example root
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The keyword that is used to query domain names. Fuzzy match is supported.
     *
     * @example sas
     *
     * @var string
     */
    public $fuzzyDomain;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.122.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'domainType'  => 'DomainType',
        'fuzzyDomain' => 'FuzzyDomain',
        'pageSize'    => 'PageSize',
        'sourceIp'    => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->fuzzyDomain) {
            $res['FuzzyDomain'] = $this->fuzzyDomain;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['FuzzyDomain'])) {
            $model->fuzzyDomain = $map['FuzzyDomain'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
