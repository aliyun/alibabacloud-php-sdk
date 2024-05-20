<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateSecretRequest;

use AlibabaCloud\Tea\Model;

class secretData extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $secretData;
    protected $_name = [
        'secretData' => 'SecretData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretData) {
            $res['SecretData'] = $this->secretData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretData'])) {
            $model->secretData = $map['SecretData'];
        }

        return $model;
    }
}
