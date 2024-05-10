<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateDashboardRequest extends Model
{
    /**
     * @description The data structure of the dashboard.
     *
     * This parameter is required.
     * @var Dashboard
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = Dashboard::fromMap($map['body']);
        }

        return $model;
    }
}
