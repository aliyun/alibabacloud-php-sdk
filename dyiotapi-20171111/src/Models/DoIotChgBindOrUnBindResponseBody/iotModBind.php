<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotChgBindOrUnBindResponseBody;

use AlibabaCloud\Tea\Model;

class iotModBind extends Model
{
    /**
     * @var bool
     */
    public $isModSuccess;
    protected $_name = [
        'isModSuccess' => 'IsModSuccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isModSuccess) {
            $res['IsModSuccess'] = $this->isModSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iotModBind
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsModSuccess'])) {
            $model->isModSuccess = $map['IsModSuccess'];
        }

        return $model;
    }
}
