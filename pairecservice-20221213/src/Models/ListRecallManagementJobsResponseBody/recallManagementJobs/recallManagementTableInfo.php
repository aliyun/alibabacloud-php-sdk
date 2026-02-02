<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsResponseBody\recallManagementJobs;

use AlibabaCloud\Dara\Model;

class recallManagementTableInfo extends Model
{
    /**
     * @var string
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $recallManagementTableVersionId;

    /**
     * @var string
     */
    public $sourceTableDataSize;

    /**
     * @var string
     */
    public $sourceTableRowCount;
    protected $_name = [
        'dataVersion' => 'DataVersion',
        'recallManagementTableVersionId' => 'RecallManagementTableVersionId',
        'sourceTableDataSize' => 'SourceTableDataSize',
        'sourceTableRowCount' => 'SourceTableRowCount',
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

        if (null !== $this->recallManagementTableVersionId) {
            $res['RecallManagementTableVersionId'] = $this->recallManagementTableVersionId;
        }

        if (null !== $this->sourceTableDataSize) {
            $res['SourceTableDataSize'] = $this->sourceTableDataSize;
        }

        if (null !== $this->sourceTableRowCount) {
            $res['SourceTableRowCount'] = $this->sourceTableRowCount;
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

        if (isset($map['RecallManagementTableVersionId'])) {
            $model->recallManagementTableVersionId = $map['RecallManagementTableVersionId'];
        }

        if (isset($map['SourceTableDataSize'])) {
            $model->sourceTableDataSize = $map['SourceTableDataSize'];
        }

        if (isset($map['SourceTableRowCount'])) {
            $model->sourceTableRowCount = $map['SourceTableRowCount'];
        }

        return $model;
    }
}
