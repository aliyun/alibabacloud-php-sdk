<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetCatalogRequest extends Model
{
    /**
     * @description Data catalog entity ID. Currently, only DLF and StarRocks types are supported. You can refer to the response of the ListCatalogs operation and [the description of metadata entity concepts.](https://help.aliyun.com/document_detail/2880092.html)
     *
     *   For the DLF type, the format is `dlf-catalog::catalog_id`.
     *   For the StarRocks type, the format is `starrocks-catalog:(instance_id|encoded_jdbc_url):catalog_name`.
     *
     * >  Parameter descriptions:\\
     * `catalog_id`: The DLF catalog ID.\\
     * `instance_id`: The instance ID, required for the data source registered in instance mode.\\
     * `encoded_jdbc_url`: The JDBC connection string that has been URL encoded, required for the data source registered via a connection string.\\
     * `catalog_name`: The name of the StarRocks catalog.
     *
     * This parameter is required.
     *
     * @example dlf-catalog:123456XXX:test_catalog
     * starrocks-catalog:c-abc123xxx:default_catalog
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCatalogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
