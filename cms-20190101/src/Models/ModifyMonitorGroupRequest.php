<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyMonitorGroupRequest extends Model
{
    /**
     * @var string
     */
    public $bindUrls;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $contactGroups;
    protected $_name = [
        'bindUrls'      => 'BindUrls',
        'serviceId'     => 'ServiceId',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'contactGroups' => 'ContactGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindUrls) {
            $res['BindUrls'] = $this->bindUrls;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindUrls'])) {
            $model->bindUrls = $map['BindUrls'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }

        return $model;
    }
}
