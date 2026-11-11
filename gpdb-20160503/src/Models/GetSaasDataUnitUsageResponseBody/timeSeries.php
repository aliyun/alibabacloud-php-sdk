<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody\timeSeries\scenes;

class timeSeries extends Model
{
    /**
     * @var string
     */
    public $dataUnit;

    /**
     * @var scenes[]
     */
    public $scenes;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'dataUnit' => 'DataUnit',
        'scenes' => 'Scenes',
        'time' => 'Time',
    ];

    public function validate()
    {
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataUnit) {
            $res['DataUnit'] = $this->dataUnit;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1 = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['DataUnit'])) {
            $model->dataUnit = $map['DataUnit'];
        }

        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n1 = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1] = scenes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
