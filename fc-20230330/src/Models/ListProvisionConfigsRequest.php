<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListProvisionConfigsRequest extends Model
{
    /**
     * @description The name of the function. If this parameter is not specified, the provisioned configurations of all functions are listed.
     *
     * @example my-func
     *
     * @var string
     */
    public $functionName;

    /**
     * @description Number of provisioned configurations to return.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description A pagination token.
     *
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'functionName' => 'functionName',
        'limit'        => 'limit',
        'nextToken'    => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProvisionConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
