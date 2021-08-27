<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskReplicaPairResponseBody extends Model
{
    /**
     * @var string
     */
    public $pairId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pairId'    => 'PairId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pairId) {
            $res['PairId'] = $this->pairId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskReplicaPairResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PairId'])) {
            $model->pairId = $map['PairId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
