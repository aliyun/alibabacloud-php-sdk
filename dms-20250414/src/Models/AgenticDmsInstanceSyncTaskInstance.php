<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\AgenticDmsInstanceSyncTaskInstance\dmsInstanceSummary;

class AgenticDmsInstanceSyncTaskInstance extends Model
{
    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $crawlerTaskId;

    /**
     * @var string
     */
    public $datasourceUuid;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $dmsInstanceId;

    /**
     * @var dmsInstanceSummary
     */
    public $dmsInstanceSummary;

    /**
     * @var string
     */
    public $dmsRegionId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorSummary;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'crawlerTaskId' => 'CrawlerTaskId',
        'datasourceUuid' => 'DatasourceUuid',
        'dbType' => 'DbType',
        'dmsInstanceId' => 'DmsInstanceId',
        'dmsInstanceSummary' => 'DmsInstanceSummary',
        'dmsRegionId' => 'DmsRegionId',
        'errorCode' => 'ErrorCode',
        'errorSummary' => 'ErrorSummary',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'phase' => 'Phase',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->dmsInstanceSummary) {
            $this->dmsInstanceSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->crawlerTaskId) {
            $res['CrawlerTaskId'] = $this->crawlerTaskId;
        }

        if (null !== $this->datasourceUuid) {
            $res['DatasourceUuid'] = $this->datasourceUuid;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->dmsInstanceId) {
            $res['DmsInstanceId'] = $this->dmsInstanceId;
        }

        if (null !== $this->dmsInstanceSummary) {
            $res['DmsInstanceSummary'] = null !== $this->dmsInstanceSummary ? $this->dmsInstanceSummary->toArray($noStream) : $this->dmsInstanceSummary;
        }

        if (null !== $this->dmsRegionId) {
            $res['DmsRegionId'] = $this->dmsRegionId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorSummary) {
            $res['ErrorSummary'] = $this->errorSummary;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
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
        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['CrawlerTaskId'])) {
            $model->crawlerTaskId = $map['CrawlerTaskId'];
        }

        if (isset($map['DatasourceUuid'])) {
            $model->datasourceUuid = $map['DatasourceUuid'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['DmsInstanceId'])) {
            $model->dmsInstanceId = $map['DmsInstanceId'];
        }

        if (isset($map['DmsInstanceSummary'])) {
            $model->dmsInstanceSummary = dmsInstanceSummary::fromMap($map['DmsInstanceSummary']);
        }

        if (isset($map['DmsRegionId'])) {
            $model->dmsRegionId = $map['DmsRegionId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorSummary'])) {
            $model->errorSummary = $map['ErrorSummary'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
