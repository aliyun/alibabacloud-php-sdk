<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster;
use AlibabaCloud\Tea\Model;

class GetSessionClusterResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sessionCluster
     */
    public $sessionCluster;
    protected $_name = [
        'requestId'      => 'requestId',
        'sessionCluster' => 'sessionCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->sessionCluster) {
            $res['sessionCluster'] = null !== $this->sessionCluster ? $this->sessionCluster->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSessionClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['sessionCluster'])) {
            $model->sessionCluster = sessionCluster::fromMap($map['sessionCluster']);
        }

        return $model;
    }
}
