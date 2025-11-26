<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyDomainResolveResponseBody;

use AlibabaCloud\Dara\Model;

class resolveResult extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $ipAddrList;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'domain' => 'Domain',
        'ipAddrList' => 'IpAddrList',
        'ipVersion' => 'IpVersion',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddrList)) {
            Model::validateArray($this->ipAddrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->ipAddrList) {
            if (\is_array($this->ipAddrList)) {
                $res['IpAddrList'] = [];
                $n1 = 0;
                foreach ($this->ipAddrList as $item1) {
                    $res['IpAddrList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['IpAddrList'])) {
            if (!empty($map['IpAddrList'])) {
                $model->ipAddrList = [];
                $n1 = 0;
                foreach ($map['IpAddrList'] as $item1) {
                    $model->ipAddrList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
