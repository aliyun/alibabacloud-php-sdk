<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsResponseBody\uisConnections\uisConnection;
use AlibabaCloud\Tea\Model;

class uisConnections extends Model
{
    /**
     * @var uisConnection[]
     */
    public $uisConnection;
    protected $_name = [
        'uisConnection' => 'UisConnection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisConnection) {
            $res['UisConnection'] = [];
            if (null !== $this->uisConnection && \is_array($this->uisConnection)) {
                $n = 0;
                foreach ($this->uisConnection as $item) {
                    $res['UisConnection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisConnection'])) {
            if (!empty($map['UisConnection'])) {
                $model->uisConnection = [];
                $n                    = 0;
                foreach ($map['UisConnection'] as $item) {
                    $model->uisConnection[$n++] = null !== $item ? uisConnection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
