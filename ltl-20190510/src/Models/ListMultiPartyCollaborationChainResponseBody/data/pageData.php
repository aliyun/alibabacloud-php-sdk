<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListMultiPartyCollaborationChainResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example ADMIN
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'bizChainId' => 'BizChainId',
        'name'       => 'Name',
        'remark'     => 'Remark',
        'roleType'   => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
