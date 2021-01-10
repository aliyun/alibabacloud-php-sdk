<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListClientPluginsResponseBody\clientPlugins;
use AlibabaCloud\Tea\Model;

class ListClientPluginsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clientPlugins[]
     */
    public $clientPlugins;
    protected $_name = [
        'requestId'     => 'RequestId',
        'clientPlugins' => 'ClientPlugins',
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
        if (null !== $this->clientPlugins) {
            $res['ClientPlugins'] = [];
            if (null !== $this->clientPlugins && \is_array($this->clientPlugins)) {
                $n = 0;
                foreach ($this->clientPlugins as $item) {
                    $res['ClientPlugins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClientPluginsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientPlugins'])) {
            if (!empty($map['ClientPlugins'])) {
                $model->clientPlugins = [];
                $n                    = 0;
                foreach ($map['ClientPlugins'] as $item) {
                    $model->clientPlugins[$n++] = null !== $item ? clientPlugins::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
