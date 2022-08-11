<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListLayersRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $official;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $startKey;
    protected $_name = [
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'official'  => 'official',
        'prefix'    => 'prefix',
        'public'    => 'public',
        'startKey'  => 'startKey',
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
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
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
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
