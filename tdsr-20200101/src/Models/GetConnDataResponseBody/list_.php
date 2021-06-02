<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetConnDataResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 关联的ID
     *
     * @var string
     */
    public $mapId;

    /**
     * @description outer:外关联 inner：内关联 stair：楼梯关联
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'    => 'Id',
        'mapId' => 'MapId',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mapId) {
            $res['MapId'] = $this->mapId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MapId'])) {
            $model->mapId = $map['MapId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
