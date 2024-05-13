<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateStandardGroupRequest extends Model
{
    /**
     * @description The description of the security rule set.
     *
     * This parameter is required.
     * @example Production Environment test rules
     *
     * @var string
     */
    public $description;

    /**
     * @description The security rule set ID. You can call the [ListStandardGroups](https://help.aliyun.com/document_detail/465940.html) operation to obtain the ID of the security rule set.
     *
     * This parameter is required.
     * @example 242***
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the security rule set.
     *
     * This parameter is required.
     * @example poc_test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The tenant ID.
     *
     * >  To view the tenant ID, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see the [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) section of the "Manage DMS tenants" topic.
     * @example 23****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStandardGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
