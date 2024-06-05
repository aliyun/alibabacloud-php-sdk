<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BatchResponseBody;

use AlibabaCloud\Tea\Model;

class responses extends Model
{
    /**
     * @description The response parameters of a child request. For more information, see the topic of the corresponding child request.
     *
     * @var mixed[]
     */
    public $body;

    /**
     * @description The ID of the child request. The ID is used to associate a child request with a response.
     *
     * @example 93433894994ad2e1
     *
     * @var string
     */
    public $id;

    /**
     * @description The returned HTTP status code of a child request. For more information, see the topic of the corresponding child request.
     *
     * @example 200
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'body'   => 'body',
        'id'     => 'id',
        'status' => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
