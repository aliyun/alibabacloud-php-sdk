<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class AliyunUidWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AliyunUidWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        return $model;
    }
}
