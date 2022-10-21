<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ResizeDiskNodeGroupParam extends Model
{
    /**
     * @var int
     */
    public $dataDiskCapacity;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var bool
     */
    public $rollingRestart;
    protected $_name = [
        'dataDiskCapacity' => 'DataDiskCapacity',
        'nodeGroupId'      => 'NodeGroupId',
        'rollingRestart'   => 'RollingRestart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskCapacity) {
            $res['DataDiskCapacity'] = $this->dataDiskCapacity;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->rollingRestart) {
            $res['RollingRestart'] = $this->rollingRestart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeDiskNodeGroupParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskCapacity'])) {
            $model->dataDiskCapacity = $map['DataDiskCapacity'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['RollingRestart'])) {
            $model->rollingRestart = $map['RollingRestart'];
        }

        return $model;
    }
}
