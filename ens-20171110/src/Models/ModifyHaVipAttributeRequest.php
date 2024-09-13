<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyHaVipAttributeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example havip-52y28****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'haVipId' => 'HaVipId',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHaVipAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
