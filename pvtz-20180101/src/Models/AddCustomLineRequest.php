<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class AddCustomLineRequest extends Model
{
    /**
     * @var string
     */
    public $dnsCategory;

    /**
     * @var string[]
     */
    public $ipv4s;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shareScope;
    protected $_name = [
        'dnsCategory' => 'DnsCategory',
        'ipv4s' => 'Ipv4s',
        'lang' => 'Lang',
        'name' => 'Name',
        'shareScope' => 'ShareScope',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4s)) {
            Model::validateArray($this->ipv4s);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsCategory) {
            $res['DnsCategory'] = $this->dnsCategory;
        }

        if (null !== $this->ipv4s) {
            if (\is_array($this->ipv4s)) {
                $res['Ipv4s'] = [];
                $n1 = 0;
                foreach ($this->ipv4s as $item1) {
                    $res['Ipv4s'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->shareScope) {
            $res['ShareScope'] = $this->shareScope;
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
        if (isset($map['DnsCategory'])) {
            $model->dnsCategory = $map['DnsCategory'];
        }

        if (isset($map['Ipv4s'])) {
            if (!empty($map['Ipv4s'])) {
                $model->ipv4s = [];
                $n1 = 0;
                foreach ($map['Ipv4s'] as $item1) {
                    $model->ipv4s[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ShareScope'])) {
            $model->shareScope = $map['ShareScope'];
        }

        return $model;
    }
}
