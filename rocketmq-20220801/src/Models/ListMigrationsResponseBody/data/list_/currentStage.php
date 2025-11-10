<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class currentStage extends Model
{
    /**
     * @var mixed
     */
    public $stageData;

    /**
     * @var string
     */
    public $stageStatus;

    /**
     * @var string
     */
    public $stageType;
    protected $_name = [
        'stageData' => 'stageData',
        'stageStatus' => 'stageStatus',
        'stageType' => 'stageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stageData) {
            $res['stageData'] = $this->stageData;
        }

        if (null !== $this->stageStatus) {
            $res['stageStatus'] = $this->stageStatus;
        }

        if (null !== $this->stageType) {
            $res['stageType'] = $this->stageType;
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
        if (isset($map['stageData'])) {
            $model->stageData = $map['stageData'];
        }

        if (isset($map['stageStatus'])) {
            $model->stageStatus = $map['stageStatus'];
        }

        if (isset($map['stageType'])) {
            $model->stageType = $map['stageType'];
        }

        return $model;
    }
}
