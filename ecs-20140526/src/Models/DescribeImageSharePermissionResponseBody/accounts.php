<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody;

use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $aliyunId;
    protected $_name = [
        'aliyunId' => 'AliyunId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        return $model;
    }
}
