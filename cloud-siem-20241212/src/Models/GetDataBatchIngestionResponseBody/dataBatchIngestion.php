<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataBatchIngestionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataBatchIngestionResponseBody\dataBatchIngestion\dataIngestions;

class dataBatchIngestion extends Model
{
    /**
     * @var string[]
     */
    public $apsaraDataIngestionIds;

    /**
     * @var string
     */
    public $autoScanNew;

    /**
     * @var string
     */
    public $dataBatchIngestionEffectTime;

    /**
     * @var string
     */
    public $dataBatchIngestionMode;

    /**
     * @var string
     */
    public $dataBatchIngestionSetTime;

    /**
     * @var string
     */
    public $dataBatchIngestionStatus;

    /**
     * @var dataIngestions[]
     */
    public $dataIngestions;

    /**
     * @var bool
     */
    public $dataSourceRecognizeEnabled;

    /**
     * @var string[]
     */
    public $logUserIds;

    /**
     * @var string[]
     */
    public $recommendDataIngestionIds;
    protected $_name = [
        'apsaraDataIngestionIds' => 'ApsaraDataIngestionIds',
        'autoScanNew' => 'AutoScanNew',
        'dataBatchIngestionEffectTime' => 'DataBatchIngestionEffectTime',
        'dataBatchIngestionMode' => 'DataBatchIngestionMode',
        'dataBatchIngestionSetTime' => 'DataBatchIngestionSetTime',
        'dataBatchIngestionStatus' => 'DataBatchIngestionStatus',
        'dataIngestions' => 'DataIngestions',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'logUserIds' => 'LogUserIds',
        'recommendDataIngestionIds' => 'RecommendDataIngestionIds',
    ];

    public function validate()
    {
        if (\is_array($this->apsaraDataIngestionIds)) {
            Model::validateArray($this->apsaraDataIngestionIds);
        }
        if (\is_array($this->dataIngestions)) {
            Model::validateArray($this->dataIngestions);
        }
        if (\is_array($this->logUserIds)) {
            Model::validateArray($this->logUserIds);
        }
        if (\is_array($this->recommendDataIngestionIds)) {
            Model::validateArray($this->recommendDataIngestionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsaraDataIngestionIds) {
            if (\is_array($this->apsaraDataIngestionIds)) {
                $res['ApsaraDataIngestionIds'] = [];
                $n1 = 0;
                foreach ($this->apsaraDataIngestionIds as $item1) {
                    $res['ApsaraDataIngestionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoScanNew) {
            $res['AutoScanNew'] = $this->autoScanNew;
        }

        if (null !== $this->dataBatchIngestionEffectTime) {
            $res['DataBatchIngestionEffectTime'] = $this->dataBatchIngestionEffectTime;
        }

        if (null !== $this->dataBatchIngestionMode) {
            $res['DataBatchIngestionMode'] = $this->dataBatchIngestionMode;
        }

        if (null !== $this->dataBatchIngestionSetTime) {
            $res['DataBatchIngestionSetTime'] = $this->dataBatchIngestionSetTime;
        }

        if (null !== $this->dataBatchIngestionStatus) {
            $res['DataBatchIngestionStatus'] = $this->dataBatchIngestionStatus;
        }

        if (null !== $this->dataIngestions) {
            if (\is_array($this->dataIngestions)) {
                $res['DataIngestions'] = [];
                $n1 = 0;
                foreach ($this->dataIngestions as $item1) {
                    $res['DataIngestions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->logUserIds) {
            if (\is_array($this->logUserIds)) {
                $res['LogUserIds'] = [];
                $n1 = 0;
                foreach ($this->logUserIds as $item1) {
                    $res['LogUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recommendDataIngestionIds) {
            if (\is_array($this->recommendDataIngestionIds)) {
                $res['RecommendDataIngestionIds'] = [];
                $n1 = 0;
                foreach ($this->recommendDataIngestionIds as $item1) {
                    $res['RecommendDataIngestionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ApsaraDataIngestionIds'])) {
            if (!empty($map['ApsaraDataIngestionIds'])) {
                $model->apsaraDataIngestionIds = [];
                $n1 = 0;
                foreach ($map['ApsaraDataIngestionIds'] as $item1) {
                    $model->apsaraDataIngestionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AutoScanNew'])) {
            $model->autoScanNew = $map['AutoScanNew'];
        }

        if (isset($map['DataBatchIngestionEffectTime'])) {
            $model->dataBatchIngestionEffectTime = $map['DataBatchIngestionEffectTime'];
        }

        if (isset($map['DataBatchIngestionMode'])) {
            $model->dataBatchIngestionMode = $map['DataBatchIngestionMode'];
        }

        if (isset($map['DataBatchIngestionSetTime'])) {
            $model->dataBatchIngestionSetTime = $map['DataBatchIngestionSetTime'];
        }

        if (isset($map['DataBatchIngestionStatus'])) {
            $model->dataBatchIngestionStatus = $map['DataBatchIngestionStatus'];
        }

        if (isset($map['DataIngestions'])) {
            if (!empty($map['DataIngestions'])) {
                $model->dataIngestions = [];
                $n1 = 0;
                foreach ($map['DataIngestions'] as $item1) {
                    $model->dataIngestions[$n1] = dataIngestions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['LogUserIds'])) {
            if (!empty($map['LogUserIds'])) {
                $model->logUserIds = [];
                $n1 = 0;
                foreach ($map['LogUserIds'] as $item1) {
                    $model->logUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecommendDataIngestionIds'])) {
            if (!empty($map['RecommendDataIngestionIds'])) {
                $model->recommendDataIngestionIds = [];
                $n1 = 0;
                foreach ($map['RecommendDataIngestionIds'] as $item1) {
                    $model->recommendDataIngestionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
