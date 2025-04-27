<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class EstimatedRestartTimeRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'body' => 'body',
        'force' => 'force',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
