<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;
use AlibabaCloud\Tea\Model;

class GetHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var host
     */
    public $host;
    protected $_name = [
        'requestId' => 'RequestId',
        'host'      => 'Host',
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
        if (null !== $this->host) {
            $res['Host'] = null !== $this->host ? $this->host->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Host'])) {
            $model->host = host::fromMap($map['Host']);
        }

        return $model;
    }
}
