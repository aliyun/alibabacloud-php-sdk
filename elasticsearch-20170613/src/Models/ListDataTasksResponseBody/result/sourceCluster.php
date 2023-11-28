<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sourceCluster extends Model
{
    /**
     * @description The type of the source cluster. Default value: elasticsearch.
     *
     * @example 1
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The index whose data you want to migrate.
     *
     * @example product_info
     *
     * @var string
     */
    public $index;

    /**
     * @description The Mapping configuration of the cluster.
     *
     * @example {\"_doc\":{\"properties\":{\"user\":{\"properties\":{\"last\":{\"type\":\"text\",...}}}}}}
     *
     * @var string
     */
    public $mapping;

    /**
     * @description The routing field to index the table. It is set to the primary key by default.
     *
     * @example _id
     *
     * @var string
     */
    public $routing;

    /**
     * @description The Settings of the cluster.
     *
     * @example {\n  \"index\": {\n    \"replication\": {\n}.....}}
     *
     * @var string
     */
    public $settings;

    /**
     * @description The type of the destination index.
     *
     * @example _doc
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceType' => 'dataSourceType',
        'index'          => 'index',
        'mapping'        => 'mapping',
        'routing'        => 'routing',
        'settings'       => 'settings',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }
        if (null !== $this->routing) {
            $res['routing'] = $this->routing;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['mapping'])) {
            $model->mapping = $map['mapping'];
        }
        if (isset($map['routing'])) {
            $model->routing = $map['routing'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
