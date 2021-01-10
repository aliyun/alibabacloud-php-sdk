<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\CheckFaceUserDoExistOnDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $doExist;
    protected $_name = [
        'doExist' => 'DoExist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->doExist) {
            $res['DoExist'] = $this->doExist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DoExist'])) {
            $model->doExist = $map['DoExist'];
        }

        return $model;
    }
}
