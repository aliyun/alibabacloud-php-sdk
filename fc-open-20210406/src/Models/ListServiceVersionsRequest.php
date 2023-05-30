<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListServiceVersionsRequest extends Model
{
    /**
     * @description The name of the service.
     *
     * @example BACKWARD
     *
     * @var string
     */
    public $direction;

    /**
     * @description The token used to obtain more results. If the number of resources exceeds the limit, the nextToken parameter is returned. You can include the parameter in subsequent calls to obtain more results. You do not need to provide this parameter in the first call.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The description of the service version.
     *
     * @example 8bj81uI8n****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The time when the service version was created.
     *
     * @example nextservice
     *
     * @var string
     */
    public $startKey;
    protected $_name = [
        'direction' => 'direction',
        'limit'     => 'limit',
        'nextToken' => 'nextToken',
        'startKey'  => 'startKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        return $model;
    }
}
