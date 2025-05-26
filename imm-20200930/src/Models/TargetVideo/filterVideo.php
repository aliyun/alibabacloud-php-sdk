<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\delogos;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\desensitization;
use AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\watermarks;

class filterVideo extends Model
{
    /**
     * @var delogos[]
     */
    public $delogos;

    /**
     * @var desensitization
     */
    public $desensitization;

    /**
     * @var float
     */
    public $speed;

    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'delogos' => 'Delogos',
        'desensitization' => 'Desensitization',
        'speed' => 'Speed',
        'watermarks' => 'Watermarks',
    ];

    public function validate()
    {
        if (\is_array($this->delogos)) {
            Model::validateArray($this->delogos);
        }
        if (null !== $this->desensitization) {
            $this->desensitization->validate();
        }
        if (\is_array($this->watermarks)) {
            Model::validateArray($this->watermarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delogos) {
            if (\is_array($this->delogos)) {
                $res['Delogos'] = [];
                $n1 = 0;
                foreach ($this->delogos as $item1) {
                    $res['Delogos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->desensitization) {
            $res['Desensitization'] = null !== $this->desensitization ? $this->desensitization->toArray($noStream) : $this->desensitization;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->watermarks) {
            if (\is_array($this->watermarks)) {
                $res['Watermarks'] = [];
                $n1 = 0;
                foreach ($this->watermarks as $item1) {
                    $res['Watermarks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Delogos'])) {
            if (!empty($map['Delogos'])) {
                $model->delogos = [];
                $n1 = 0;
                foreach ($map['Delogos'] as $item1) {
                    $model->delogos[$n1++] = delogos::fromMap($item1);
                }
            }
        }

        if (isset($map['Desensitization'])) {
            $model->desensitization = desensitization::fromMap($map['Desensitization']);
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n1 = 0;
                foreach ($map['Watermarks'] as $item1) {
                    $model->watermarks[$n1++] = watermarks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
