<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListAllNodeRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var bool
     */
    public $extended;
    protected $_name = [
        'body'     => 'body',
        'extended' => 'extended',
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
        if (null !== $this->extended) {
            $res['extended'] = $this->extended;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['extended'])) {
            $model->extended = $map['extended'];
        }

        return $model;
    }
}
