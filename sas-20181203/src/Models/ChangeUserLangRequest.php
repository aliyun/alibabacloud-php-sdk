<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ChangeUserLangRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $userLang;
    protected $_name = [
        'userLang' => 'UserLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userLang) {
            $res['UserLang'] = $this->userLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeUserLangRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserLang'])) {
            $model->userLang = $map['UserLang'];
        }

        return $model;
    }
}
