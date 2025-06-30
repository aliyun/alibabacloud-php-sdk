<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class ModifyReportTaskStatusRequest extends Model
{
    /**
     * @var int
     */
    public $featureType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $reportTaskStatus;
    protected $_name = [
        'featureType' => 'FeatureType',
        'lang' => 'Lang',
        'reportTaskStatus' => 'ReportTaskStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->reportTaskStatus) {
            $res['ReportTaskStatus'] = $this->reportTaskStatus;
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
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ReportTaskStatus'])) {
            $model->reportTaskStatus = $map['ReportTaskStatus'];
        }

        return $model;
    }
}
