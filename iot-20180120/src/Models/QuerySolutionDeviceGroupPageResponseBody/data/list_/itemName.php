<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySolutionDeviceGroupPageResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class itemName extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $deviceCount;

    /**
     * @example 1356565656
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1357865658
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example description
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @example 4de2c367****8c585e5992**
     *
     * @var string
     */
    public $groupId;

    /**
     * @example test***
     *
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
