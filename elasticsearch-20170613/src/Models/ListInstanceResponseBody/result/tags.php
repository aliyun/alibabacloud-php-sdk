<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The size of the node storage space. Unit: GB.
     *
     * @example env
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The storage type of the node. Only ultra disks (cloud_efficiency) are supported.
     *
     * @example dev
     *
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
