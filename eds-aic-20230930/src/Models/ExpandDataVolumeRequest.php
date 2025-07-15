<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ExpandDataVolumeRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @example 100
     *
     * @var int
     */
    public $shareDataVolume;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'bizRegionId' => 'BizRegionId',
        'nodeIds' => 'NodeIds',
        'shareDataVolume' => 'ShareDataVolume',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->shareDataVolume) {
            $res['ShareDataVolume'] = $this->shareDataVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpandDataVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['ShareDataVolume'])) {
            $model->shareDataVolume = $map['ShareDataVolume'];
        }

        return $model;
    }
}
