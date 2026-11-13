<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RetryLogicalModelDeploymentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\RetryLogicalModelDeploymentResponseBody\data\targets;

class data extends Model
{
    /**
     * @var string
     */
    public $logicalModelId;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $status;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'logicalModelId' => 'logicalModelId',
        'operationId' => 'operationId',
        'revision' => 'revision',
        'status' => 'status',
        'targets' => 'targets',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicalModelId) {
            $res['logicalModelId'] = $this->logicalModelId;
        }

        if (null !== $this->operationId) {
            $res['operationId'] = $this->operationId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['logicalModelId'])) {
            $model->logicalModelId = $map['logicalModelId'];
        }

        if (isset($map['operationId'])) {
            $model->operationId = $map['operationId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['targets'])) {
            if (!empty($map['targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
