<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class UpdateWarehouseScheduleTaskRequest extends Model
{
    /**
     * @var int
     */
    public $elasticCu;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $warehouseId;
    protected $_name = [
        'elasticCu' => 'elasticCu',
        'endTime' => 'endTime',
        'id' => 'id',
        'startTime' => 'startTime',
        'warehouseId' => 'warehouseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticCu) {
            $res['elasticCu'] = $this->elasticCu;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->warehouseId) {
            $res['warehouseId'] = $this->warehouseId;
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
        if (isset($map['elasticCu'])) {
            $model->elasticCu = $map['elasticCu'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['warehouseId'])) {
            $model->warehouseId = $map['warehouseId'];
        }

        return $model;
    }
}
