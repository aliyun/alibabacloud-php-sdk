<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class CreateSdkVersionRequest extends Model
{
    /**
     * @var string
     */
    public $createSdkCmd;
    protected $_name = [
        'createSdkCmd' => 'createSdkCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createSdkCmd) {
            $res['createSdkCmd'] = $this->createSdkCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSdkVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createSdkCmd'])) {
            $model->createSdkCmd = $map['createSdkCmd'];
        }

        return $model;
    }
}
