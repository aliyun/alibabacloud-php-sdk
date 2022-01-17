<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class PushMeteringDataRequest extends Model
{
    /**
     * @var string
     */
    public $metering;
    protected $_name = [
        'metering' => 'Metering',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metering) {
            $res['Metering'] = $this->metering;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushMeteringDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metering'])) {
            $model->metering = $map['Metering'];
        }

        return $model;
    }
}
