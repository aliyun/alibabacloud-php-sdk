<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $authorizationStatus;

    /**
     * @var int
     */
    public $dailyLimit;

    /**
     * @var bool
     */
    public $dailyScheduleEnabled;

    /**
     * @var string
     */
    public $diagnosisMode;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string[]
     */
    public $selectedItems;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authorizationStatus' => 'authorizationStatus',
        'dailyLimit' => 'dailyLimit',
        'dailyScheduleEnabled' => 'dailyScheduleEnabled',
        'diagnosisMode' => 'diagnosisMode',
        'scene' => 'scene',
        'selectedItems' => 'selectedItems',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->selectedItems)) {
            Model::validateArray($this->selectedItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['authorizationStatus'] = $this->authorizationStatus;
        }

        if (null !== $this->dailyLimit) {
            $res['dailyLimit'] = $this->dailyLimit;
        }

        if (null !== $this->dailyScheduleEnabled) {
            $res['dailyScheduleEnabled'] = $this->dailyScheduleEnabled;
        }

        if (null !== $this->diagnosisMode) {
            $res['diagnosisMode'] = $this->diagnosisMode;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->selectedItems) {
            if (\is_array($this->selectedItems)) {
                $res['selectedItems'] = [];
                $n1 = 0;
                foreach ($this->selectedItems as $item1) {
                    $res['selectedItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['authorizationStatus'])) {
            $model->authorizationStatus = $map['authorizationStatus'];
        }

        if (isset($map['dailyLimit'])) {
            $model->dailyLimit = $map['dailyLimit'];
        }

        if (isset($map['dailyScheduleEnabled'])) {
            $model->dailyScheduleEnabled = $map['dailyScheduleEnabled'];
        }

        if (isset($map['diagnosisMode'])) {
            $model->diagnosisMode = $map['diagnosisMode'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['selectedItems'])) {
            if (!empty($map['selectedItems'])) {
                $model->selectedItems = [];
                $n1 = 0;
                foreach ($map['selectedItems'] as $item1) {
                    $model->selectedItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
