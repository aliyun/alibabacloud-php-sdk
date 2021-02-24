<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\DismissGroupRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 操作用户
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @description 会话id
     *
     * @var string
     */
    public $appCid;
    protected $_name = [
        'operatorAppUid' => 'OperatorAppUid',
        'appCid'         => 'AppCid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }

        return $model;
    }
}
