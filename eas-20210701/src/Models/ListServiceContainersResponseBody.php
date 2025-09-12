<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class ListServiceContainersResponseBody extends Model
{
    /**
     * @var ContainerInfo[]
     */
    public $containers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'containers' => 'Containers',
        'requestId' => 'RequestId',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1] = ContainerInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
