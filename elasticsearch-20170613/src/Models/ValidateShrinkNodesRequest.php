<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ValidateShrinkNodesRequest\body;
use AlibabaCloud\Tea\Model;

class ValidateShrinkNodesRequest extends Model
{
    /**
     * @var body[]
     */
    public $body;

    /**
     * @var int
     */
    public $count;

    /**
     * @example false
     *
     * @var bool
     */
    public $ignoreStatus;

    /**
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'body'         => 'body',
        'count'        => 'count',
        'ignoreStatus' => 'ignoreStatus',
        'nodeType'     => 'nodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->ignoreStatus) {
            $res['ignoreStatus'] = $this->ignoreStatus;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateShrinkNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n           = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['ignoreStatus'])) {
            $model->ignoreStatus = $map['ignoreStatus'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        return $model;
    }
}
