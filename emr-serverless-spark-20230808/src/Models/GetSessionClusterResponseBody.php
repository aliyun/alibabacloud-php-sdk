<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster;

class GetSessionClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sessionCluster
     */
    public $sessionCluster;
    protected $_name = [
        'requestId' => 'requestId',
        'sessionCluster' => 'sessionCluster',
    ];

    public function validate()
    {
        if (null !== $this->sessionCluster) {
            $this->sessionCluster->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionCluster) {
            $res['sessionCluster'] = null !== $this->sessionCluster ? $this->sessionCluster->toArray($noStream) : $this->sessionCluster;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
