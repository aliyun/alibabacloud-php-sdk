<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class BatchEditQueueSpec extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $environments;

    /**
     * @var string[]
     */
    public $gpuSpec;

    /**
     * @var ResourceSpec
     */
    public $resourceSpec;

    /**
     * @var string
     */
    public $workspaceQueueName;
    protected $_name = [
        'description' => 'description',
        'environments' => 'environments',
        'gpuSpec' => 'gpuSpec',
        'resourceSpec' => 'resourceSpec',
        'workspaceQueueName' => 'workspaceQueueName',
    ];

    public function validate()
    {
        if (\is_array($this->environments)) {
            Model::validateArray($this->environments);
        }
        if (\is_array($this->gpuSpec)) {
            Model::validateArray($this->gpuSpec);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->environments) {
            if (\is_array($this->environments)) {
                $res['environments'] = [];
                $n1 = 0;
                foreach ($this->environments as $item1) {
                    $res['environments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gpuSpec) {
            if (\is_array($this->gpuSpec)) {
                $res['gpuSpec'] = [];
                $n1 = 0;
                foreach ($this->gpuSpec as $item1) {
                    $res['gpuSpec'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->workspaceQueueName) {
            $res['workspaceQueueName'] = $this->workspaceQueueName;
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

        if (isset($map['environments'])) {
            if (!empty($map['environments'])) {
                $model->environments = [];
                $n1 = 0;
                foreach ($map['environments'] as $item1) {
                    $model->environments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['gpuSpec'])) {
            if (!empty($map['gpuSpec'])) {
                $model->gpuSpec = [];
                $n1 = 0;
                foreach ($map['gpuSpec'] as $item1) {
                    $model->gpuSpec[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = ResourceSpec::fromMap($map['resourceSpec']);
        }

        if (isset($map['workspaceQueueName'])) {
            $model->workspaceQueueName = $map['workspaceQueueName'];
        }

        return $model;
    }
}
