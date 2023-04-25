<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\BridgeRtcCallResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $tokenInfo;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobId'      => 'JobId',
        'tokenInfo'  => 'TokenInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->tokenInfo) {
            $res['TokenInfo'] = $this->tokenInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['TokenInfo'])) {
            $model->tokenInfo = $map['TokenInfo'];
        }

        return $model;
    }
}
