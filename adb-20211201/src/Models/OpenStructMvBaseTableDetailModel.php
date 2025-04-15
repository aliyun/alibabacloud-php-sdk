<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class OpenStructMvBaseTableDetailModel extends Model
{
    /**
     * @var string
     */
    public $dataVolumn;

    /**
     * @var bool
     */
    public $enableBinlog;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'dataVolumn' => 'DataVolumn',
        'enableBinlog' => 'EnableBinlog',
        'schemaName' => 'SchemaName',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataVolumn) {
            $res['DataVolumn'] = $this->dataVolumn;
        }

        if (null !== $this->enableBinlog) {
            $res['EnableBinlog'] = $this->enableBinlog;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['DataVolumn'])) {
            $model->dataVolumn = $map['DataVolumn'];
        }

        if (isset($map['EnableBinlog'])) {
            $model->enableBinlog = $map['EnableBinlog'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
