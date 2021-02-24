<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\RemoveGroupSilenceWhitelistRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 操作者
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @description 群会话id
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 禁言用户列表
     *
     * @var string[]
     */
    public $members;
    protected $_name = [
        'operatorAppUid' => 'OperatorAppUid',
        'appCid'         => 'AppCid',
        'members'        => 'Members',
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
        if (null !== $this->members) {
            $res['Members'] = $this->members;
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
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = $map['Members'];
            }
        }

        return $model;
    }
}
