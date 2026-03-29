<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisJobsResponseBody;

use AlibabaCloud\Dara\Model;

class dataDiagnosisJobs extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $dataDiagnosisConfigId;

    /**
     * @var string
     */
    public $dataDiagnosisConfigName;

    /**
     * @var string
     */
    public $dataDiagnosisJobId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtStartTime;

    /**
     * @var string
     */
    public $jobSource;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizDate' => 'BizDate',
        'config' => 'Config',
        'dataDiagnosisConfigId' => 'DataDiagnosisConfigId',
        'dataDiagnosisConfigName' => 'DataDiagnosisConfigName',
        'dataDiagnosisJobId' => 'DataDiagnosisJobId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtStartTime' => 'GmtStartTime',
        'jobSource' => 'JobSource',
        'logs' => 'Logs',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->dataDiagnosisConfigId) {
            $res['DataDiagnosisConfigId'] = $this->dataDiagnosisConfigId;
        }

        if (null !== $this->dataDiagnosisConfigName) {
            $res['DataDiagnosisConfigName'] = $this->dataDiagnosisConfigName;
        }

        if (null !== $this->dataDiagnosisJobId) {
            $res['DataDiagnosisJobId'] = $this->dataDiagnosisJobId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtStartTime) {
            $res['GmtStartTime'] = $this->gmtStartTime;
        }

        if (null !== $this->jobSource) {
            $res['JobSource'] = $this->jobSource;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DataDiagnosisConfigId'])) {
            $model->dataDiagnosisConfigId = $map['DataDiagnosisConfigId'];
        }

        if (isset($map['DataDiagnosisConfigName'])) {
            $model->dataDiagnosisConfigName = $map['DataDiagnosisConfigName'];
        }

        if (isset($map['DataDiagnosisJobId'])) {
            $model->dataDiagnosisJobId = $map['DataDiagnosisJobId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtStartTime'])) {
            $model->gmtStartTime = $map['GmtStartTime'];
        }

        if (isset($map['JobSource'])) {
            $model->jobSource = $map['JobSource'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
