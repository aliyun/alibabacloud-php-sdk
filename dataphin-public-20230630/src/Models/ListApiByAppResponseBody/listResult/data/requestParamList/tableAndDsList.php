<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListApiByAppResponseBody\listResult\data\requestParamList;

use AlibabaCloud\Tea\Model;

class tableAndDsList extends Model
{
    /**
     * @example ds12345
     *
     * @var string
     */
    public $datasourceId;

    /**
     * @example exampleDatasource
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasourceType;

    /**
     * @example https://example.com/datasource
     *
     * @var string
     */
    public $datasourceUrl;

    /**
     * @example example_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'datasourceId' => 'DatasourceId',
        'datasourceName' => 'DatasourceName',
        'datasourceType' => 'DatasourceType',
        'datasourceUrl' => 'DatasourceUrl',
        'tableName' => 'TableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->datasourceUrl) {
            $res['DatasourceUrl'] = $this->datasourceUrl;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableAndDsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['DatasourceUrl'])) {
            $model->datasourceUrl = $map['DatasourceUrl'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
