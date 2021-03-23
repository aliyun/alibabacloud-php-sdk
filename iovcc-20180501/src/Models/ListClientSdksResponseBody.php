<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientSdksResponseBody\clientSdks;
use AlibabaCloud\Tea\Model;

class ListClientSdksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientSdks[]
     */
    public $clientSdks;
    protected $_name = [
        'requestId'  => 'RequestId',
        'clientSdks' => 'ClientSdks',
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
        if (null !== $this->clientSdks) {
            $res['ClientSdks'] = [];
            if (null !== $this->clientSdks && \is_array($this->clientSdks)) {
                $n = 0;
                foreach ($this->clientSdks as $item) {
                    $res['ClientSdks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientSdksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientSdks'])) {
            if (!empty($map['ClientSdks'])) {
                $model->clientSdks = [];
                $n                 = 0;
                foreach ($map['ClientSdks'] as $item) {
                    $model->clientSdks[$n++] = null !== $item ? clientSdks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
