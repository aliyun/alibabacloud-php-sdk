<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class HotUpdateJobStatus extends Model
{
    /**
     * @var HotUpdateJobFailureInfo
     */
    public $failure;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'failure'   => 'failure',
        'requestId' => 'requestId',
        'status'    => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HotUpdateJobStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failure'])) {
            $model->failure = HotUpdateJobFailureInfo::fromMap($map['failure']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
