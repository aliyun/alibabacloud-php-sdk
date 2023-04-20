<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RunDBCommandRequest extends Model
{
    /**
     * @example {"command":"findOne","collection":"test_collection","query":{"name":"tome"}}
     *
     * @var string
     */
    public $body;

    /**
     * @example ach41172-adba-4af1-b2e5-63fc5f56a649
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
     * @return RunDBCommandRequest
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
