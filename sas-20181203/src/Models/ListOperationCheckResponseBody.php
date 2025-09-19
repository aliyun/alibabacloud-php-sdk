<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails;

class ListOperationCheckResponseBody extends Model
{
    /**
     * @var operationTaskInstanceDetails[]
     */
    public $operationTaskInstanceDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'operationTaskInstanceDetails' => 'OperationTaskInstanceDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->operationTaskInstanceDetails)) {
            Model::validateArray($this->operationTaskInstanceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operationTaskInstanceDetails) {
            if (\is_array($this->operationTaskInstanceDetails)) {
                $res['OperationTaskInstanceDetails'] = [];
                $n1 = 0;
                foreach ($this->operationTaskInstanceDetails as $item1) {
                    $res['OperationTaskInstanceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OperationTaskInstanceDetails'])) {
            if (!empty($map['OperationTaskInstanceDetails'])) {
                $model->operationTaskInstanceDetails = [];
                $n1 = 0;
                foreach ($map['OperationTaskInstanceDetails'] as $item1) {
                    $model->operationTaskInstanceDetails[$n1] = operationTaskInstanceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
