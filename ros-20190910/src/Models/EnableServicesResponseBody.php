<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\EnableServicesResponseBody\failedServices;

class EnableServicesResponseBody extends Model
{
    /**
     * @var failedServices[]
     */
    public $failedServices;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedServices' => 'FailedServices',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->failedServices)) {
            Model::validateArray($this->failedServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedServices) {
            if (\is_array($this->failedServices)) {
                $res['FailedServices'] = [];
                $n1 = 0;
                foreach ($this->failedServices as $item1) {
                    $res['FailedServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedServices'])) {
            if (!empty($map['FailedServices'])) {
                $model->failedServices = [];
                $n1 = 0;
                foreach ($map['FailedServices'] as $item1) {
                    $model->failedServices[$n1] = failedServices::fromMap($item1);
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
