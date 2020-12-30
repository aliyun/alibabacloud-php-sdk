<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class CheckAliyunAccountExistsRequest extends Model
{
    /**
     * @var string
     */
    public $userPk;
    protected $_name = [
        'userPk' => 'UserPk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAliyunAccountExistsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }

        return $model;
    }
}
