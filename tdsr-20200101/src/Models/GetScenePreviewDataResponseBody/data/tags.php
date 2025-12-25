<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tdsr\V20200101\Models\GetScenePreviewDataResponseBody\data\tags\config;

class tags extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $id;

    /**
     * @var float[]
     */
    public $position;

    /**
     * @var float[]
     */
    public $positionPanoCube;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'id' => 'Id',
        'position' => 'Position',
        'positionPanoCube' => 'PositionPanoCube',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (\is_array($this->position)) {
            Model::validateArray($this->position);
        }
        if (\is_array($this->positionPanoCube)) {
            Model::validateArray($this->positionPanoCube);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->position) {
            if (\is_array($this->position)) {
                $res['Position'] = [];
                $n1 = 0;
                foreach ($this->position as $item1) {
                    $res['Position'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->positionPanoCube) {
            if (\is_array($this->positionPanoCube)) {
                $res['PositionPanoCube'] = [];
                $n1 = 0;
                foreach ($this->positionPanoCube as $item1) {
                    $res['PositionPanoCube'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n1 = 0;
                foreach ($map['Position'] as $item1) {
                    $model->position[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PositionPanoCube'])) {
            if (!empty($map['PositionPanoCube'])) {
                $model->positionPanoCube = [];
                $n1 = 0;
                foreach ($map['PositionPanoCube'] as $item1) {
                    $model->positionPanoCube[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
