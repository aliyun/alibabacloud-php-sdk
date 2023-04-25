<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnL2VipsRequest extends Model
{
    /**
     * @description The domain name. You can specify only one domain name in each request. If you do not specify this parameter, the origin CIDR blocks of all domain names in your account in the whitelist are returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'domainName' => 'DomainName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnL2VipsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
