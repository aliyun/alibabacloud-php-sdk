<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeILMPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ilm-history-ilm-policy
     *
     * @var string
     */
    public $name;

    /**
     * @example {"cold":{"minAge":"30d","actions":{"allocate":{"numberOfReplicas":1,"require":{"boxType":"warm"}},"setPriority":{"priority":100}}},"hot":{"minAge":"0s","actions":{"rollover":{"maxAge":"30d","maxDocs":10000,"maxSize":"50gb"},"setPriority":{"priority":1000}}},"delete":{"minAge":"30d","actions":{"delete":{}}}}
     *
     * @var mixed[]
     */
    public $phases;
    protected $_name = [
        'name'   => 'name',
        'phases' => 'phases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phases) {
            $res['phases'] = $this->phases;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phases'])) {
            $model->phases = $map['phases'];
        }

        return $model;
    }
}
