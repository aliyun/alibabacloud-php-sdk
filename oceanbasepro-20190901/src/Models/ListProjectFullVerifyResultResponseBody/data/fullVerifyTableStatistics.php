<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectFullVerifyResultResponseBody\data\fullVerifyTableStatistics\errorDetails;

class fullVerifyTableStatistics extends Model
{
    /**
     * @var int
     */
    public $consistentCount;

    /**
     * @var int
     */
    public $destOnlyCount;

    /**
     * @var string
     */
    public $destSchemaName;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $mismatchedCount;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $resultDesc;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var int
     */
    public $sourceOnlyCount;

    /**
     * @var string
     */
    public $sourceSchemaName;

    /**
     * @var string
     */
    public $sourceTableName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'consistentCount' => 'ConsistentCount',
        'destOnlyCount' => 'DestOnlyCount',
        'destSchemaName' => 'DestSchemaName',
        'errorDetails' => 'ErrorDetails',
        'message' => 'Message',
        'mismatchedCount' => 'MismatchedCount',
        'progress' => 'Progress',
        'resultDesc' => 'ResultDesc',
        'resultType' => 'ResultType',
        'sourceOnlyCount' => 'SourceOnlyCount',
        'sourceSchemaName' => 'SourceSchemaName',
        'sourceTableName' => 'SourceTableName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1] = errorDetails::fromMap($item1);
                    ++$n1;
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
