<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RunDBCommandRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'spaceId' => 'SpaceId',
        'body'    => 'Body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
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
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        return $model;
    }
}
