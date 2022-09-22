<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\DetailSceneResponseBody;

use AlibabaCloud\Tea\Model;

class floorPlans extends Model
{
    /**
     * @var string
     */
    public $colorMapUrl;

    /**
     * @var string
     */
    public $floorLabel;

    /**
     * @var string
     */
    public $floorName;

    /**
     * @var string
     */
    public $miniMapUrl;
    protected $_name = [
        'colorMapUrl' => 'ColorMapUrl',
        'floorLabel'  => 'FloorLabel',
        'floorName'   => 'FloorName',
        'miniMapUrl'  => 'MiniMapUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorMapUrl) {
            $res['ColorMapUrl'] = $this->colorMapUrl;
        }
        if (null !== $this->floorLabel) {
            $res['FloorLabel'] = $this->floorLabel;
        }
        if (null !== $this->floorName) {
            $res['FloorName'] = $this->floorName;
        }
        if (null !== $this->miniMapUrl) {
            $res['MiniMapUrl'] = $this->miniMapUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floorPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorMapUrl'])) {
            $model->colorMapUrl = $map['ColorMapUrl'];
        }
        if (isset($map['FloorLabel'])) {
            $model->floorLabel = $map['FloorLabel'];
        }
        if (isset($map['FloorName'])) {
            $model->floorName = $map['FloorName'];
        }
        if (isset($map['MiniMapUrl'])) {
            $model->miniMapUrl = $map['MiniMapUrl'];
        }

        return $model;
    }
}
