<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafPolicyValidDomainsRequest extends Model
{
    /**
     * @description The type of the Web Application Firewall (WAF) protection policy. Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom protection
     *   whitelist: IP address whitelist
     *   ip_blacklist: IP address blacklist
     *   region_block: region blacklist
     *   bot: bot management
     *
     * @example custom_acl
     *
     * @var string
     */
    public $defenseScene;

    /**
     * @description The protected domain name. Fuzzy search is supported.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainNameLike;

    /**
     * @description The number of the page to return. Valid values: **1** to **100000**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of domain names to return on each page. Valid values: an integer from **1** to **500**. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'defenseScene'   => 'DefenseScene',
        'domainNameLike' => 'DomainNameLike',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
        }
        if (null !== $this->domainNameLike) {
            $res['DomainNameLike'] = $this->domainNameLike;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafPolicyValidDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }
        if (isset($map['DomainNameLike'])) {
            $model->domainNameLike = $map['DomainNameLike'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
