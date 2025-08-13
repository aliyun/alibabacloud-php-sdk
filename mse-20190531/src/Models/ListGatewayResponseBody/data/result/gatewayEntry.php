<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class gatewayEntry extends Model
{
    /**
     * @var string
     */
    public $entryDomain;

    /**
     * @var int[]
     */
    public $httpPorts;

    /**
     * @var int[]
     */
    public $httpsPorts;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @var string[]
     */
    public $ipv6List;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'entryDomain' => 'EntryDomain',
        'httpPorts' => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
        'ipList' => 'IpList',
        'ipv6List' => 'Ipv6List',
        'netType' => 'NetType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->httpPorts)) {
            Model::validateArray($this->httpPorts);
        }
        if (\is_array($this->httpsPorts)) {
            Model::validateArray($this->httpsPorts);
        }
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        if (\is_array($this->ipv6List)) {
            Model::validateArray($this->ipv6List);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryDomain) {
            $res['EntryDomain'] = $this->entryDomain;
        }

        if (null !== $this->httpPorts) {
            if (\is_array($this->httpPorts)) {
                $res['HttpPorts'] = [];
                $n1 = 0;
                foreach ($this->httpPorts as $item1) {
                    $res['HttpPorts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->httpsPorts) {
            if (\is_array($this->httpsPorts)) {
                $res['HttpsPorts'] = [];
                $n1 = 0;
                foreach ($this->httpsPorts as $item1) {
                    $res['HttpsPorts'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->ipv6List) {
            if (\is_array($this->ipv6List)) {
                $res['Ipv6List'] = [];
                $n1 = 0;
                foreach ($this->ipv6List as $item1) {
                    $res['Ipv6List'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EntryDomain'])) {
            $model->entryDomain = $map['EntryDomain'];
        }

        if (isset($map['HttpPorts'])) {
            if (!empty($map['HttpPorts'])) {
                $model->httpPorts = [];
                $n1 = 0;
                foreach ($map['HttpPorts'] as $item1) {
                    $model->httpPorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HttpsPorts'])) {
            if (!empty($map['HttpsPorts'])) {
                $model->httpsPorts = [];
                $n1 = 0;
                foreach ($map['HttpsPorts'] as $item1) {
                    $model->httpsPorts[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Ipv6List'])) {
            if (!empty($map['Ipv6List'])) {
                $model->ipv6List = [];
                $n1 = 0;
                foreach ($map['Ipv6List'] as $item1) {
                    $model->ipv6List[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
