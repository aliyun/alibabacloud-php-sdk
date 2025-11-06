<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveSingleTaskForModifyingDnsHostRequest extends Model
{
    /**
     * @var string
     */
    public $dnsName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ip;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'dnsName' => 'DnsName',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->ip)) {
            Model::validateArray($this->ip);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsName) {
            $res['DnsName'] = $this->dnsName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            if (\is_array($this->ip)) {
                $res['Ip'] = [];
                $n1 = 0;
                foreach ($this->ip as $item1) {
                    $res['Ip'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = [];
                $n1 = 0;
                foreach ($map['Ip'] as $item1) {
                    $model->ip[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
