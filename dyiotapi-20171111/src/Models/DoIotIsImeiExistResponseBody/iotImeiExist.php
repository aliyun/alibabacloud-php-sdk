<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotIsImeiExistResponseBody;

use AlibabaCloud\Tea\Model;

class iotImeiExist extends Model
{
    /**
     * @var bool
     */
    public $isImeiExist;
    protected $_name = [
        'isImeiExist' => 'IsImeiExist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isImeiExist) {
            $res['IsImeiExist'] = $this->isImeiExist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iotImeiExist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsImeiExist'])) {
            $model->isImeiExist = $map['IsImeiExist'];
        }

        return $model;
    }
}
