<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model
{
    /**
     * @description The description of the group.
     *
     * The description can be up to 1,024 characters in length.
     * @example This is a group.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the group.
     *
     * The name can be up to 128 characters in length.
     * @example TestGroup
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'description' => 'Description',
        'directoryId' => 'DirectoryId',
        'groupName'   => 'GroupName',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
