<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetDirectorySsoStatusRequest extends Model
{
    /**
     * @example cn-hangzhou+dir-h95efs1mbukd9****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSso;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'enableSso'   => 'EnableSso',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->enableSso) {
            $res['EnableSso'] = $this->enableSso;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDirectorySsoStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EnableSso'])) {
            $model->enableSso = $map['EnableSso'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
