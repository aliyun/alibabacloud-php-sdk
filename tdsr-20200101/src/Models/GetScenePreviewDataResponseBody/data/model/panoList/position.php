<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList;

use AlibabaCloud\Dara\Model;

class position extends Model
{
    /**
     * @var float[]
     */
    public $rotation;

    /**
     * @var float[]
     */
    public $spot;

    /**
     * @var float[]
     */
    public $viewpoint;
    protected $_name = [
        'rotation' => 'Rotation',
        'spot' => 'Spot',
        'viewpoint' => 'Viewpoint',
    ];

    public function validate()
    {
        if (\is_array($this->rotation)) {
            Model::validateArray($this->rotation);
        }
        if (\is_array($this->spot)) {
            Model::validateArray($this->spot);
        }
        if (\is_array($this->viewpoint)) {
            Model::validateArray($this->viewpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rotation) {
            if (\is_array($this->rotation)) {
                $res['Rotation'] = [];
                $n1 = 0;
                foreach ($this->rotation as $item1) {
                    $res['Rotation'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->spot) {
            if (\is_array($this->spot)) {
                $res['Spot'] = [];
                $n1 = 0;
                foreach ($this->spot as $item1) {
                    $res['Spot'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->viewpoint) {
            if (\is_array($this->viewpoint)) {
                $res['Viewpoint'] = [];
                $n1 = 0;
                foreach ($this->viewpoint as $item1) {
                    $res['Viewpoint'][$n1] = $item1;
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
        if (isset($map['Rotation'])) {
            if (!empty($map['Rotation'])) {
                $model->rotation = [];
                $n1 = 0;
                foreach ($map['Rotation'] as $item1) {
                    $model->rotation[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Spot'])) {
            if (!empty($map['Spot'])) {
                $model->spot = [];
                $n1 = 0;
                foreach ($map['Spot'] as $item1) {
                    $model->spot[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Viewpoint'])) {
            if (!empty($map['Viewpoint'])) {
                $model->viewpoint = [];
                $n1 = 0;
                foreach ($map['Viewpoint'] as $item1) {
                    $model->viewpoint[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
