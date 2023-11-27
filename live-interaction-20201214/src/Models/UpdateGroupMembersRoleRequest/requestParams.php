<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateGroupMembersRoleRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 11222333
     *
     * @var string
     */
    public $appCid;

    /**
     * @example value1
     *
     * @var string[]
     */
    public $appUids;

    /**
     * @example 123123
     *
     * @var string
     */
    public $operatorAppUid;

    /**
     * @example 3
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'appCid'         => 'AppCid',
        'appUids'        => 'AppUids',
        'operatorAppUid' => 'OperatorAppUid',
        'role'           => 'Role',
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
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }
        if (null !== $this->operatorAppUid) {
            $res['OperatorAppUid'] = $this->operatorAppUid;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }
        if (isset($map['OperatorAppUid'])) {
            $model->operatorAppUid = $map['OperatorAppUid'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
