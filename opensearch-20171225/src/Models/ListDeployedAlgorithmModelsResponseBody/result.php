<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListDeployedAlgorithmModelsResponseBody\result\models;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $apps;

    /**
     * @var string
     */
    public $appGroupName;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'apps'         => 'apps',
        'appGroupName' => 'appGroupName',
        'models'       => 'models',
        'gmtModified'  => 'gmtModified',
        'status'       => 'status',
        'scene'        => 'scene',
        'gmtCreate'    => 'gmtCreate',
        'id'           => 'id',
        'desc'         => 'desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apps) {
            $res['apps'] = $this->apps;
        }
        if (null !== $this->appGroupName) {
            $res['appGroupName'] = $this->appGroupName;
        }
        if (null !== $this->models) {
            $res['models'] = [];
            if (null !== $this->models && \is_array($this->models)) {
                $n = 0;
                foreach ($this->models as $item) {
                    $res['models'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apps'])) {
            if (!empty($map['apps'])) {
                $model->apps = $map['apps'];
            }
        }
        if (isset($map['appGroupName'])) {
            $model->appGroupName = $map['appGroupName'];
        }
        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n             = 0;
                foreach ($map['models'] as $item) {
                    $model->models[$n++] = null !== $item ? models::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        return $model;
    }
}
