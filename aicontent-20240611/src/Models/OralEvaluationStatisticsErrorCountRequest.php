<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class OralEvaluationStatisticsErrorCountRequest extends Model
{
    /**
     * @var string
     */
    public $applicationAccessId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $errorCode;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'applicationAccessId' => 'applicationAccessId',
        'endTime' => 'endTime',
        'errorCode' => 'errorCode',
        'granularity' => 'granularity',
        'projectId' => 'projectId',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->errorCode)) {
            Model::validateArray($this->errorCode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationAccessId) {
            $res['applicationAccessId'] = $this->applicationAccessId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->errorCode) {
            if (\is_array($this->errorCode)) {
                $res['errorCode'] = [];
                $n1 = 0;
                foreach ($this->errorCode as $item1) {
                    $res['errorCode'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['applicationAccessId'])) {
            $model->applicationAccessId = $map['applicationAccessId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['errorCode'])) {
            if (!empty($map['errorCode'])) {
                $model->errorCode = [];
                $n1 = 0;
                foreach ($map['errorCode'] as $item1) {
                    $model->errorCode[$n1++] = $item1;
                }
            }
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
