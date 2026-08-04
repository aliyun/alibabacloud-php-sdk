<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class AsyncModifyAgLoginEmailRequest extends Model
{
    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $newLoginEmail;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'mpk' => 'Mpk',
        'newLoginEmail' => 'NewLoginEmail',
        'pk' => 'Pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->newLoginEmail) {
            $res['NewLoginEmail'] = $this->newLoginEmail;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
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
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['NewLoginEmail'])) {
            $model->newLoginEmail = $map['NewLoginEmail'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        return $model;
    }
}
