<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class PublishWebApplicationRevisionInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var Container[]
     */
    public $containers;

    /**
     * @example test version
     *
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
        'containers'        => 'Containers',
        'description'       => 'Description',
        'enableArmsMetrics' => 'EnableArmsMetrics',
        'takeEffect'        => 'TakeEffect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containers) {
            $res['Containers'] = [];
            if (null !== $this->containers && \is_array($this->containers)) {
                $n = 0;
                foreach ($this->containers as $item) {
                    $res['Containers'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return PublishWebApplicationRevisionInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n                 = 0;
                foreach ($map['Containers'] as $item) {
                    $model->containers[$n++] = null !== $item ? Container::fromMap($item) : $item;
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
