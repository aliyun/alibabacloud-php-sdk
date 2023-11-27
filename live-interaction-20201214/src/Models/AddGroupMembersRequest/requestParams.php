<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest\requestParams\initMembers;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example $2$111000****
     *
     * @var string
     */
    public $appCid;

    /**
     * @var initMembers[]
     */
    public $initMembers;

    /**
     * @example 112233
     *
     * @var string
     */
    public $operatorAppUid;
    protected $_name = [
        'appCid'         => 'AppCid',
        'initMembers'    => 'InitMembers',
        'operatorAppUid' => 'OperatorAppUid',
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
        if (null !== $this->initMembers) {
            $res['InitMembers'] = [];
            if (null !== $this->initMembers && \is_array($this->initMembers)) {
                $n = 0;
                foreach ($this->initMembers as $item) {
                    $res['InitMembers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
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
        if (isset($map['InitMembers'])) {
            if (!empty($map['InitMembers'])) {
                $model->initMembers = [];
                $n                  = 0;
                foreach ($map['InitMembers'] as $item) {
                    $model->initMembers[$n++] = null !== $item ? initMembers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }

        return $model;
    }
}
