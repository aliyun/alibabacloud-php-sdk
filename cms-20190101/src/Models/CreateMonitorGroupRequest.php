<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupRequest extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $serviceId;

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
    public $options;
    protected $_name = [
        'type'          => 'Type',
        'groupName'     => 'GroupName',
        'serviceId'     => 'ServiceId',
        'bindUrl'       => 'BindUrl',
        'contactGroups' => 'ContactGroups',
        'options'       => 'Options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->bindUrl) {
            $res['BindUrl'] = $this->bindUrl;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['BindUrl'])) {
            $model->bindUrl = $map['BindUrl'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
