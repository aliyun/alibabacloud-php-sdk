<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\BatchGetAcpConnectionTicketResponseBody\instanceConnectionModels;

class BatchGetAcpConnectionTicketResponseBody extends Model
{
    /**
     * @var instanceConnectionModels[]
     */
    public $instanceConnectionModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceConnectionModels' => 'InstanceConnectionModels',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceConnectionModels)) {
            Model::validateArray($this->instanceConnectionModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceConnectionModels) {
            if (\is_array($this->instanceConnectionModels)) {
                $res['InstanceConnectionModels'] = [];
                $n1 = 0;
                foreach ($this->instanceConnectionModels as $item1) {
                    $res['InstanceConnectionModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceConnectionModels'])) {
            if (!empty($map['InstanceConnectionModels'])) {
                $model->instanceConnectionModels = [];
                $n1 = 0;
                foreach ($map['InstanceConnectionModels'] as $item1) {
                    $model->instanceConnectionModels[$n1] = instanceConnectionModels::fromMap($item1);
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
