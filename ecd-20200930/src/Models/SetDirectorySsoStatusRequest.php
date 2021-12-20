<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetDirectorySsoStatusRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var bool
     */
    public $enableSso;

    /**
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
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('enableSso', $this->enableSso, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
