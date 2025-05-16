<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class GetConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $encryptOption;
    protected $_name = [
        'encryptOption' => 'EncryptOption',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptOption) {
            $res['EncryptOption'] = $this->encryptOption;
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
        if (isset($map['EncryptOption'])) {
            $model->encryptOption = $map['EncryptOption'];
        }

        return $model;
    }
}
