<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody\podAbstractInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody\podAbstractInfo\containerStatuses\containerStatus;

class containerStatuses extends Model
{
    /**
     * @var containerStatus[]
     */
    public $containerStatus;
    protected $_name = [
        'containerStatus' => 'ContainerStatus',
    ];

    public function validate()
    {
        if (\is_array($this->containerStatus)) {
            Model::validateArray($this->containerStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerStatus) {
            if (\is_array($this->containerStatus)) {
                $res['ContainerStatus'] = [];
                $n1 = 0;
                foreach ($this->containerStatus as $item1) {
                    $res['ContainerStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContainerStatus'])) {
            if (!empty($map['ContainerStatus'])) {
                $model->containerStatus = [];
                $n1 = 0;
                foreach ($map['ContainerStatus'] as $item1) {
                    $model->containerStatus[$n1] = containerStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
