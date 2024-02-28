<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;
use AlibabaCloud\Tea\Model;

class GetHostResponseBody extends Model
{
    /**
     * @description The information about the host that was queried.
     *
     * @var host
     */
    public $host;

    /**
     * @description The request ID.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'host'      => 'Host',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = null !== $this->host ? $this->host->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Host'])) {
            $model->host = host::fromMap($map['Host']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
