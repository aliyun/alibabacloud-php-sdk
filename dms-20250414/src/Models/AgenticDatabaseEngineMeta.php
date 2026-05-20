<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticDatabaseEngineMeta extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $encoding;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var int
     */
    public $storageCapacity;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'encoding' => 'Encoding',
        'schemaName' => 'SchemaName',
        'storageCapacity' => 'StorageCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }

        if (null !== $this->encoding) {
            $res['Encoding'] = $this->encoding;
        }

        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }

        if (null !== $this->storageCapacity) {
            $res['StorageCapacity'] = $this->storageCapacity;
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
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }

        if (isset($map['Encoding'])) {
            $model->encoding = $map['Encoding'];
        }

        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }

        if (isset($map['StorageCapacity'])) {
            $model->storageCapacity = $map['StorageCapacity'];
        }

        return $model;
    }
}
