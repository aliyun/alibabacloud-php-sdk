<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;

class GetAppNetworkResponseBody extends Model
{
    /**
     * @var appNetwork
     */
    public $appNetwork;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appNetwork' => 'AppNetwork',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appNetwork) {
            $this->appNetwork->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appNetwork) {
            $res['AppNetwork'] = null !== $this->appNetwork ? $this->appNetwork->toArray($noStream) : $this->appNetwork;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppNetwork'])) {
            $model->appNetwork = appNetwork::fromMap($map['AppNetwork']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
