<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CustomDNS extends Model
{
    /**
     * @var DNSOption[]
     */
    public $dnsOptions;

    /**
     * @var string[]
     */
    public $nameServers;

    /**
     * @var string[]
     */
    public $searches;
    protected $_name = [
        'dnsOptions' => 'dnsOptions',
        'nameServers' => 'nameServers',
        'searches' => 'searches',
    ];

    public function validate()
    {
        if (\is_array($this->dnsOptions)) {
            Model::validateArray($this->dnsOptions);
        }
        if (\is_array($this->nameServers)) {
            Model::validateArray($this->nameServers);
        }
        if (\is_array($this->searches)) {
            Model::validateArray($this->searches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsOptions) {
            if (\is_array($this->dnsOptions)) {
                $res['dnsOptions'] = [];
                $n1 = 0;
                foreach ($this->dnsOptions as $item1) {
                    $res['dnsOptions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nameServers) {
            if (\is_array($this->nameServers)) {
                $res['nameServers'] = [];
                $n1 = 0;
                foreach ($this->nameServers as $item1) {
                    $res['nameServers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->searches) {
            if (\is_array($this->searches)) {
                $res['searches'] = [];
                $n1 = 0;
                foreach ($this->searches as $item1) {
                    $res['searches'][$n1++] = $item1;
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
        if (isset($map['dnsOptions'])) {
            if (!empty($map['dnsOptions'])) {
                $model->dnsOptions = [];
                $n1 = 0;
                foreach ($map['dnsOptions'] as $item1) {
                    $model->dnsOptions[$n1++] = DNSOption::fromMap($item1);
                }
            }
        }

        if (isset($map['nameServers'])) {
            if (!empty($map['nameServers'])) {
                $model->nameServers = [];
                $n1 = 0;
                foreach ($map['nameServers'] as $item1) {
                    $model->nameServers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['searches'])) {
            if (!empty($map['searches'])) {
                $model->searches = [];
                $n1 = 0;
                foreach ($map['searches'] as $item1) {
                    $model->searches[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
