<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOperateVulRequest\vulInfo;
use AlibabaCloud\Tea\Model;

class ModifyOperateVulRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var vulInfo[]
     */
    public $vulInfo;
    protected $_name = [
        'regionId'    => 'RegionId',
        'type'        => 'Type',
        'operateType' => 'OperateType',
        'reason'      => 'Reason',
        'vulInfo'     => 'VulInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->vulInfo) {
            $res['VulInfo'] = [];
            if (null !== $this->vulInfo && \is_array($this->vulInfo)) {
                $n = 0;
                foreach ($this->vulInfo as $item) {
                    $res['VulInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOperateVulRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['VulInfo'])) {
            if (!empty($map['VulInfo'])) {
                $model->vulInfo = [];
                $n              = 0;
                foreach ($map['VulInfo'] as $item) {
                    $model->vulInfo[$n++] = null !== $item ? vulInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
