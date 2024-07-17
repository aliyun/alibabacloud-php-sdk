<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetDatabaseProfileRequest extends Model
{
    /**
     * @description CatalogId
     *
     * @example 可不填
     *
     * @var string
     */
    public $catalogId;

    /**
     * @description DatabaseName
     *
     * This parameter is required.
     * @example 530_db
     *
     * @var string
     */
    public $databaseName;
    protected $_name = [
        'catalogId'    => 'CatalogId',
        'databaseName' => 'DatabaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        return $model;
    }
}
