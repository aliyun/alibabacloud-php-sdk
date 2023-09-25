<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest;

use AlibabaCloud\Tea\Model;

class sourceDataSourceSettings extends Model
{
    /**
     * @example mysql_datasource_1
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string[]
     */
    public $dataSourceProperties;
    protected $_name = [
        'dataSourceName'       => 'DataSourceName',
        'dataSourceProperties' => 'DataSourceProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceProperties) {
            $res['DataSourceProperties'] = $this->dataSourceProperties;
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
            $model->dataSourceProperties = $map['DataSourceProperties'];
        }

        return $model;
    }
}
