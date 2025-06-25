<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;

class GetHostResponseBody extends Model
{
    /**
     * @var host
     */
    public $host;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'host' => 'Host',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->host) {
            $this->host->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = null !== $this->host ? $this->host->toArray($noStream) : $this->host;
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
        if (isset($map['Host'])) {
            $model->host = host::fromMap($map['Host']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
