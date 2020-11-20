<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CheckPermissionRequest extends Model
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
     * @return CheckPermissionRequest
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
