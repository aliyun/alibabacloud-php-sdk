<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupIconRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 操作者用户ID
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @description 群聊头像文件MediaID
     *
     * @var string
     */
    public $iconMediaId;
    protected $_name = [
        'appCid'         => 'AppCid',
        'operatorAppUid' => 'OperatorAppUid',
        'iconMediaId'    => 'IconMediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }
        if (null !== $this->iconMediaId) {
            $res['IconMediaId'] = $this->iconMediaId;
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
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }
        if (isset($map['IconMediaId'])) {
            $model->iconMediaId = $map['IconMediaId'];
        }

        return $model;
    }
}
