<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListShardRecoveriesRequest extends Model
{
    /**
     * @var bool
     */
    public $activeOnly;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'activeOnly' => 'activeOnly',
        'body'       => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeOnly) {
            $res['activeOnly'] = $this->activeOnly;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShardRecoveriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeOnly'])) {
            $model->activeOnly = $map['activeOnly'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
