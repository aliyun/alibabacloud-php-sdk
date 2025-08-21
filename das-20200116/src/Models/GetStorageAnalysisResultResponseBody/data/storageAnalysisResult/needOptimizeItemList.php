<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetStorageAnalysisResultResponseBody\data\storageAnalysisResult;

use AlibabaCloud\Dara\Model;

class needOptimizeItemList extends Model
{
    /**
     * @var string
     */
    public $associatedData;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $optimizeAdvice;

    /**
     * @var string
     */
    public $optimizeItemName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'associatedData' => 'AssociatedData',
        'dbName' => 'DbName',
        'optimizeAdvice' => 'OptimizeAdvice',
        'optimizeItemName' => 'OptimizeItemName',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedData) {
            $res['AssociatedData'] = $this->associatedData;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->optimizeAdvice) {
            $res['OptimizeAdvice'] = $this->optimizeAdvice;
        }

        if (null !== $this->optimizeItemName) {
            $res['OptimizeItemName'] = $this->optimizeItemName;
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
        if (isset($map['AssociatedData'])) {
            $model->associatedData = $map['AssociatedData'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['OptimizeAdvice'])) {
            $model->optimizeAdvice = $map['OptimizeAdvice'];
        }

        if (isset($map['OptimizeItemName'])) {
            $model->optimizeItemName = $map['OptimizeItemName'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
