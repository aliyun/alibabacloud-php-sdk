<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAppNetworkResponseBody\appNetwork;
use AlibabaCloud\Tea\Model;

class GetAppNetworkResponseBody extends Model
{
    /**
     * @var appNetwork
     */
    public $appNetwork;

    /**
     * @example 7D46EDB0-xxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appNetwork' => 'AppNetwork',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appNetwork) {
            $res['AppNetwork'] = null !== $this->appNetwork ? $this->appNetwork->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppNetworkResponseBody
     */
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
