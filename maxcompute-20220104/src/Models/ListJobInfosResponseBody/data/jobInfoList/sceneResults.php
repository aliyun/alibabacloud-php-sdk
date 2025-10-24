<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data\jobInfoList;

use AlibabaCloud\Dara\Model;

class sceneResults extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $params;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sceneTag;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'description',
        'params' => 'params',
        'scene' => 'scene',
        'sceneTag' => 'sceneTag',
        'summary' => 'summary',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->sceneTag) {
            $res['sceneTag'] = $this->sceneTag;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['sceneTag'])) {
            $model->sceneTag = $map['sceneTag'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
