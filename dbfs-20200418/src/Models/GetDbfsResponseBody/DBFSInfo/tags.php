<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example TestTagKey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example TestTagValue1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'id'       => 'Id',
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
