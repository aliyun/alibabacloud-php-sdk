<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class destinationDataSourceSettings extends Model
{
    /**
     * @description The name of the data source.
     *
     * @example dw_mysql
     *
     * @var string
     */
    public $dataSourceName;
    protected $_name = [
        'dataSourceName' => 'DataSourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationDataSourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }

        return $model;
    }
}
