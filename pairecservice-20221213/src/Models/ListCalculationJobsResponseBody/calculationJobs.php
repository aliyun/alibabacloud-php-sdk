<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListCalculationJobsResponseBody;

use AlibabaCloud\Dara\Model;

class calculationJobs extends Model
{
    /**
     * @var string
     */
    public $ABMetricName;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $calculationJobId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $gmtRanTime;

    /**
     * @var string[]
     */
    public $jobMessage;

    /**
     * @var string
     */
    public $jobSource;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ABMetricName' => 'ABMetricName',
        'bizDate' => 'BizDate',
        'calculationJobId' => 'CalculationJobId',
        'config' => 'Config',
        'gmtRanTime' => 'GmtRanTime',
        'jobMessage' => 'JobMessage',
        'jobSource' => 'JobSource',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->jobMessage)) {
            Model::validateArray($this->jobMessage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ABMetricName) {
            $res['ABMetricName'] = $this->ABMetricName;
        }

        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->calculationJobId) {
            $res['CalculationJobId'] = $this->calculationJobId;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->gmtRanTime) {
            $res['GmtRanTime'] = $this->gmtRanTime;
        }

        if (null !== $this->jobMessage) {
            if (\is_array($this->jobMessage)) {
                $res['JobMessage'] = [];
                $n1 = 0;
                foreach ($this->jobMessage as $item1) {
                    $res['JobMessage'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobSource) {
            $res['JobSource'] = $this->jobSource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ABMetricName'])) {
            $model->ABMetricName = $map['ABMetricName'];
        }

        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['CalculationJobId'])) {
            $model->calculationJobId = $map['CalculationJobId'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['GmtRanTime'])) {
            $model->gmtRanTime = $map['GmtRanTime'];
        }

        if (isset($map['JobMessage'])) {
            if (!empty($map['JobMessage'])) {
                $model->jobMessage = [];
                $n1 = 0;
                foreach ($map['JobMessage'] as $item1) {
                    $model->jobMessage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobSource'])) {
            $model->jobSource = $map['JobSource'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
