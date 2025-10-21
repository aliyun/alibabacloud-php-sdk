<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SqlStatementWithContext extends Model
{
    /**
     * @var string[]
     */
    public $additionalDependencies;

    /**
     * @var bool
     */
    public $batchMode;

    /**
     * @var mixed[]
     */
    public $flinkConfiguration;

    /**
     * @var string
     */
    public $statement;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'additionalDependencies' => 'additionalDependencies',
        'batchMode' => 'batchMode',
        'flinkConfiguration' => 'flinkConfiguration',
        'statement' => 'statement',
        'versionName' => 'versionName',
    ];

    public function validate()
    {
        if (\is_array($this->additionalDependencies)) {
            Model::validateArray($this->additionalDependencies);
        }
        if (\is_array($this->flinkConfiguration)) {
            Model::validateArray($this->flinkConfiguration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            if (\is_array($this->additionalDependencies)) {
                $res['additionalDependencies'] = [];
                $n1 = 0;
                foreach ($this->additionalDependencies as $item1) {
                    $res['additionalDependencies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->batchMode) {
            $res['batchMode'] = $this->batchMode;
        }

        if (null !== $this->flinkConfiguration) {
            if (\is_array($this->flinkConfiguration)) {
                $res['flinkConfiguration'] = [];
                foreach ($this->flinkConfiguration as $key1 => $value1) {
                    $res['flinkConfiguration'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->statement) {
            $res['statement'] = $this->statement;
        }

        if (null !== $this->versionName) {
            $res['versionName'] = $this->versionName;
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
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = [];
                $n1 = 0;
                foreach ($map['additionalDependencies'] as $item1) {
                    $model->additionalDependencies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['batchMode'])) {
            $model->batchMode = $map['batchMode'];
        }

        if (isset($map['flinkConfiguration'])) {
            if (!empty($map['flinkConfiguration'])) {
                $model->flinkConfiguration = [];
                foreach ($map['flinkConfiguration'] as $key1 => $value1) {
                    $model->flinkConfiguration[$key1] = $value1;
                }
            }
        }

        if (isset($map['statement'])) {
            $model->statement = $map['statement'];
        }

        if (isset($map['versionName'])) {
            $model->versionName = $map['versionName'];
        }

        return $model;
    }
}
