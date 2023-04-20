<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class RegisterFileRequest extends Model
{
    /**
     * @example 2fada31e-8fa5-****-b595-9698cd6b5f06
     *
     * @var string
     */
    public $id;

    /**
     * @example 0e16bb12-****-4635-b24c-5ac1a9a7bb9f
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'id'      => 'Id',
        'spaceId' => 'SpaceId',
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
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
