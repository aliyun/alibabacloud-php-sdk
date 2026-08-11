<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeGroupRefreshTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeGroupRefreshTaskResponseBody\nodes\propertyDrifts;

class nodes extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var propertyDrifts[]
     */
    public $propertyDrifts;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'action' => 'Action',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'nodeId' => 'NodeId',
        'propertyDrifts' => 'PropertyDrifts',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->propertyDrifts)) {
            Model::validateArray($this->propertyDrifts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->propertyDrifts) {
            if (\is_array($this->propertyDrifts)) {
                $res['PropertyDrifts'] = [];
                $n1 = 0;
                foreach ($this->propertyDrifts as $item1) {
                    $res['PropertyDrifts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PropertyDrifts'])) {
            if (!empty($map['PropertyDrifts'])) {
                $model->propertyDrifts = [];
                $n1 = 0;
                foreach ($map['PropertyDrifts'] as $item1) {
                    $model->propertyDrifts[$n1] = propertyDrifts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
