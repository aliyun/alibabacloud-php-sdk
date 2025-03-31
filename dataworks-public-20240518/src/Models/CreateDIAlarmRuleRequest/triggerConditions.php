<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest;

use AlibabaCloud\Dara\Model;

class triggerConditions extends Model
{
    /**
     * @var string[]
     */
    public $ddlReportTags;

    /**
     * @var string[]
     */
    public $ddlTypes;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'ddlReportTags' => 'DdlReportTags',
        'ddlTypes' => 'DdlTypes',
        'duration' => 'Duration',
        'severity' => 'Severity',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (\is_array($this->ddlReportTags)) {
            Model::validateArray($this->ddlReportTags);
        }
        if (\is_array($this->ddlTypes)) {
            Model::validateArray($this->ddlTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddlReportTags) {
            if (\is_array($this->ddlReportTags)) {
                $res['DdlReportTags'] = [];
                $n1 = 0;
                foreach ($this->ddlReportTags as $item1) {
                    $res['DdlReportTags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ddlTypes) {
            if (\is_array($this->ddlTypes)) {
                $res['DdlTypes'] = [];
                $n1 = 0;
                foreach ($this->ddlTypes as $item1) {
                    $res['DdlTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['DdlReportTags'])) {
            if (!empty($map['DdlReportTags'])) {
                $model->ddlReportTags = [];
                $n1 = 0;
                foreach ($map['DdlReportTags'] as $item1) {
                    $model->ddlReportTags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DdlTypes'])) {
            if (!empty($map['DdlTypes'])) {
                $model->ddlTypes = [];
                $n1 = 0;
                foreach ($map['DdlTypes'] as $item1) {
                    $model->ddlTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
