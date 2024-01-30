<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class DeleteEntityResponseBody extends Model
{
    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostId'    => 'HostId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEntityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
