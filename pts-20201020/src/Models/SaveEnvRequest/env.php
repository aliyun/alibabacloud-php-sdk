<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env\files;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env\properties;

class env extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $jmeterPluginLabel;

    /**
     * @var properties[]
     */
    public $properties;
    protected $_name = [
        'envId' => 'EnvId',
        'envName' => 'EnvName',
        'files' => 'Files',
        'jmeterPluginLabel' => 'JmeterPluginLabel',
        'properties' => 'Properties',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
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

        if (null !== $this->jmeterPluginLabel) {
            $res['JmeterPluginLabel'] = $this->jmeterPluginLabel;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JmeterPluginLabel'])) {
            $model->jmeterPluginLabel = $map['JmeterPluginLabel'];
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

        return $model;
    }
}
