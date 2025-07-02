<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\RunApplicationActionResponseBody\abnInstances;

class RunApplicationActionResponseBody extends Model
{
    /**
     * @var abnInstances[]
     */
    public $abnInstances;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnInstances' => 'AbnInstances',
        'operationId' => 'OperationId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->abnInstances)) {
            Model::validateArray($this->abnInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnInstances) {
            if (\is_array($this->abnInstances)) {
                $res['AbnInstances'] = [];
                $n1 = 0;
                foreach ($this->abnInstances as $item1) {
                    $res['AbnInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
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
        if (isset($map['AbnInstances'])) {
            if (!empty($map['AbnInstances'])) {
                $model->abnInstances = [];
                $n1 = 0;
                foreach ($map['AbnInstances'] as $item1) {
                    $model->abnInstances[$n1] = abnInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
