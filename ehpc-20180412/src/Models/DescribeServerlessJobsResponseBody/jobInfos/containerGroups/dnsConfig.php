<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\dnsConfig\options;

class dnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $nameServers;

    /**
     * @var options[]
     */
    public $options;

    /**
     * @var string[]
     */
    public $searches;
    protected $_name = [
        'nameServers' => 'NameServers',
        'options' => 'Options',
        'searches' => 'Searches',
    ];

    public function validate()
    {
        if (\is_array($this->nameServers)) {
            Model::validateArray($this->nameServers);
        }
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->searches)) {
            Model::validateArray($this->searches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameServers) {
            if (\is_array($this->nameServers)) {
                $res['NameServers'] = [];
                $n1 = 0;
                foreach ($this->nameServers as $item1) {
                    $res['NameServers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['Options'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->searches) {
            if (\is_array($this->searches)) {
                $res['Searches'] = [];
                $n1 = 0;
                foreach ($this->searches as $item1) {
                    $res['Searches'][$n1++] = $item1;
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
        if (isset($map['NameServers'])) {
            if (!empty($map['NameServers'])) {
                $model->nameServers = [];
                $n1 = 0;
                foreach ($map['NameServers'] as $item1) {
                    $model->nameServers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['Options'] as $item1) {
                    $model->options[$n1++] = options::fromMap($item1);
                }
            }
        }

        if (isset($map['Searches'])) {
            if (!empty($map['Searches'])) {
                $model->searches = [];
                $n1 = 0;
                foreach ($map['Searches'] as $item1) {
                    $model->searches[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
