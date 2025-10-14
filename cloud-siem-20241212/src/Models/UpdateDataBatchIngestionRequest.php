<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataBatchIngestionRequest extends Model
{
    /**
     * @var string
     */
    public $autoScanNew;

    /**
     * @var string
     */
    public $dataBatchIngestionMode;

    /**
     * @var string[]
     */
    public $dataIngestionIds;

    /**
     * @var bool
     */
    public $dataSourceRecognizeEnabled;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int[]
     */
    public $logUserIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'autoScanNew' => 'AutoScanNew',
        'dataBatchIngestionMode' => 'DataBatchIngestionMode',
        'dataIngestionIds' => 'DataIngestionIds',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'lang' => 'Lang',
        'logUserIds' => 'LogUserIds',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        if (\is_array($this->dataIngestionIds)) {
            Model::validateArray($this->dataIngestionIds);
        }
        if (\is_array($this->logUserIds)) {
            Model::validateArray($this->logUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScanNew) {
            $res['AutoScanNew'] = $this->autoScanNew;
        }

        if (null !== $this->dataBatchIngestionMode) {
            $res['DataBatchIngestionMode'] = $this->dataBatchIngestionMode;
        }

        if (null !== $this->dataIngestionIds) {
            if (\is_array($this->dataIngestionIds)) {
                $res['DataIngestionIds'] = [];
                $n1 = 0;
                foreach ($this->dataIngestionIds as $item1) {
                    $res['DataIngestionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['AutoScanNew'])) {
            $model->autoScanNew = $map['AutoScanNew'];
        }

        if (isset($map['DataBatchIngestionMode'])) {
            $model->dataBatchIngestionMode = $map['DataBatchIngestionMode'];
        }

        if (isset($map['DataIngestionIds'])) {
            if (!empty($map['DataIngestionIds'])) {
                $model->dataIngestionIds = [];
                $n1 = 0;
                foreach ($map['DataIngestionIds'] as $item1) {
                    $model->dataIngestionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
