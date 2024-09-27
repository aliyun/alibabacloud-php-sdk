<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmAvailableAlertGroupsResponseBody\alertGroups;

use AlibabaCloud\Tea\Model;

class alertGroup extends Model
{
    /**
     * @description The name of the alert contact group.
     *
     * @example [\\"Default\\"]
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
