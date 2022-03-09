<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class AliyunRamJwtCreateRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunUidType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentUid;
    protected $_name = [
        'aliyunUidType' => 'AliyunUidType',
        'name'          => 'Name',
        'parentUid'     => 'ParentUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUidType) {
            $res['AliyunUidType'] = $this->aliyunUidType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AliyunRamJwtCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUidType'])) {
            $model->aliyunUidType = $map['AliyunUidType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }

        return $model;
    }
}
