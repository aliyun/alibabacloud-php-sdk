<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class DeleteWorkitemCommentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12xx34
     *
     * @var int
     */
    public $commentId;

    /**
     * @description This parameter is required.
     *
     * @example e8b2xxxxxx2abdxxxxxxxx23
     *
     * @var string
     */
    public $identifier;
    protected $_name = [
        'commentId'  => 'commentId',
        'identifier' => 'identifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentId) {
            $res['commentId'] = $this->commentId;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWorkitemCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commentId'])) {
            $model->commentId = $map['commentId'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        return $model;
    }
}
