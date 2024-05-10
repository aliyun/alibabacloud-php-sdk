<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetHistogramsRequest extends Model
{
    /**
     * @description The start time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @description The search statement. Only search statements are supported. Analytic statements are not supported. For more information about the syntax of search statements, see [Log search overview](https://help.aliyun.com/document_detail/43772.html).
     *
     * @example with_pack_meta
     *
     * @var string
     */
    public $query;

    /**
     * @description The end time of the subinterval. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1409569200
     *
     * @var int
     */
    public $to;

    /**
     * @description The topic of the logs.
     *
     * @example topic
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'from'  => 'from',
        'query' => 'query',
        'to'    => 'to',
        'topic' => 'topic',
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

        return $model;
    }
}
