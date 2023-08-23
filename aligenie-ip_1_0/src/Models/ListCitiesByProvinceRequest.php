<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListCitiesByProvinceRequest extends Model
{
    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'province' => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCitiesByProvinceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
