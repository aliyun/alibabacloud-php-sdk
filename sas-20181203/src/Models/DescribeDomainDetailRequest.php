<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDetailRequest extends Model
{
    /**
     * @description The domain name or the name of website that you want to query.
     *
     * >  Fuzzy match is not supported. You must enter a complete domain name or a website.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain asset. Valid values:
     *
     *   **0**: an Elastic Compute Service (ECS) instance
     *   **1**: a Server Load Balancer (SLB) instance
     *   **2**: a Network Address Translation (NAT) gateway
     *   **3**: an ApsaraDB RDS instance
     *   **4**: an ApsaraDB for MongoDB instance
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'domainName' => 'DomainName',
        'sourceIp'   => 'SourceIp',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
