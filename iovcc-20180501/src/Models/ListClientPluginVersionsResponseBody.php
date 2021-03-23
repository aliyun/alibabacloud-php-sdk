<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginVersionsResponseBody\clientPluginVersions;
use AlibabaCloud\Tea\Model;

class ListClientPluginVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientPluginVersions[]
     */
    public $clientPluginVersions;
    protected $_name = [
        'requestId'            => 'RequestId',
        'clientPluginVersions' => 'ClientPluginVersions',
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
        if (null !== $this->clientPluginVersions) {
            $res['ClientPluginVersions'] = [];
            if (null !== $this->clientPluginVersions && \is_array($this->clientPluginVersions)) {
                $n = 0;
                foreach ($this->clientPluginVersions as $item) {
                    $res['ClientPluginVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientPluginVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientPluginVersions'])) {
            if (!empty($map['ClientPluginVersions'])) {
                $model->clientPluginVersions = [];
                $n                           = 0;
                foreach ($map['ClientPluginVersions'] as $item) {
                    $model->clientPluginVersions[$n++] = null !== $item ? clientPluginVersions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
