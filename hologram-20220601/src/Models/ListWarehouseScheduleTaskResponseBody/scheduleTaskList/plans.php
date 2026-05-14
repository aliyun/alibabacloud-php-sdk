<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListWarehouseScheduleTaskResponseBody\scheduleTaskList;

use AlibabaCloud\Dara\Model;

class plans extends Model
{
    /**
     * @var string
     */
    public $description;

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
    protected $_name = [
        'description' => 'Description',
        'elasticCu' => 'ElasticCu',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->elasticCu) {
            $res['ElasticCu'] = $this->elasticCu;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ElasticCu'])) {
            $model->elasticCu = $map['ElasticCu'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
