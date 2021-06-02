<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddSceneRequest extends Model
{
    /**
     * @description 场景类型 3D模型：MODEL_3D  全景图片：PIC  全景视频：VIDEO
     *
     * @var string
     */
    public $type;

    /**
     * @description 场景名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'type'      => 'Type',
        'name'      => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSceneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
