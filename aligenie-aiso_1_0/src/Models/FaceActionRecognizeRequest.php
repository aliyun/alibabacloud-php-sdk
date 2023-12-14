<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vaiso_1_0\Models;

use AlibabaCloud\Tea\Model;

class FaceActionRecognizeRequest extends Model
{
    /**
     * @var string
     */
    public $jsonString;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'jsonString' => 'JsonString',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jsonString) {
            $res['JsonString'] = $this->jsonString;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceActionRecognizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JsonString'])) {
            $model->jsonString = $map['JsonString'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
