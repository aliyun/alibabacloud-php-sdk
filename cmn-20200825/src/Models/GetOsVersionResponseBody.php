<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsVersionResponseBody\osVersion;
use AlibabaCloud\Tea\Model;

class GetOsVersionResponseBody extends Model
{
    /**
     * @var osVersion[]
     */
    public $osVersion;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'osVersion' => 'OsVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osVersion) {
            $res['OsVersion'] = [];
            if (null !== $this->osVersion && \is_array($this->osVersion)) {
                $n = 0;
                foreach ($this->osVersion as $item) {
                    $res['OsVersion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOsVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsVersion'])) {
            if (!empty($map['OsVersion'])) {
                $model->osVersion = [];
                $n                = 0;
                foreach ($map['OsVersion'] as $item) {
                    $model->osVersion[$n++] = null !== $item ? osVersion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
