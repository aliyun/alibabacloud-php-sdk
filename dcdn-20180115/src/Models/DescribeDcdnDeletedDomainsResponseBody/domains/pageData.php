<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDeletedDomainsResponseBody\domains;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @description The total number of domain names returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description >  You can call this operation up to 10 times per second per account.
     *
     * @example 2015-10-28T11:05:52Z
     *
     * @var string
     */
    public $gmtModified;
    protected $_name = [
        'domainName'  => 'DomainName',
        'gmtModified' => 'GmtModified',
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        return $model;
    }
}
