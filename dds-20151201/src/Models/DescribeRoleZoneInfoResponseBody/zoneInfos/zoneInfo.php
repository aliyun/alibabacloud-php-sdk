<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRoleZoneInfoResponseBody\zoneInfos;

use AlibabaCloud\Tea\Model;

class zoneInfo extends Model
{
    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'insName'  => 'InsName',
        'nodeType' => 'NodeType',
        'roleId'   => 'RoleId',
        'roleType' => 'RoleType',
        'zoneId'   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
