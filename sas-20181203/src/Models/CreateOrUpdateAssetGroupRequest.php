<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateAssetGroupRequest extends Model
{
    /**
     * @example 55426
     *
     * @var int
     */
    public $groupId;

    /**
     * @description CreateOrUpdateAssetGroup
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Modifies the mapping between an asset and an asset group. For example, you can call this operation to modify the server group to which the asset belongs or the asset list of the asset group.
     *
     * @example aq12-***,s23***
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'uuids'     => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAssetGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
