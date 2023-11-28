<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey'   => 'tagKey',
        'tagValue' => 'tagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }
        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
