<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var floorDisplayInfos
     */
    public $floorDisplayInfos;

    /**
     * @var string
     */
    public $floorItems;
    protected $_name = [
        'data'              => 'Data',
        'floorDisplayInfos' => 'FloorDisplayInfos',
        'floorItems'        => 'FloorItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->floorDisplayInfos) {
            $res['FloorDisplayInfos'] = null !== $this->floorDisplayInfos ? $this->floorDisplayInfos->toMap() : null;
        }
        if (null !== $this->floorItems) {
            $res['FloorItems'] = $this->floorItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['FloorDisplayInfos'])) {
            $model->floorDisplayInfos = floorDisplayInfos::fromMap($map['FloorDisplayInfos']);
        }
        if (isset($map['FloorItems'])) {
            $model->floorItems = $map['FloorItems'];
        }

        return $model;
    }
}
