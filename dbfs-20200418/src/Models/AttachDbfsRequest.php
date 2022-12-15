<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class AttachDbfsRequest extends Model
{
    /**
     * @example create_new_mount_point
     *
     * @var string
     */
    public $attachMode;

    /**
     * @example /mnt/dbfs/dbfs-001
     *
     * @var string
     */
    public $attachPoint;

    /**
     * @example i-bp1ecr********5go2go
     *
     * @var string
     */
    public $ECSInstanceId;

    /**
     * @example dbfs-v0WvA********tVEVcgJLg
     *
     * @var string
     */
    public $fsId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dbfs-pkg-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $serverUrl;
    protected $_name = [
        'attachMode'    => 'AttachMode',
        'attachPoint'   => 'AttachPoint',
        'ECSInstanceId' => 'ECSInstanceId',
        'fsId'          => 'FsId',
        'regionId'      => 'RegionId',
        'serverUrl'     => 'ServerUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }
        if (null !== $this->attachPoint) {
            $res['AttachPoint'] = $this->attachPoint;
        }
        if (null !== $this->ECSInstanceId) {
            $res['ECSInstanceId'] = $this->ECSInstanceId;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }
        if (isset($map['AttachPoint'])) {
            $model->attachPoint = $map['AttachPoint'];
        }
        if (isset($map['ECSInstanceId'])) {
            $model->ECSInstanceId = $map['ECSInstanceId'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }

        return $model;
    }
}
