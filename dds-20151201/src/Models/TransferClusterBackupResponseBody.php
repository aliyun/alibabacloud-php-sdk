<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class TransferClusterBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $alreadyDone;

    /**
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
