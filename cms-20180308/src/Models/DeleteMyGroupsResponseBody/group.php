<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\DeleteMyGroupsResponseBody\group\contactGroups;

class group extends Model
{
    /**
     * @var string
     */
    public $bindUrls;

    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindUrls' => 'BindUrls',
        'contactGroups' => 'ContactGroups',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'serviceId' => 'ServiceId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->contactGroups) {
            $this->contactGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindUrls) {
            $res['BindUrls'] = $this->bindUrls;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toArray($noStream) : $this->contactGroups;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindUrls'])) {
            $model->bindUrls = $map['BindUrls'];
        }

        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
