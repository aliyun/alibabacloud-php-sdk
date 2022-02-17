<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data;

use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags\config;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description 配置
     *
     * @var config
     */
    public $config;

    /**
     * @description 标签ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 坐标
     *
     * @var float[]
     */
    public $position;

    /**
     * @var float[]
     */
    public $positionPanoCube;

    /**
     * @description 热点类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'           => 'Config',
        'id'               => 'Id',
        'position'         => 'Position',
        'positionPanoCube' => 'PositionPanoCube',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->positionPanoCube) {
            $res['PositionPanoCube'] = $this->positionPanoCube;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = $map['Position'];
            }
        }
        if (isset($map['PositionPanoCube'])) {
            if (!empty($map['PositionPanoCube'])) {
                $model->positionPanoCube = $map['PositionPanoCube'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
