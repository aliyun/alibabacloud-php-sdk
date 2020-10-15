<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse\podAbstractInfo;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse\podAbstractInfo\containerStatuses\containerStatus;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('containerStatus', $this->containerStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerStatus) {
            $res['ContainerStatus'] = [];
            if (null !== $this->containerStatus && \is_array($this->containerStatus)) {
                $n = 0;
                foreach ($this->containerStatus as $item) {
                    $res['ContainerStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerStatus'])) {
            if (!empty($map['ContainerStatus'])) {
                $model->containerStatus = [];
                $n                      = 0;
                foreach ($map['ContainerStatus'] as $item) {
                    $model->containerStatus[$n++] = null !== $item ? containerStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
