<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class AliyunMainJwtCreateRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $aliyunUidType;
    protected $_name = [
        'aliyunUid'     => 'AliyunUid',
        'aliyunUidType' => 'AliyunUidType',
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
        if (null !== $this->aliyunUidType) {
            $res['AliyunUidType'] = $this->aliyunUidType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AliyunMainJwtCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['AliyunUidType'])) {
            $model->aliyunUidType = $map['AliyunUidType'];
        }

        return $model;
    }
}
