<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ZoneType;

use AlibabaCloud\Tea\Model;

class zoneTypeLayer extends Model
{
    /**
     * @example 24
     *
     * @var int
     */
    public $mask;

    /**
     * @example 办公区
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'mask' => 'Mask',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneTypeLayer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
