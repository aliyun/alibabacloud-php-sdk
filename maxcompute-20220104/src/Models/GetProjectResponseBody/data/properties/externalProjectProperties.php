<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\Tea\Model;

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
     * @description Indicates whether the external project is an external project for [data lakehouse solution 2.0](https://www.alibabacloud.com/help/zh/maxcompute/user-guide/lake-warehouse-integrated-2-0-use-guide).
     *
     * @example true
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return externalProjectProperties
     */
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
