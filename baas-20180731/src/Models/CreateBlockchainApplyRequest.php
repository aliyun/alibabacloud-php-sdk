<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateBlockchainApplyRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $liveTime;

    /**
     * @var int
     */
    public $machineNum;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'bizid'      => 'Bizid',
        'liveTime'   => 'LiveTime',
        'machineNum' => 'MachineNum',
        'size'       => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->liveTime) {
            $res['LiveTime'] = $this->liveTime;
        }
        if (null !== $this->machineNum) {
            $res['MachineNum'] = $this->machineNum;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBlockchainApplyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['LiveTime'])) {
            $model->liveTime = $map['LiveTime'];
        }
        if (isset($map['MachineNum'])) {
            $model->machineNum = $map['MachineNum'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
