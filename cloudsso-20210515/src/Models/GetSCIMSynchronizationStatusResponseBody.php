<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetSCIMSynchronizationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SCIMSynchronizationStatus;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'SCIMSynchronizationStatus' => 'SCIMSynchronizationStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SCIMSynchronizationStatus) {
            $res['SCIMSynchronizationStatus'] = $this->SCIMSynchronizationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSCIMSynchronizationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SCIMSynchronizationStatus'])) {
            $model->SCIMSynchronizationStatus = $map['SCIMSynchronizationStatus'];
        }

        return $model;
    }
}
