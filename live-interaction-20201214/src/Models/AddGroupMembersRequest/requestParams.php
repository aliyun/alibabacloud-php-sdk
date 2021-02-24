<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest\requestParams\initMembers;
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
     * @description 会话id
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 初始化成员
     *
     * @var initMembers[]
     */
    public $initMembers;
    protected $_name = [
        'operatorAppUid' => 'OperatorAppUid',
        'appCid'         => 'AppCid',
        'initMembers'    => 'InitMembers',
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
        if (null !== $this->initMembers) {
            $res['InitMembers'] = [];
            if (null !== $this->initMembers && \is_array($this->initMembers)) {
                $n = 0;
                foreach ($this->initMembers as $item) {
                    $res['InitMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['InitMembers'])) {
            if (!empty($map['InitMembers'])) {
                $model->initMembers = [];
                $n                  = 0;
                foreach ($map['InitMembers'] as $item) {
                    $model->initMembers[$n++] = null !== $item ? initMembers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
