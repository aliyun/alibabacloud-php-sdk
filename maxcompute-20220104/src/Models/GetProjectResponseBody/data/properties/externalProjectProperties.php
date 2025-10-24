<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\Dara\Model;

class externalProjectProperties extends Model
{
    /**
     * @var string
     */
    public $externalCatalogId;

    /**
     * @var string
     */
    public $foreignServerName;

    /**
     * @var string
     */
    public $foreignServerType;

    /**
     * @var string
     */
    public $isExternalCatalogBound;

    /**
     * @var string
     */
    public $tableFormat;

    /**
     * @var string
     */
    public $warehouse;
    protected $_name = [
        'externalCatalogId' => 'externalCatalogId',
        'foreignServerName' => 'foreignServerName',
        'foreignServerType' => 'foreignServerType',
        'isExternalCatalogBound' => 'isExternalCatalogBound',
        'tableFormat' => 'tableFormat',
        'warehouse' => 'warehouse',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalCatalogId) {
            $res['externalCatalogId'] = $this->externalCatalogId;
        }

        if (null !== $this->foreignServerName) {
            $res['foreignServerName'] = $this->foreignServerName;
        }

        if (null !== $this->foreignServerType) {
            $res['foreignServerType'] = $this->foreignServerType;
        }

        if (null !== $this->isExternalCatalogBound) {
            $res['isExternalCatalogBound'] = $this->isExternalCatalogBound;
        }

        if (null !== $this->tableFormat) {
            $res['tableFormat'] = $this->tableFormat;
        }

        if (null !== $this->warehouse) {
            $res['warehouse'] = $this->warehouse;
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
        if (isset($map['externalCatalogId'])) {
            $model->externalCatalogId = $map['externalCatalogId'];
        }

        if (isset($map['foreignServerName'])) {
            $model->foreignServerName = $map['foreignServerName'];
        }

        if (isset($map['foreignServerType'])) {
            $model->foreignServerType = $map['foreignServerType'];
        }

        if (isset($map['isExternalCatalogBound'])) {
            $model->isExternalCatalogBound = $map['isExternalCatalogBound'];
        }

        if (isset($map['tableFormat'])) {
            $model->tableFormat = $map['tableFormat'];
        }

        if (isset($map['warehouse'])) {
            $model->warehouse = $map['warehouse'];
        }

        return $model;
    }
}
