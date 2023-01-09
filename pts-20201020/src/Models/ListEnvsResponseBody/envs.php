<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody;

use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs\files;
use AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs\properties;
use AlibabaCloud\Tea\Model;

class envs extends Model
{
    /**
     * @example 1637053715165
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 86S1LH
     *
     * @var string
     */
    public $envId;

    /**
     * @example test-create
     *
     * @var string
     */
    public $envName;

    /**
     * @example 5.0
     *
     * @var string
     */
    public $envVersion;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @example 1637053719165
     *
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
     * @example 26668
     *
     * @var int
     */
    public $usedCapacity;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'envId'         => 'EnvId',
        'envName'       => 'EnvName',
        'envVersion'    => 'EnvVersion',
        'files'         => 'Files',
        'modifiedTime'  => 'ModifiedTime',
        'properties'    => 'Properties',
        'relatedScenes' => 'RelatedScenes',
        'runningScenes' => 'RunningScenes',
        'usedCapacity'  => 'UsedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->properties) {
            $res['Properties'] = [];
            if (null !== $this->properties && \is_array($this->properties)) {
                $n = 0;
                foreach ($this->properties as $item) {
                    $res['Properties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relatedScenes) {
            $res['RelatedScenes'] = $this->relatedScenes;
        }
        if (null !== $this->runningScenes) {
            $res['RunningScenes'] = $this->runningScenes;
        }
        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envs
     */
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
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Properties'])) {
            if (!empty($map['Properties'])) {
                $model->properties = [];
                $n                 = 0;
                foreach ($map['Properties'] as $item) {
                    $model->properties[$n++] = null !== $item ? properties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelatedScenes'])) {
            if (!empty($map['RelatedScenes'])) {
                $model->relatedScenes = $map['RelatedScenes'];
            }
        }
        if (isset($map['RunningScenes'])) {
            if (!empty($map['RunningScenes'])) {
                $model->runningScenes = $map['RunningScenes'];
            }
        }
        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
