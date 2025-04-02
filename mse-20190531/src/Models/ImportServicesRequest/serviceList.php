<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ImportServicesRequest;

use AlibabaCloud\Dara\Model;

class serviceList extends Model
{
    /**
     * @var string[]
     */
    public $dnsServerList;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string[]
     */
    public $ips;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $servicePort;

    /**
     * @var string
     */
    public $serviceProtocol;
    protected $_name = [
        'dnsServerList' => 'DnsServerList',
        'groupName' => 'GroupName',
        'ips' => 'Ips',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'servicePort' => 'ServicePort',
        'serviceProtocol' => 'ServiceProtocol',
    ];

    public function validate()
    {
        if (\is_array($this->dnsServerList)) {
            Model::validateArray($this->dnsServerList);
        }
        if (\is_array($this->ips)) {
            Model::validateArray($this->ips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsServerList) {
            if (\is_array($this->dnsServerList)) {
                $res['DnsServerList'] = [];
                $n1 = 0;
                foreach ($this->dnsServerList as $item1) {
                    $res['DnsServerList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->ips) {
            if (\is_array($this->ips)) {
                $res['Ips'] = [];
                $n1 = 0;
                foreach ($this->ips as $item1) {
                    $res['Ips'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
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
        if (isset($map['DnsServerList'])) {
            if (!empty($map['DnsServerList'])) {
                $model->dnsServerList = [];
                $n1 = 0;
                foreach ($map['DnsServerList'] as $item1) {
                    $model->dnsServerList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n1 = 0;
                foreach ($map['Ips'] as $item1) {
                    $model->ips[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }

        return $model;
    }
}
