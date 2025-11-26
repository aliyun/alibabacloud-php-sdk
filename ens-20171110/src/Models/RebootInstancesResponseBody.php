<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class RebootInstancesResponseBody extends Model
{
    /**
     * @var InstanceOperateResponse[]
     */
    public $instanceResponses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceResponses' => 'InstanceResponses',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceResponses)) {
            Model::validateArray($this->instanceResponses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceResponses) {
            if (\is_array($this->instanceResponses)) {
                $res['InstanceResponses'] = [];
                $n1 = 0;
                foreach ($this->instanceResponses as $item1) {
                    $res['InstanceResponses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceResponses'])) {
            if (!empty($map['InstanceResponses'])) {
                $model->instanceResponses = [];
                $n1 = 0;
                foreach ($map['InstanceResponses'] as $item1) {
                    $model->instanceResponses[$n1] = InstanceOperateResponse::fromMap($item1);
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
