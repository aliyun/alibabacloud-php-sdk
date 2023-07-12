<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponse\data\list_;

use AlibabaCloud\Tea\Model;

class itemName extends Model
{
    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupDesc;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'deviceCount' => 'DeviceCount',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'groupDesc'   => 'GroupDesc',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
    ];

    public function validate()
    {
        Model::validateRequired('deviceCount', $this->deviceCount, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('groupDesc', $this->groupDesc, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemName
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
