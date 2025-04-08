<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class StopSessionClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionClusterId;
    protected $_name = [
        'requestId' => 'requestId',
        'sessionClusterId' => 'sessionClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
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

        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }

        return $model;
    }
}
