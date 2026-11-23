<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;

class modelTpmLimits extends Model
{
    /**
     * @var int
     */
    public $consumerTpm;

    /**
     * @var int
     */
    public $globalTpm;

    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'consumerTpm' => 'consumerTpm',
        'globalTpm' => 'globalTpm',
        'modelId' => 'modelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerTpm) {
            $res['consumerTpm'] = $this->consumerTpm;
        }

        if (null !== $this->globalTpm) {
            $res['globalTpm'] = $this->globalTpm;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
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
        if (isset($map['consumerTpm'])) {
            $model->consumerTpm = $map['consumerTpm'];
        }

        if (isset($map['globalTpm'])) {
            $model->globalTpm = $map['globalTpm'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
