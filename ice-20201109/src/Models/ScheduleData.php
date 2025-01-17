<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ScheduleData\adBreaks;

class ScheduleData extends Model
{
    /**
     * @var adBreaks[]
     */
    public $adBreaks;
    /**
     * @var int
     */
    public $approximateDurationSeconds;
    /**
     * @var string
     */
    public $approximateStartTime;
    /**
     * @var string
     */
    public $entryType;
    /**
     * @var string
     */
    public $programName;
    /**
     * @var string
     */
    public $sourceLocationName;
    /**
     * @var string
     */
    public $sourceName;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'adBreaks'                   => 'AdBreaks',
        'approximateDurationSeconds' => 'ApproximateDurationSeconds',
        'approximateStartTime'       => 'ApproximateStartTime',
        'entryType'                  => 'EntryType',
        'programName'                => 'ProgramName',
        'sourceLocationName'         => 'SourceLocationName',
        'sourceName'                 => 'SourceName',
        'sourceType'                 => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->adBreaks)) {
            Model::validateArray($this->adBreaks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adBreaks) {
            if (\is_array($this->adBreaks)) {
                $res['AdBreaks'] = [];
                $n1              = 0;
                foreach ($this->adBreaks as $item1) {
                    $res['AdBreaks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->approximateDurationSeconds) {
            $res['ApproximateDurationSeconds'] = $this->approximateDurationSeconds;
        }

        if (null !== $this->approximateStartTime) {
            $res['ApproximateStartTime'] = $this->approximateStartTime;
        }

        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }

        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }

        if (null !== $this->sourceLocationName) {
            $res['SourceLocationName'] = $this->sourceLocationName;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['AdBreaks'])) {
            if (!empty($map['AdBreaks'])) {
                $model->adBreaks = [];
                $n1              = 0;
                foreach ($map['AdBreaks'] as $item1) {
                    $model->adBreaks[$n1++] = adBreaks::fromMap($item1);
                }
            }
        }

        if (isset($map['ApproximateDurationSeconds'])) {
            $model->approximateDurationSeconds = $map['ApproximateDurationSeconds'];
        }

        if (isset($map['ApproximateStartTime'])) {
            $model->approximateStartTime = $map['ApproximateStartTime'];
        }

        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }

        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }

        if (isset($map['SourceLocationName'])) {
            $model->sourceLocationName = $map['SourceLocationName'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
