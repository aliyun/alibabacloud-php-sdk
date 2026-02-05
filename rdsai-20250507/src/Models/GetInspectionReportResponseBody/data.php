<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\GetInspectionReportResponseBody\data\levelSummary;

class data extends Model
{
    /**
     * @var data\data[]
     */
    public $data;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceDesc;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var levelSummary
     */
    public $levelSummary;

    /**
     * @var string
     */
    public $markdownText;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'data' => 'Data',
        'endTime' => 'EndTime',
        'engineType' => 'EngineType',
        'instanceDesc' => 'InstanceDesc',
        'instanceId' => 'InstanceId',
        'levelSummary' => 'LevelSummary',
        'markdownText' => 'MarkdownText',
        'region' => 'Region',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->levelSummary) {
            $this->levelSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->instanceDesc) {
            $res['InstanceDesc'] = $this->instanceDesc;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->levelSummary) {
            $res['LevelSummary'] = null !== $this->levelSummary ? $this->levelSummary->toArray($noStream) : $this->levelSummary;
        }

        if (null !== $this->markdownText) {
            $res['MarkdownText'] = $this->markdownText;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data\data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['InstanceDesc'])) {
            $model->instanceDesc = $map['InstanceDesc'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LevelSummary'])) {
            $model->levelSummary = levelSummary::fromMap($map['LevelSummary']);
        }

        if (isset($map['MarkdownText'])) {
            $model->markdownText = $map['MarkdownText'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
