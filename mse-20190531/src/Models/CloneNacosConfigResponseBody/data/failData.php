<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CloneNacosConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class failData extends Model
{
    /**
     * @description Data ID.
     *
     * @example test2.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description Group ID.
     *
     * @example test
     *
     * @var string
     */
    public $group;

    /**
     * @description The reason for the current operation.
     *
     * @example param not support
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'dataId' => 'DataId',
        'group' => 'Group',
        'reason' => 'Reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
