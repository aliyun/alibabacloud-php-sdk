<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\SelectComputeTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class exportOssFileList extends Model
{
    /**
     * @var string
     */
    public $downLoadUrl;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'downLoadUrl' => 'downLoadUrl',
        'password' => 'password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downLoadUrl) {
            $res['downLoadUrl'] = $this->downLoadUrl;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (isset($map['downLoadUrl'])) {
            $model->downLoadUrl = $map['downLoadUrl'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
