<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateWorkflowNodeConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateWorkflowNodeConfigurationResponseBody\overrides\executor;

class overrides extends Model
{
    /**
     * @var executor
     */
    public $executor;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int[]
     */
    public $responsibleUserIds;
    protected $_name = [
        'executor' => 'executor',
        'model' => 'model',
        'responsibleUserIds' => 'responsibleUserIds',
    ];

    public function validate()
    {
        if (null !== $this->executor) {
            $this->executor->validate();
        }
        if (\is_array($this->responsibleUserIds)) {
            Model::validateArray($this->responsibleUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executor) {
            $res['executor'] = null !== $this->executor ? $this->executor->toArray($noStream) : $this->executor;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->responsibleUserIds) {
            if (\is_array($this->responsibleUserIds)) {
                $res['responsibleUserIds'] = [];
                $n1 = 0;
                foreach ($this->responsibleUserIds as $item1) {
                    $res['responsibleUserIds'][$n1] = $item1;
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
        if (isset($map['executor'])) {
            $model->executor = executor::fromMap($map['executor']);
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['responsibleUserIds'])) {
            if (!empty($map['responsibleUserIds'])) {
                $model->responsibleUserIds = [];
                $n1 = 0;
                foreach ($map['responsibleUserIds'] as $item1) {
                    $model->responsibleUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
