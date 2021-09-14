<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class AttachDbfsRequest extends Model
{
    /**
     * @var string
     */
    public $ECSInstanceId;

    /**
     * @var string
     */
    public $serverUrl;

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
    public $attachMode;

    /**
     * @var string
     */
    public $attachPoint;
    protected $_name = [
        'ECSInstanceId' => 'ECSInstanceId',
        'serverUrl'     => 'ServerUrl',
        'fsId'          => 'FsId',
        'regionId'      => 'RegionId',
        'attachMode'    => 'AttachMode',
        'attachPoint'   => 'AttachPoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ECSInstanceId) {
            $res['ECSInstanceId'] = $this->ECSInstanceId;
        }
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->attachMode) {
            $res['AttachMode'] = $this->attachMode;
        }
        if (null !== $this->attachPoint) {
            $res['AttachPoint'] = $this->attachPoint;
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
        if (isset($map['ECSInstanceId'])) {
            $model->ECSInstanceId = $map['ECSInstanceId'];
        }
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AttachMode'])) {
            $model->attachMode = $map['AttachMode'];
        }
        if (isset($map['AttachPoint'])) {
            $model->attachPoint = $map['AttachPoint'];
        }

        return $model;
    }
}
