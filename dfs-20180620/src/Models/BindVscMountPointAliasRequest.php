<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class BindVscMountPointAliasRequest extends Model
{
    /**
     * @example sdfe
     *
     * @var string
     */
    public $aliasPrefix;

    /**
     * @example 037****e1d
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $inputRegionId;

    /**
     * @example 037cb49e1d-c***5
     *
     * @var string
     */
    public $mountPointId;
    protected $_name = [
        'aliasPrefix'   => 'AliasPrefix',
        'fileSystemId'  => 'FileSystemId',
        'inputRegionId' => 'InputRegionId',
        'mountPointId'  => 'MountPointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasPrefix) {
            $res['AliasPrefix'] = $this->aliasPrefix;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->inputRegionId) {
            $res['InputRegionId'] = $this->inputRegionId;
        }
        if (null !== $this->mountPointId) {
            $res['MountPointId'] = $this->mountPointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindVscMountPointAliasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasPrefix'])) {
            $model->aliasPrefix = $map['AliasPrefix'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['InputRegionId'])) {
            $model->inputRegionId = $map['InputRegionId'];
        }
        if (isset($map['MountPointId'])) {
            $model->mountPointId = $map['MountPointId'];
        }

        return $model;
    }
}
