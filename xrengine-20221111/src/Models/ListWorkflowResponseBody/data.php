<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody\data\humanPose;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody\data\mannequins;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody\data\object;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody\data\objectGeneration;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListWorkflowResponseBody\data\scene;

class data extends Model
{
    /**
     * @var humanPose[]
     */
    public $humanPose;

    /**
     * @var mannequins[]
     */
    public $mannequins;

    /**
     * @var object[]
     */
    public $object;

    /**
     * @var objectGeneration[]
     */
    public $objectGeneration;

    /**
     * @var scene[]
     */
    public $scene;
    protected $_name = [
        'humanPose' => 'HumanPose',
        'mannequins' => 'Mannequins',
        'object' => 'Object',
        'objectGeneration' => 'ObjectGeneration',
        'scene' => 'Scene',
    ];

    public function validate()
    {
        if (\is_array($this->humanPose)) {
            Model::validateArray($this->humanPose);
        }
        if (\is_array($this->mannequins)) {
            Model::validateArray($this->mannequins);
        }
        if (\is_array($this->object)) {
            Model::validateArray($this->object);
        }
        if (\is_array($this->objectGeneration)) {
            Model::validateArray($this->objectGeneration);
        }
        if (\is_array($this->scene)) {
            Model::validateArray($this->scene);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->humanPose) {
            if (\is_array($this->humanPose)) {
                $res['HumanPose'] = [];
                $n1 = 0;
                foreach ($this->humanPose as $item1) {
                    $res['HumanPose'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mannequins) {
            if (\is_array($this->mannequins)) {
                $res['Mannequins'] = [];
                $n1 = 0;
                foreach ($this->mannequins as $item1) {
                    $res['Mannequins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->object) {
            if (\is_array($this->object)) {
                $res['Object'] = [];
                $n1 = 0;
                foreach ($this->object as $item1) {
                    $res['Object'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectGeneration) {
            if (\is_array($this->objectGeneration)) {
                $res['ObjectGeneration'] = [];
                $n1 = 0;
                foreach ($this->objectGeneration as $item1) {
                    $res['ObjectGeneration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scene) {
            if (\is_array($this->scene)) {
                $res['Scene'] = [];
                $n1 = 0;
                foreach ($this->scene as $item1) {
                    $res['Scene'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HumanPose'])) {
            if (!empty($map['HumanPose'])) {
                $model->humanPose = [];
                $n1 = 0;
                foreach ($map['HumanPose'] as $item1) {
                    $model->humanPose[$n1] = humanPose::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mannequins'])) {
            if (!empty($map['Mannequins'])) {
                $model->mannequins = [];
                $n1 = 0;
                foreach ($map['Mannequins'] as $item1) {
                    $model->mannequins[$n1] = mannequins::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Object'])) {
            if (!empty($map['Object'])) {
                $model->object = [];
                $n1 = 0;
                foreach ($map['Object'] as $item1) {
                    $model->object[$n1] = object::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectGeneration'])) {
            if (!empty($map['ObjectGeneration'])) {
                $model->objectGeneration = [];
                $n1 = 0;
                foreach ($map['ObjectGeneration'] as $item1) {
                    $model->objectGeneration[$n1] = objectGeneration::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scene'])) {
            if (!empty($map['Scene'])) {
                $model->scene = [];
                $n1 = 0;
                foreach ($map['Scene'] as $item1) {
                    $model->scene[$n1] = scene::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
