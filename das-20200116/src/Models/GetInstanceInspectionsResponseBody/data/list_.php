<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_\autoFunction;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_\instance;

class list_ extends Model
{
    /**
     * @var autoFunction
     */
    public $autoFunction;
    /**
     * @var mixed[]
     */
    public $data;
    /**
     * @var int
     */
    public $enableDasPro;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var instance
     */
    public $instance;
    /**
     * @var int
     */
    public $score;
    /**
     * @var mixed[]
     */
    public $scoreMap;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var int
     */
    public $state;
    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'autoFunction' => 'AutoFunction',
        'data'         => 'Data',
        'enableDasPro' => 'EnableDasPro',
        'endTime'      => 'EndTime',
        'gmtCreate'    => 'GmtCreate',
        'instance'     => 'Instance',
        'score'        => 'Score',
        'scoreMap'     => 'ScoreMap',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->autoFunction) {
            $this->autoFunction->validate();
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->instance) {
            $this->instance->validate();
        }
        if (\is_array($this->scoreMap)) {
            Model::validateArray($this->scoreMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoFunction) {
            $res['AutoFunction'] = null !== $this->autoFunction ? $this->autoFunction->toArray($noStream) : $this->autoFunction;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['Data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->enableDasPro) {
            $res['EnableDasPro'] = $this->enableDasPro;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toArray($noStream) : $this->instance;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->scoreMap) {
            if (\is_array($this->scoreMap)) {
                $res['ScoreMap'] = [];
                foreach ($this->scoreMap as $key1 => $value1) {
                    $res['ScoreMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AutoFunction'])) {
            $model->autoFunction = autoFunction::fromMap($map['AutoFunction']);
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['EnableDasPro'])) {
            $model->enableDasPro = $map['EnableDasPro'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['ScoreMap'])) {
            if (!empty($map['ScoreMap'])) {
                $model->scoreMap = [];
                foreach ($map['ScoreMap'] as $key1 => $value1) {
                    $model->scoreMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
