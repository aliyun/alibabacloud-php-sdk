<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class PublishWebApplicationRevisionInput extends Model
{
    /**
     * @var Container[]
     */
    public $containers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableArmsMetrics;

    /**
     * @var bool
     */
    public $takeEffect;
    protected $_name = [
        'containers' => 'Containers',
        'description' => 'Description',
        'enableArmsMetrics' => 'EnableArmsMetrics',
        'takeEffect' => 'TakeEffect',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableArmsMetrics) {
            $res['EnableArmsMetrics'] = $this->enableArmsMetrics;
        }

        if (null !== $this->takeEffect) {
            $res['TakeEffect'] = $this->takeEffect;
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
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1++] = Container::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableArmsMetrics'])) {
            $model->enableArmsMetrics = $map['EnableArmsMetrics'];
        }

        if (isset($map['TakeEffect'])) {
            $model->takeEffect = $map['TakeEffect'];
        }

        return $model;
    }
}
