<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody\podAbstractInfo\containerStatuses;

use AlibabaCloud\Tea\Model;

class containerStatus extends Model
{
    /**
     * @description The ID of the container.
     *
     * @example container_e79_1638372147094_158091_02_000001
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of the container.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'containerId' => 'ContainerId',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
