<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DeleteDBCollectionRequest extends Model
{
    /**
     * @example {"command": "drop", "collection": "table1"}
     *
     * @var string
     */
    public $body;

    /**
     * @example 92e26ea9-6450-4b40-9c20-xxxx
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'body'    => 'Body',
        'spaceId' => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDBCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
