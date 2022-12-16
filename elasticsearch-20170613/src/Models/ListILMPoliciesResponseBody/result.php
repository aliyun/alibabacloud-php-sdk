<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListILMPoliciesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example policy-1
     *
     * @var string
     */
    public $name;

    /**
     * @example {"hot":{"minAge":"0ms","actions":{"rollover":{"maxSize":"50gb","maxAge":"30d"},"setPriority":{"priority":100}}},"delete":{"minAge":"3d","actions":{"delete":{}}}}
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
