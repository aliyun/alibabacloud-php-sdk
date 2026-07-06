<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class DiagnosisIssue extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string[]
     */
    public $extra;

    /**
     * @var string
     */
    public $firstOccurrence;

    /**
     * @var string
     */
    public $lastOccurrence;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $occurrenceCount;

    /**
     * @var string
     */
    public $solution;
    protected $_name = [
        'code' => 'Code',
        'extra' => 'Extra',
        'firstOccurrence' => 'FirstOccurrence',
        'lastOccurrence' => 'LastOccurrence',
        'level' => 'Level',
        'occurrenceCount' => 'OccurrenceCount',
        'solution' => 'Solution',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->firstOccurrence) {
            $res['FirstOccurrence'] = $this->firstOccurrence;
        }

        if (null !== $this->lastOccurrence) {
            $res['LastOccurrence'] = $this->lastOccurrence;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->occurrenceCount) {
            $res['OccurrenceCount'] = $this->occurrenceCount;
        }

        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['FirstOccurrence'])) {
            $model->firstOccurrence = $map['FirstOccurrence'];
        }

        if (isset($map['LastOccurrence'])) {
            $model->lastOccurrence = $map['LastOccurrence'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['OccurrenceCount'])) {
            $model->occurrenceCount = $map['OccurrenceCount'];
        }

        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        return $model;
    }
}
