<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\model\panoList;

use AlibabaCloud\Tea\Model;

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
        'rotation'  => 'Rotation',
        'spot'      => 'Spot',
        'viewpoint' => 'Viewpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rotation) {
            $res['Rotation'] = $this->rotation;
        }
        if (null !== $this->spot) {
            $res['Spot'] = $this->spot;
        }
        if (null !== $this->viewpoint) {
            $res['Viewpoint'] = $this->viewpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return position
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rotation'])) {
            if (!empty($map['Rotation'])) {
                $model->rotation = $map['Rotation'];
            }
        }
        if (isset($map['Spot'])) {
            if (!empty($map['Spot'])) {
                $model->spot = $map['Spot'];
            }
        }
        if (isset($map['Viewpoint'])) {
            if (!empty($map['Viewpoint'])) {
                $model->viewpoint = $map['Viewpoint'];
            }
        }

        return $model;
    }
}
