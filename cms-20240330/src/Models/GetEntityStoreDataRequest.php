<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class GetEntityStoreDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1721767203
     *
     * @var int
     */
    public $from;

    /**
     * @description This parameter is required.
     *
     * @example .entity with(domain=\\"acs\\", type=\\"acs.k8s.node\\") | limit 0, 10
     *
     * @var string
     */
    public $query;

    /**
     * @description This parameter is required.
     *
     * @example 1721767283
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'from' => 'from',
        'query' => 'query',
        'to' => 'to',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEntityStoreDataRequest
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

        return $model;
    }
}
