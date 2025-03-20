<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIJobRequest\sourceDataSourceSettings\dataSourceProperties;
use AlibabaCloud\Tea\Model;

class sourceDataSourceSettings extends Model
{
    /**
     * @description The name of the data source.
     *
     * @example mysql_datasource_1
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The properties of the data source.
     *
     * @var dataSourceProperties
     */
    public $dataSourceProperties;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
        'dataSourceProperties' => 'DataSourceProperties',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceProperties) {
            $res['DataSourceProperties'] = null !== $this->dataSourceProperties ? $this->dataSourceProperties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceDataSourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceProperties'])) {
            $model->dataSourceProperties = dataSourceProperties::fromMap($map['DataSourceProperties']);
        }

        return $model;
    }
}
