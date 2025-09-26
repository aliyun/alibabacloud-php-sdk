<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class AiFallbackConfig extends Model
{
    /**
     * @var AiFallbackServiceConfig[]
     */
    public $serviceConfigs;
    protected $_name = [
        'serviceConfigs' => 'serviceConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->serviceConfigs)) {
            Model::validateArray($this->serviceConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceConfigs) {
            if (\is_array($this->serviceConfigs)) {
                $res['serviceConfigs'] = [];
                $n1 = 0;
                foreach ($this->serviceConfigs as $item1) {
                    $res['serviceConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n1 = 0;
                foreach ($map['serviceConfigs'] as $item1) {
                    $model->serviceConfigs[$n1] = AiFallbackServiceConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
