<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class ClusterStage extends Model
{
    /**
     * @var int
     */
    public $currentStage;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var StageWithWeight[]
     */
    public $totalStageWithWeight;
    protected $_name = [
        'currentStage' => 'CurrentStage',
        'message' => 'Message',
        'status' => 'Status',
        'totalStageWithWeight' => 'TotalStageWithWeight',
    ];

    public function validate()
    {
        if (\is_array($this->totalStageWithWeight)) {
            Model::validateArray($this->totalStageWithWeight);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStage) {
            $res['CurrentStage'] = $this->currentStage;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalStageWithWeight) {
            if (\is_array($this->totalStageWithWeight)) {
                $res['TotalStageWithWeight'] = [];
                $n1 = 0;
                foreach ($this->totalStageWithWeight as $item1) {
                    $res['TotalStageWithWeight'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CurrentStage'])) {
            $model->currentStage = $map['CurrentStage'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalStageWithWeight'])) {
            if (!empty($map['TotalStageWithWeight'])) {
                $model->totalStageWithWeight = [];
                $n1 = 0;
                foreach ($map['TotalStageWithWeight'] as $item1) {
                    $model->totalStageWithWeight[$n1] = StageWithWeight::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
