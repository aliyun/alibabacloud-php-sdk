<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateLogstashDescriptionResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The name of the cluster.
     *
     * @example logstash_name
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'description' => 'description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        return $model;
    }
}
