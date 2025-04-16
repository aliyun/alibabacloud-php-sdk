<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet\operationProgress;

class operationProgressSet extends Model
{
    /**
     * @var operationProgress[]
     */
    public $operationProgress;
    protected $_name = [
        'operationProgress' => 'OperationProgress',
    ];

    public function validate()
    {
        if (\is_array($this->operationProgress)) {
            Model::validateArray($this->operationProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationProgress) {
            if (\is_array($this->operationProgress)) {
                $res['OperationProgress'] = [];
                $n1 = 0;
                foreach ($this->operationProgress as $item1) {
                    $res['OperationProgress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OperationProgress'])) {
            if (!empty($map['OperationProgress'])) {
                $model->operationProgress = [];
                $n1 = 0;
                foreach ($map['OperationProgress'] as $item1) {
                    $model->operationProgress[$n1++] = operationProgress::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
