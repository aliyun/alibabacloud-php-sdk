<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateSecretRequest extends Model
{
    /**
     * @var string
     */
    public $secretData;
    protected $_name = [
        'secretData' => 'secretData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretData) {
            $res['secretData'] = $this->secretData;
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
        if (isset($map['secretData'])) {
            $model->secretData = $map['secretData'];
        }

        return $model;
    }
}
