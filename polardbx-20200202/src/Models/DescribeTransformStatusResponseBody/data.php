<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTransformStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canCancel;

    /**
     * @var bool
     */
    public $canFinish;

    /**
     * @var bool
     */
    public $canSwitch;

    /**
     * @var bool
     */
    public $canUndoSwitch;

    /**
     * @var string
     */
    public $enterpriseInsName;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var mixed[]
     */
    public $reportSummary;

    /**
     * @var int
     */
    public $reportTime;

    /**
     * @var string
     */
    public $standardInsName;
    protected $_name = [
        'canCancel' => 'CanCancel',
        'canFinish' => 'CanFinish',
        'canSwitch' => 'CanSwitch',
        'canUndoSwitch' => 'CanUndoSwitch',
        'enterpriseInsName' => 'EnterpriseInsName',
        'phase' => 'Phase',
        'reportSummary' => 'ReportSummary',
        'reportTime' => 'ReportTime',
        'standardInsName' => 'StandardInsName',
    ];

    public function validate()
    {
        if (\is_array($this->reportSummary)) {
            Model::validateArray($this->reportSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canCancel) {
            $res['CanCancel'] = $this->canCancel;
        }

        if (null !== $this->canFinish) {
            $res['CanFinish'] = $this->canFinish;
        }

        if (null !== $this->canSwitch) {
            $res['CanSwitch'] = $this->canSwitch;
        }

        if (null !== $this->canUndoSwitch) {
            $res['CanUndoSwitch'] = $this->canUndoSwitch;
        }

        if (null !== $this->enterpriseInsName) {
            $res['EnterpriseInsName'] = $this->enterpriseInsName;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->reportSummary) {
            if (\is_array($this->reportSummary)) {
                $res['ReportSummary'] = [];
                foreach ($this->reportSummary as $key1 => $value1) {
                    $res['ReportSummary'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }

        if (null !== $this->standardInsName) {
            $res['StandardInsName'] = $this->standardInsName;
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
        if (isset($map['CanCancel'])) {
            $model->canCancel = $map['CanCancel'];
        }

        if (isset($map['CanFinish'])) {
            $model->canFinish = $map['CanFinish'];
        }

        if (isset($map['CanSwitch'])) {
            $model->canSwitch = $map['CanSwitch'];
        }

        if (isset($map['CanUndoSwitch'])) {
            $model->canUndoSwitch = $map['CanUndoSwitch'];
        }

        if (isset($map['EnterpriseInsName'])) {
            $model->enterpriseInsName = $map['EnterpriseInsName'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['ReportSummary'])) {
            if (!empty($map['ReportSummary'])) {
                $model->reportSummary = [];
                foreach ($map['ReportSummary'] as $key1 => $value1) {
                    $model->reportSummary[$key1] = $value1;
                }
            }
        }

        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }

        if (isset($map['StandardInsName'])) {
            $model->standardInsName = $map['StandardInsName'];
        }

        return $model;
    }
}
