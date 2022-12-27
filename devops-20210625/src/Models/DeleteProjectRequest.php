<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class DeleteProjectRequest extends Model
{
    /**
     * @example 7fb72727f32143574f7a...
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'identifier' => 'identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        return $model;
    }
}
