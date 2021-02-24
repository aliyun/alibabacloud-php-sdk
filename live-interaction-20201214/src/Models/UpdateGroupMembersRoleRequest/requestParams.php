<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleRequest;

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
     * @description 操作者uid
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @description 角色
     *
     * @var int
     */
    public $rrole;

    /**
     * @description 需要更改的uids
     *
     * @var string[]
     */
    public $appUids;
    protected $_name = [
        'appCid'         => 'AppCid',
        'operatorAppUid' => 'OperatorAppUid',
        'rrole'          => 'Rrole',
        'appUids'        => 'AppUids',
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
        if (null !== $this->rrole) {
            $res['Rrole'] = $this->rrole;
        }
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
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
        if (isset($map['Rrole'])) {
            $model->rrole = $map['Rrole'];
        }
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }

        return $model;
    }
}
