<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyHaVipAttributeRequest extends Model
{
    /**
     * @description The ID of the HAVIP that you want to modify.
     *
     * This parameter is required.
     * @example havip-52y28****
     *
     * @var string
     */
    public $haVipId;

    /**
     * @description The name of the HAVIP. The name must be 1 to 128 characters in length and cannot start with http:// or https://.
     *
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
