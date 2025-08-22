<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data\items\commonSetting;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTimingSyntheticTasksResponseBody\data\items\commonSetting\customHost\hosts;

class customHost extends Model
{
    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @var int
     */
    public $selectType;
    protected $_name = [
        'hosts' => 'Hosts',
        'selectType' => 'SelectType',
    ];

    public function validate()
    {
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['Hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['Hosts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectType) {
            $res['SelectType'] = $this->selectType;
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
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['Hosts'] as $item1) {
                    $model->hosts[$n1] = hosts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SelectType'])) {
            $model->selectType = $map['SelectType'];
        }

        return $model;
    }
}
