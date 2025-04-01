<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateSecretRequest;

use AlibabaCloud\Dara\Model;

class secretData extends Model
{
    /**
     * @var string
     */
    public $secretData;
    protected $_name = [
        'secretData' => 'SecretData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
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
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }

        return $model;
    }
}
