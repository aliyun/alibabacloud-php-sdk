<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;

use AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting\customHost\hosts;
use AlibabaCloud\Tea\Model;

class customHost extends Model
{
    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @example 0
     *
     * @var int
     */
    public $selectType;
    protected $_name = [
        'hosts'      => 'Hosts',
        'selectType' => 'SelectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->selectType) {
            $res['SelectType'] = $this->selectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customHost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SelectType'])) {
            $model->selectType = $map['SelectType'];
        }

        return $model;
    }
}
