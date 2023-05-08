<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainListResponseBody;

use AlibabaCloud\Tea\Model;

class domainListResponseList extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1.2.XX.XX,1.0.XX.XX
     *
     * @var string
     */
    public $ipList;
    protected $_name = [
        'domain' => 'Domain',
        'ipList' => 'IpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainListResponseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }

        return $model;
    }
}
