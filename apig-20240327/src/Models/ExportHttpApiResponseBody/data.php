<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ExportHttpApiResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $specContentBase64;
    protected $_name = [
        'specContentBase64' => 'specContentBase64',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specContentBase64) {
            $res['specContentBase64'] = $this->specContentBase64;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['specContentBase64'])) {
            $model->specContentBase64 = $map['specContentBase64'];
        }

        return $model;
    }
}
