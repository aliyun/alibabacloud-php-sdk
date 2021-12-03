<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class AdaptGameVersionRequest extends Model
{
    /**
     * @description 帧率
     *
     * @var string
     */
    public $frameRate;

    /**
     * @description 分辨率
     *
     * @var string
     */
    public $resolution;

    /**
     * @description 游戏版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'frameRate'  => 'FrameRate',
        'resolution' => 'Resolution',
        'versionId'  => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdaptGameVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
