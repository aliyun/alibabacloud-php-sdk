<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class RenameDbfsRequest extends Model
{
    /**
     * @example dbfs-GOrr********Yd0VLOyBpg
     *
     * @var string
     */
    public $fsId;

    /**
     * @example NewDbfsName
     *
     * @var string
     */
    public $fsName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'fsId'     => 'FsId',
        'fsName'   => 'FsName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenameDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
