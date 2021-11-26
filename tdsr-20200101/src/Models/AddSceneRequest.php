<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AddSceneRequest extends Model
{
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

    /**
     * @description 场景类型 3D模型：MODEL_3D  全景图片：PIC  全景视频：VIDEO 混合：MIX
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'      => 'Name',
        'projectId' => 'ProjectId',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
