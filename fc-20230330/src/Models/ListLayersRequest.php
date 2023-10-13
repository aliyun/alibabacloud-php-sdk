<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListLayersRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example true
     *
     * @var string
     */
    public $official;

    /**
     * @example my-layer
     *
     * @var string
     */
    public $prefix;

    /**
     * @example true
     *
     * @var string
     */
    public $public;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'official'  => 'official',
        'prefix'    => 'prefix',
        'public'    => 'public',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->official) {
            $res['official'] = $this->official;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['official'])) {
            $model->official = $map['official'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }

        return $model;
    }
}
