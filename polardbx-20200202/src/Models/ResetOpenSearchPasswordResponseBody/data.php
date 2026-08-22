<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\ResetOpenSearchPasswordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $passwordLastModified;
    protected $_name = [
        'message' => 'Message',
        'passwordLastModified' => 'PasswordLastModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->passwordLastModified) {
            $res['PasswordLastModified'] = $this->passwordLastModified;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PasswordLastModified'])) {
            $model->passwordLastModified = $map['PasswordLastModified'];
        }

        return $model;
    }
}
