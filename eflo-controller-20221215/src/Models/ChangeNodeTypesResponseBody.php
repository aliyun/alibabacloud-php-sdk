<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ChangeNodeTypesResponseBody\nodeResponse;

class ChangeNodeTypesResponseBody extends Model
{
    /**
     * @var nodeResponse[]
     */
    public $nodeResponse;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'nodeResponse' => 'NodeResponse',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeResponse)) {
            Model::validateArray($this->nodeResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeResponse) {
            if (\is_array($this->nodeResponse)) {
                $res['NodeResponse'] = [];
                $n1 = 0;
                foreach ($this->nodeResponse as $item1) {
                    $res['NodeResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['NodeResponse'])) {
            if (!empty($map['NodeResponse'])) {
                $model->nodeResponse = [];
                $n1 = 0;
                foreach ($map['NodeResponse'] as $item1) {
                    $model->nodeResponse[$n1] = nodeResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
