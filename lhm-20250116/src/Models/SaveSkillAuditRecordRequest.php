<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class SaveSkillAuditRecordRequest extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $cid;

    /**
     * @var string
     */
    public $dryRunStatus;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $scriptTransformResult;

    /**
     * @var string
     */
    public $scriptTransformStatus;

    /**
     * @var string
     */
    public $sourceDialect;

    /**
     * @var string
     */
    public $sourceSqlScript;

    /**
     * @var string
     */
    public $targetDialect;
    protected $_name = [
        'batchId' => 'batchId',
        'cid' => 'cid',
        'dryRunStatus' => 'dryRunStatus',
        'extInfo' => 'extInfo',
        'recordType' => 'recordType',
        'scriptTransformResult' => 'scriptTransformResult',
        'scriptTransformStatus' => 'scriptTransformStatus',
        'sourceDialect' => 'sourceDialect',
        'sourceSqlScript' => 'sourceSqlScript',
        'targetDialect' => 'targetDialect',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }

        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }

        if (null !== $this->dryRunStatus) {
            $res['dryRunStatus'] = $this->dryRunStatus;
        }

        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }

        if (null !== $this->recordType) {
            $res['recordType'] = $this->recordType;
        }

        if (null !== $this->scriptTransformResult) {
            $res['scriptTransformResult'] = $this->scriptTransformResult;
        }

        if (null !== $this->scriptTransformStatus) {
            $res['scriptTransformStatus'] = $this->scriptTransformStatus;
        }

        if (null !== $this->sourceDialect) {
            $res['sourceDialect'] = $this->sourceDialect;
        }

        if (null !== $this->sourceSqlScript) {
            $res['sourceSqlScript'] = $this->sourceSqlScript;
        }

        if (null !== $this->targetDialect) {
            $res['targetDialect'] = $this->targetDialect;
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
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }

        if (isset($map['cid'])) {
            $model->cid = $map['cid'];
        }

        if (isset($map['dryRunStatus'])) {
            $model->dryRunStatus = $map['dryRunStatus'];
        }

        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }

        if (isset($map['recordType'])) {
            $model->recordType = $map['recordType'];
        }

        if (isset($map['scriptTransformResult'])) {
            $model->scriptTransformResult = $map['scriptTransformResult'];
        }

        if (isset($map['scriptTransformStatus'])) {
            $model->scriptTransformStatus = $map['scriptTransformStatus'];
        }

        if (isset($map['sourceDialect'])) {
            $model->sourceDialect = $map['sourceDialect'];
        }

        if (isset($map['sourceSqlScript'])) {
            $model->sourceSqlScript = $map['sourceSqlScript'];
        }

        if (isset($map['targetDialect'])) {
            $model->targetDialect = $map['targetDialect'];
        }

        return $model;
    }
}
