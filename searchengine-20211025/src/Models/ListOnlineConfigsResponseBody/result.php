<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $indexName;
    protected $_name = [
        'config' => 'config',
        'indexName' => 'indexName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }

        return $model;
    }
}
