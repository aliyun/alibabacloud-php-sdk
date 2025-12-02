<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components\componentActions\inputConfigs;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components\componentActions\outputConfigs;

class componentActions extends Model
{
    /**
     * @var string
     */
    public $componentActionDescription;

    /**
     * @var string
     */
    public $componentActionName;

    /**
     * @var inputConfigs[]
     */
    public $inputConfigs;

    /**
     * @var outputConfigs[]
     */
    public $outputConfigs;
    protected $_name = [
        'componentActionDescription' => 'ComponentActionDescription',
        'componentActionName' => 'ComponentActionName',
        'inputConfigs' => 'InputConfigs',
        'outputConfigs' => 'OutputConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->inputConfigs)) {
            Model::validateArray($this->inputConfigs);
        }
        if (\is_array($this->outputConfigs)) {
            Model::validateArray($this->outputConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentActionDescription) {
            $res['ComponentActionDescription'] = $this->componentActionDescription;
        }

        if (null !== $this->componentActionName) {
            $res['ComponentActionName'] = $this->componentActionName;
        }

        if (null !== $this->inputConfigs) {
            if (\is_array($this->inputConfigs)) {
                $res['InputConfigs'] = [];
                $n1 = 0;
                foreach ($this->inputConfigs as $item1) {
                    $res['InputConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputConfigs) {
            if (\is_array($this->outputConfigs)) {
                $res['OutputConfigs'] = [];
                $n1 = 0;
                foreach ($this->outputConfigs as $item1) {
                    $res['OutputConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ComponentActionDescription'])) {
            $model->componentActionDescription = $map['ComponentActionDescription'];
        }

        if (isset($map['ComponentActionName'])) {
            $model->componentActionName = $map['ComponentActionName'];
        }

        if (isset($map['InputConfigs'])) {
            if (!empty($map['InputConfigs'])) {
                $model->inputConfigs = [];
                $n1 = 0;
                foreach ($map['InputConfigs'] as $item1) {
                    $model->inputConfigs[$n1] = inputConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OutputConfigs'])) {
            if (!empty($map['OutputConfigs'])) {
                $model->outputConfigs = [];
                $n1 = 0;
                foreach ($map['OutputConfigs'] as $item1) {
                    $model->outputConfigs[$n1] = outputConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
