<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterResponseBody extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example cluster-729dm40FG****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The request ID.
     *
     * @example 5F58413E-8F57-585B-BE48-64CC1E31133C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
