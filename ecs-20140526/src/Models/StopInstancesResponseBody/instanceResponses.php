<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\StopInstancesResponseBody\instanceResponses\instanceResponse;

class instanceResponses extends Model
{
    /**
     * @var instanceResponse[]
     */
    public $instanceResponse;
    protected $_name = [
        'instanceResponse' => 'InstanceResponse',
    ];

    public function validate()
    {
        if (\is_array($this->instanceResponse)) {
            Model::validateArray($this->instanceResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceResponse) {
            if (\is_array($this->instanceResponse)) {
                $res['InstanceResponse'] = [];
                $n1 = 0;
                foreach ($this->instanceResponse as $item1) {
                    $res['InstanceResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceResponse'])) {
            if (!empty($map['InstanceResponse'])) {
                $model->instanceResponse = [];
                $n1 = 0;
                foreach ($map['InstanceResponse'] as $item1) {
                    $model->instanceResponse[$n1] = instanceResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
