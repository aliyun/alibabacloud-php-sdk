<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest;

use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env\files;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env\properties;
use AlibabaCloud\Tea\Model;

class env extends Model
{
    /**
     * @example 10YPA8H
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
     * @var files[]
     */
    public $files;

    /**
     * @example test
     *
     * @var string
     */
    public $jmeterPluginLabel;

    /**
     * @var properties[]
     */
    public $properties;
    protected $_name = [
        'envId'             => 'EnvId',
        'envName'           => 'EnvName',
        'files'             => 'Files',
        'jmeterPluginLabel' => 'JmeterPluginLabel',
        'properties'        => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
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
        if (null !== $this->jmeterPluginLabel) {
            $res['JmeterPluginLabel'] = $this->jmeterPluginLabel;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return env
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
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
        if (isset($map['JmeterPluginLabel'])) {
            $model->jmeterPluginLabel = $map['JmeterPluginLabel'];
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

        return $model;
    }
}
