<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs\files;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs\properties;

class envs extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $envVersion;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var properties[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $relatedScenes;

    /**
     * @var string[]
     */
    public $runningScenes;

    /**
     * @var int
     */
    public $usedCapacity;
    protected $_name = [
        'createTime' => 'CreateTime',
        'envId' => 'EnvId',
        'envName' => 'EnvName',
        'envVersion' => 'EnvVersion',
        'files' => 'Files',
        'modifiedTime' => 'ModifiedTime',
        'properties' => 'Properties',
        'relatedScenes' => 'RelatedScenes',
        'runningScenes' => 'RunningScenes',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->relatedScenes)) {
            Model::validateArray($this->relatedScenes);
        }
        if (\is_array($this->runningScenes)) {
            Model::validateArray($this->runningScenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }

        if (null !== $this->envVersion) {
            $res['EnvVersion'] = $this->envVersion;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                $n1 = 0;
                foreach ($this->properties as $item1) {
                    $res['Properties'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relatedScenes) {
            if (\is_array($this->relatedScenes)) {
                $res['RelatedScenes'] = [];
                $n1 = 0;
                foreach ($this->relatedScenes as $item1) {
                    $res['RelatedScenes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runningScenes) {
            if (\is_array($this->runningScenes)) {
                $res['RunningScenes'] = [];
                $n1 = 0;
                foreach ($this->runningScenes as $item1) {
                    $res['RunningScenes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }

        if (isset($map['EnvVersion'])) {
            $model->envVersion = $map['EnvVersion'];
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n1 = 0;
                foreach ($map['Properties'] as $item1) {
                    $model->properties[$n1] = properties::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RelatedScenes'])) {
            if (!empty($map['RelatedScenes'])) {
                $model->relatedScenes = [];
                $n1 = 0;
                foreach ($map['RelatedScenes'] as $item1) {
                    $model->relatedScenes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RunningScenes'])) {
            if (!empty($map['RunningScenes'])) {
                $model->runningScenes = [];
                $n1 = 0;
                foreach ($map['RunningScenes'] as $item1) {
                    $model->runningScenes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
