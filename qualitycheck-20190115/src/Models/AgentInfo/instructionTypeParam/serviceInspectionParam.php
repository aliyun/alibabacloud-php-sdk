<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\serviceInspectionParam\dimensions;

class serviceInspectionParam extends Model
{
    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $sceneDescription;

    /**
     * @var string
     */
    public $sceneName;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'sceneDescription' => 'SceneDescription',
        'sceneName' => 'SceneName',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sceneDescription) {
            $res['SceneDescription'] = $this->sceneDescription;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
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
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = dimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SceneDescription'])) {
            $model->sceneDescription = $map['SceneDescription'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        return $model;
    }
}
