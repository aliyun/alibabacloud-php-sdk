<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ChangeUserLangRequest extends Model
{
    /**
     * @var string
     */
    public $userLang;
    protected $_name = [
        'userLang' => 'UserLang',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userLang) {
            $res['UserLang'] = $this->userLang;
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
        if (isset($map['UserLang'])) {
            $model->userLang = $map['UserLang'];
        }

        return $model;
    }
}
