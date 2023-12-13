<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class TransferClusterBackupResponseBody extends Model
{
    /**
     * @description Indicates whether the instance is switched to the cluster backup mode. If the value of this parameter is **1**, the instance is switched to the cluster backup mode.
     *
     * @example 1
     *
     * @var string
     */
    public $alreadyDone;

    /**
     * @description The request ID.
     *
     * @example 3C4A2494-85C4-45C5-93CF-548DB3375193
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alreadyDone' => 'AlreadyDone',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyDone) {
            $res['AlreadyDone'] = $this->alreadyDone;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferClusterBackupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlreadyDone'])) {
            $model->alreadyDone = $map['AlreadyDone'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
