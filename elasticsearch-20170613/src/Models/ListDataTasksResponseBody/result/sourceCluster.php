<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sourceCluster extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example product_info
     *
     * @var string
     */
    public $index;

    /**
     * @example {\"_doc\":{\"properties\":{\"user\":{\"properties\":{\"last\":{\"type\":\"text\",...}}}}}}
     *
     * @var string
     */
    public $mapping;

    /**
     * @example _id
     *
     * @var string
     */
    public $routing;

    /**
     * @example {\n  \"index\": {\n    \"replication\": {\n}.....}}
     *
     * @var string
     */
    public $settings;

    /**
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
