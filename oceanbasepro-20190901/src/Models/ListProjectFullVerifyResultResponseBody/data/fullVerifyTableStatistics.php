<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data\fullVerifyTableStatistics\errorDetails;
use AlibabaCloud\Tea\Model;

class fullVerifyTableStatistics extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $consistentCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $destOnlyCount;

    /**
     * @example dest_db
     *
     * @var string
     */
    public $destSchemaName;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example null
     *
     * @var string
     */
    public $message;

    /**
     * @example 0
     *
     * @var int
     */
    public $mismatchedCount;

    /**
     * @example 80
     *
     * @var string
     */
    public $progress;

    /**
     * @example desc
     *
     * @var string
     */
    public $resultDesc;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $resultType;

    /**
     * @example 0
     *
     * @var int
     */
    public $sourceOnlyCount;

    /**
     * @example source_db
     *
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @example source_table
     *
     * @var string
     */
    public $sourceTableName;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'consistentCount'  => 'ConsistentCount',
        'destOnlyCount'    => 'DestOnlyCount',
        'destSchemaName'   => 'DestSchemaName',
        'errorDetails'     => 'ErrorDetails',
        'message'          => 'Message',
        'mismatchedCount'  => 'MismatchedCount',
        'progress'         => 'Progress',
        'resultDesc'       => 'ResultDesc',
        'resultType'       => 'ResultType',
        'sourceOnlyCount'  => 'SourceOnlyCount',
        'sourceSchemaName' => 'SourceSchemaName',
        'sourceTableName'  => 'SourceTableName',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistentCount) {
            $res['ConsistentCount'] = $this->consistentCount;
        }
        if (null !== $this->destOnlyCount) {
            $res['DestOnlyCount'] = $this->destOnlyCount;
        }
        if (null !== $this->destSchemaName) {
            $res['DestSchemaName'] = $this->destSchemaName;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mismatchedCount) {
            $res['MismatchedCount'] = $this->mismatchedCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->resultDesc) {
            $res['ResultDesc'] = $this->resultDesc;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->sourceOnlyCount) {
            $res['SourceOnlyCount'] = $this->sourceOnlyCount;
        }
        if (null !== $this->sourceSchemaName) {
            $res['SourceSchemaName'] = $this->sourceSchemaName;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullVerifyTableStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsistentCount'])) {
            $model->consistentCount = $map['ConsistentCount'];
        }
        if (isset($map['DestOnlyCount'])) {
            $model->destOnlyCount = $map['DestOnlyCount'];
        }
        if (isset($map['DestSchemaName'])) {
            $model->destSchemaName = $map['DestSchemaName'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MismatchedCount'])) {
            $model->mismatchedCount = $map['MismatchedCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ResultDesc'])) {
            $model->resultDesc = $map['ResultDesc'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['SourceOnlyCount'])) {
            $model->sourceOnlyCount = $map['SourceOnlyCount'];
        }
        if (isset($map['SourceSchemaName'])) {
            $model->sourceSchemaName = $map['SourceSchemaName'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
