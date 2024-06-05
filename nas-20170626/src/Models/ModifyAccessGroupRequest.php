<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccessGroupRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * Limits:
     *
     *   The name must be 3 to 64 characters in length.
     *   The name must start with a letter and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     * @example vpc-test
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The description of the permission group.
     *
     * Limits:
     *
     *   By default, the description of the permission group is the same as the name of the permission group. The description must be 2 to 128 characters in length.
     *   The description must start with a letter and cannot start with `http://` or `https://`.
     *   The description can contain digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example vpc-test
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the file system.
     *
     * Valid values:
     *
     *   standard (default): General-purpose NAS file system
     *   extreme: Extreme NAS file system
     *
     * @example standard
     *
     * @var string
     */
    public $fileSystemType;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'description'     => 'Description',
        'fileSystemType'  => 'FileSystemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccessGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        return $model;
    }
}
