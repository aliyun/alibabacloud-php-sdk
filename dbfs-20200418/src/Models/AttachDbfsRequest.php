<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class AttachDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $attachMode;

    /**
     * @var string
     */
    public $attachPoint;

    /**
     * @var string
     */
    public $ECSInstanceId;

    /**
     * @var string
     */
    public $fsId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
