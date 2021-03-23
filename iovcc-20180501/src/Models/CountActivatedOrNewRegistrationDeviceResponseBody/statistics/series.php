<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\CountActivatedOrNewRegistrationDeviceResponseBody\statistics;

use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $data;
    protected $_name = [
        'name' => 'Name',
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
            }
        }

        return $model;
    }
}
