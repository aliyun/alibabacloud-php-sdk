<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\sms;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'username' => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
