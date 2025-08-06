<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\accounts;

use AlibabaCloud\Dara\Model;

class account extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $sharedTime;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'sharedTime' => 'SharedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->sharedTime) {
            $res['SharedTime'] = $this->sharedTime;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['SharedTime'])) {
            $model->sharedTime = $map['SharedTime'];
        }

        return $model;
    }
}
