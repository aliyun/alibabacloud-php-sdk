<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListOnlineConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {\"specItems\":[{\"specKey\":\"YQ_KEYWORD_NUMBER_PLUS\",\"value\":\"1\"}]}
     *
     * @var string
     */
    public $config;

    /**
     * @example generation
     *
     * @var string
     */
    public $indexName;
    protected $_name = [
        'config'    => 'config',
        'indexName' => 'indexName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
