<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryDnsHostResponseBody;

use AlibabaCloud\Tea\Model;

class dnsHostList extends Model
{
    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var string[]
     */
    public $ipList;
    protected $_name = [
        'dnsName' => 'DnsName',
        'ipList'  => 'IpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsHostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }

        return $model;
    }
}
