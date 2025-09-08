<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponseBody\data\sliceDetails;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var sliceDetails[]
     */
    public $sliceDetails;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'dataId' => 'DataId',
        'liveId' => 'LiveId',
        'manualTaskId' => 'ManualTaskId',
        'riskLevel' => 'RiskLevel',
        'sliceDetails' => 'SliceDetails',
        'taskId' => 'TaskId',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->sliceDetails)) {
            Model::validateArray($this->sliceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }

        if (null !== $this->manualTaskId) {
            $res['ManualTaskId'] = $this->manualTaskId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sliceDetails) {
            if (\is_array($this->sliceDetails)) {
                $res['SliceDetails'] = [];
                $n1 = 0;
                foreach ($this->sliceDetails as $item1) {
                    $res['SliceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }

        if (isset($map['ManualTaskId'])) {
            $model->manualTaskId = $map['ManualTaskId'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['SliceDetails'])) {
            if (!empty($map['SliceDetails'])) {
                $model->sliceDetails = [];
                $n1 = 0;
                foreach ($map['SliceDetails'] as $item1) {
                    $model->sliceDetails[$n1] = sliceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
