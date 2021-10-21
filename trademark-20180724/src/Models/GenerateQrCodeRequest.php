<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GenerateQrCodeRequest extends Model
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $fieldKey;
    protected $_name = [
        'uuid'     => 'Uuid',
        'ossKey'   => 'OssKey',
        'fieldKey' => 'FieldKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->fieldKey) {
            $res['FieldKey'] = $this->fieldKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateQrCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['FieldKey'])) {
            $model->fieldKey = $map['FieldKey'];
        }

        return $model;
    }
}
