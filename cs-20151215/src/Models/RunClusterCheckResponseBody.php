<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RunClusterCheckResponseBody extends Model
{
    /**
     * @description The ID of the cluster check task.
     *
     * @example 1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto
     *
     * @var string
     */
    public $checkId;

    /**
     * @description Id of the request
     *
     * @example F04DF81D-5C12-1524-B36A-86E02526****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkId'   => 'check_id',
        'requestId' => 'request_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['check_id'] = $this->checkId;
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterCheckResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_id'])) {
            $model->checkId = $map['check_id'];
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        return $model;
    }
}
