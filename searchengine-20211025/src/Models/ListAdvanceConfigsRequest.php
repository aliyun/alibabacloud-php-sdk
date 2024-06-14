<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListAdvanceConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var bool
     */
    public $newMode;

    /**
     * @description The type of the advanced configurations. Valid values: online and offline. - online The default value is offline.
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
