<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDnsHostResponseBody;

use AlibabaCloud\Dara\Model;

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
        'ipList' => 'IpList',
    ];

    public function validate()
    {
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }

        if (null !== $this->ipList) {
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1 = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsName'])) {
            $model->dnsName = $map['DnsName'];
        }

        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n1 = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
