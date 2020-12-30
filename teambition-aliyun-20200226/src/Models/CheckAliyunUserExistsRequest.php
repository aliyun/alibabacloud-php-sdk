<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class CheckAliyunUserExistsRequest extends Model
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
     * @return CheckAliyunUserExistsRequest
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
