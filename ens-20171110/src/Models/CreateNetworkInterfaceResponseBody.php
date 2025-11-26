<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkInterfaceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceIds)) {
            Model::validateArray($this->networkInterfaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceIds) {
            if (\is_array($this->networkInterfaceIds)) {
                $res['NetworkInterfaceIds'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceIds as $item1) {
                    $res['NetworkInterfaceIds'][$n1] = $item1;
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
        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceIds'] as $item1) {
                    $model->networkInterfaceIds[$n1] = $item1;
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
