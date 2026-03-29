<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ListDataDiagnosisReportsRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $remainRateType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $topN;
    protected $_name = [
        'endDate' => 'EndDate',
        'featureName' => 'FeatureName',
        'instanceId' => 'InstanceId',
        'remainRateType' => 'RemainRateType',
        'startDate' => 'StartDate',
        'topN' => 'TopN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->remainRateType) {
            $res['RemainRateType'] = $this->remainRateType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RemainRateType'])) {
            $model->remainRateType = $map['RemainRateType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        return $model;
    }
}
