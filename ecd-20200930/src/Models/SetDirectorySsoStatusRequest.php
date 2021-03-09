<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetDirectorySsoStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var bool
     */
    public $enableSso;
    protected $_name = [
        'regionId'    => 'RegionId',
        'directoryId' => 'DirectoryId',
        'enableSso'   => 'EnableSso',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('enableSso', $this->enableSso, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->enableSso) {
            $res['EnableSso'] = $this->enableSso;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EnableSso'])) {
            $model->enableSso = $map['EnableSso'];
        }

        return $model;
    }
}
