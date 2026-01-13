<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementJobResponseBody;

use AlibabaCloud\Dara\Model;

class recallManagerTableInfo extends Model
{
    /**
     * @var string
     */
    public $dataVersion;

    /**
     * @var string
     */
    public $recallManagerTableVersionId;

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
        'recallManagerTableVersionId' => 'RecallManagerTableVersionId',
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

        if (null !== $this->recallManagerTableVersionId) {
            $res['RecallManagerTableVersionId'] = $this->recallManagerTableVersionId;
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

        if (isset($map['RecallManagerTableVersionId'])) {
            $model->recallManagerTableVersionId = $map['RecallManagerTableVersionId'];
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
