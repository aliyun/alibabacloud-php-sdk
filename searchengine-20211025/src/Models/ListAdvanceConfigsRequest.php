<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListAdvanceConfigsRequest extends Model
{
    /**
     * @description The name of the data source.
     *
     * @example ha-cn-pl32rf0****_test_api
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The index name.
     *
     * @example test_api
     *
     * @var string
     */
    public $indexName;

    /**
     * @description Specifies whether the OpenSearch Vector Search Edition instance is of the new version.
     *
     * @example true
     *
     * @var bool
     */
    public $newMode;

    /**
     * @description The type of advanced configurations that you want to query. Valid values: - online -offline (default)
     *
     * @example online
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceName' => 'dataSourceName',
        'indexName'      => 'indexName',
        'newMode'        => 'newMode',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAdvanceConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
