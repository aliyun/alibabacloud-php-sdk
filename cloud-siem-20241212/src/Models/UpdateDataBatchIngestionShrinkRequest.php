<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataBatchIngestionShrinkRequest extends Model
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
     * @var string
     */
    public $dataIngestionIdsShrink;

    /**
     * @var bool
     */
    public $dataSourceRecognizeEnabled;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logUserIdsShrink;

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
        'dataIngestionIdsShrink' => 'DataIngestionIds',
        'dataSourceRecognizeEnabled' => 'DataSourceRecognizeEnabled',
        'lang' => 'Lang',
        'logUserIdsShrink' => 'LogUserIds',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
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

        if (null !== $this->dataIngestionIdsShrink) {
            $res['DataIngestionIds'] = $this->dataIngestionIdsShrink;
        }

        if (null !== $this->dataSourceRecognizeEnabled) {
            $res['DataSourceRecognizeEnabled'] = $this->dataSourceRecognizeEnabled;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logUserIdsShrink) {
            $res['LogUserIds'] = $this->logUserIdsShrink;
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
            $model->dataIngestionIdsShrink = $map['DataIngestionIds'];
        }

        if (isset($map['DataSourceRecognizeEnabled'])) {
            $model->dataSourceRecognizeEnabled = $map['DataSourceRecognizeEnabled'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogUserIds'])) {
            $model->logUserIdsShrink = $map['LogUserIds'];
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
