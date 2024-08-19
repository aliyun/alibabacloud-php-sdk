<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetCipStatsResponseBody\data;

use AlibabaCloud\Tea\Model;

class z extends Model
{
    /**
     * @var int[]
     */
    public $data;

    /**
     * @example nickNameDetection
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'data' => 'Data',
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return z
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
