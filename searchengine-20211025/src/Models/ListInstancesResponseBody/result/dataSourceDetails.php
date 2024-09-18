<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListInstancesResponseBody\result\dataSourceDetails\config;
use AlibabaCloud\Tea\Model;

class dataSourceDetails extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'config'    => 'config',
        'indexName' => 'indexName',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
