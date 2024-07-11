<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceMaintainTimeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-bp1b**6jco89****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 06:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description This parameter is required.
     *
     * @example 02:00Z
     *
     * @var string
     */
    public $maintainStartTime;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'maintainEndTime'   => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceMaintainTimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }

        return $model;
    }
}
