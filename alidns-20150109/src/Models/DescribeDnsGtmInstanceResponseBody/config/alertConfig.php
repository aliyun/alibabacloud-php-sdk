<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config\alertConfig\alertConfig;

class alertConfig extends Model
{
    /**
     * @var alertConfig[]
     */
    public $alertConfig;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
    ];

    public function validate()
    {
        if (\is_array($this->alertConfig)) {
            Model::validateArray($this->alertConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            if (\is_array($this->alertConfig)) {
                $res['AlertConfig'] = [];
                $n1 = 0;
                foreach ($this->alertConfig as $item1) {
                    $res['AlertConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n1 = 0;
                foreach ($map['AlertConfig'] as $item1) {
                    $model->alertConfig[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
