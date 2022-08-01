<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetHistogramsRequest extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $to;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'from'  => 'from',
        'query' => 'query',
        'to'    => 'to',
        'topic' => 'topic',
        'type'  => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->topic) {
            $res['topic'] = $this->topic;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHistogramsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['topic'])) {
            $model->topic = $map['topic'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
