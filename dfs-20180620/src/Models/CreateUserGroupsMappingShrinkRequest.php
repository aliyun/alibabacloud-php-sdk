<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class CreateUserGroupsMappingShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 55C5FFD6-BF99-41BD-9C66-FFF39189****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example ["group1","group2"]
     *
     * @var string
     */
    public $groupNamesShrink;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @description This parameter is required.
     *
     * @example user1
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'groupNamesShrink' => 'GroupNames',
        'inputRegionId' => 'InputRegionId',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->groupNamesShrink) {
            $res['GroupNames'] = $this->groupNamesShrink;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserGroupsMappingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['GroupNames'])) {
            $model->groupNamesShrink = $map['GroupNames'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
