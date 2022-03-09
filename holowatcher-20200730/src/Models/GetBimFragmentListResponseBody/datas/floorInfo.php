<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimFragmentListResponseBody\datas;

use AlibabaCloud\Tea\Model;

class floorInfo extends Model
{
    /**
     * @var string
     */
    public $floorName;

    /**
     * @var string
     */
    public $floorNum;
    protected $_name = [
        'floorName' => 'FloorName',
        'floorNum'  => 'FloorNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->floorName) {
            $res['FloorName'] = $this->floorName;
        }
        if (null !== $this->floorNum) {
            $res['FloorNum'] = $this->floorNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FloorName'])) {
            $model->floorName = $map['FloorName'];
        }
        if (isset($map['FloorNum'])) {
            $model->floorNum = $map['FloorNum'];
        }

        return $model;
    }
}
