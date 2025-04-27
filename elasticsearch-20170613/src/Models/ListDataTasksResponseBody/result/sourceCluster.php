<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataTasksResponseBody\result;

use AlibabaCloud\Dara\Model;

class sourceCluster extends Model
{
    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $mapping;

    /**
     * @var string
     */
    public $routing;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceType' => 'dataSourceType',
        'index' => 'index',
        'mapping' => 'mapping',
        'routing' => 'routing',
        'settings' => 'settings',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
