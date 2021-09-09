<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result;

use AlibabaCloud\Tea\Model;

class sourceCluster extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var string
     */
    public $mapping;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $routing;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'index'          => 'index',
        'settings'       => 'settings',
        'mapping'        => 'mapping',
        'type'           => 'type',
        'routing'        => 'routing',
        'dataSourceType' => 'dataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->mapping) {
            $res['mapping'] = $this->mapping;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->routing) {
            $res['routing'] = $this->routing;
        }
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['mapping'])) {
            $model->mapping = $map['mapping'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['routing'])) {
            $model->routing = $map['routing'];
        }
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }

        return $model;
    }
}
