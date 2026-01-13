<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementTableVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class recallManagementTableVersions extends Model
{
    /**
     * @var string
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $publishEndTime;

    /**
     * @var string
     */
    public $publishStartTime;

    /**
     * @var string
     */
    public $recallManagementTableVersionId;

    /**
     * @var int
     */
    public $sourceTableDataSize;

    /**
     * @var int
     */
    public $sourceTableRowCount;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dataVersion' => 'DataVersion',
        'effectiveTime' => 'EffectiveTime',
        'publishEndTime' => 'PublishEndTime',
        'publishStartTime' => 'PublishStartTime',
        'recallManagementTableVersionId' => 'RecallManagementTableVersionId',
        'sourceTableDataSize' => 'SourceTableDataSize',
        'sourceTableRowCount' => 'SourceTableRowCount',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataVersion) {
            $res['DataVersion'] = $this->dataVersion;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->publishEndTime) {
            $res['PublishEndTime'] = $this->publishEndTime;
        }

        if (null !== $this->publishStartTime) {
            $res['PublishStartTime'] = $this->publishStartTime;
        }

        if (null !== $this->recallManagementTableVersionId) {
            $res['RecallManagementTableVersionId'] = $this->recallManagementTableVersionId;
        }

        if (null !== $this->sourceTableDataSize) {
            $res['SourceTableDataSize'] = $this->sourceTableDataSize;
        }

        if (null !== $this->sourceTableRowCount) {
            $res['SourceTableRowCount'] = $this->sourceTableRowCount;
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
        if (isset($map['DataVersion'])) {
            $model->dataVersion = $map['DataVersion'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['PublishEndTime'])) {
            $model->publishEndTime = $map['PublishEndTime'];
        }

        if (isset($map['PublishStartTime'])) {
            $model->publishStartTime = $map['PublishStartTime'];
        }

        if (isset($map['RecallManagementTableVersionId'])) {
            $model->recallManagementTableVersionId = $map['RecallManagementTableVersionId'];
        }

        if (isset($map['SourceTableDataSize'])) {
            $model->sourceTableDataSize = $map['SourceTableDataSize'];
        }

        if (isset($map['SourceTableRowCount'])) {
            $model->sourceTableRowCount = $map['SourceTableRowCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
