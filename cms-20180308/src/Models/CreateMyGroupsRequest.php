<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class CreateMyGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $bindUrl;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindUrl' => 'BindUrl',
        'contactGroups' => 'ContactGroups',
        'groupName' => 'GroupName',
        'options' => 'Options',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }

        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BindUrl'])) {
            $model->bindUrl = $map['BindUrl'];
        }

        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
