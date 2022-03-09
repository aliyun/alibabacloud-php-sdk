<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimGlbModelListResponseBody\datas;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimGlbModelListResponseBody\datas\buildings\floors;
use AlibabaCloud\Tea\Model;

class buildings extends Model
{
    /**
     * @var string
     */
    public $buildingNo;

    /**
     * @var floors[]
     */
    public $floors;
    protected $_name = [
        'buildingNo' => 'BuildingNo',
        'floors'     => 'Floors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildingNo) {
            $res['BuildingNo'] = $this->buildingNo;
        }
        if (null !== $this->floors) {
            $res['Floors'] = [];
            if (null !== $this->floors && \is_array($this->floors)) {
                $n = 0;
                foreach ($this->floors as $item) {
                    $res['Floors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildingNo'])) {
            $model->buildingNo = $map['BuildingNo'];
        }
        if (isset($map['Floors'])) {
            if (!empty($map['Floors'])) {
                $model->floors = [];
                $n             = 0;
                foreach ($map['Floors'] as $item) {
                    $model->floors[$n++] = null !== $item ? floors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
