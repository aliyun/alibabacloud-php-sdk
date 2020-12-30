<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionsResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeSubConnectionsResponseBody\uisSubConnections\uisSubConnection;
use AlibabaCloud\Tea\Model;

class uisSubConnections extends Model
{
    /**
     * @var uisSubConnection[]
     */
    public $uisSubConnection;
    protected $_name = [
        'uisSubConnection' => 'UisSubConnection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisSubConnection) {
            $res['UisSubConnection'] = [];
            if (null !== $this->uisSubConnection && \is_array($this->uisSubConnection)) {
                $n = 0;
                foreach ($this->uisSubConnection as $item) {
                    $res['UisSubConnection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisSubConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisSubConnection'])) {
            if (!empty($map['UisSubConnection'])) {
                $model->uisSubConnection = [];
                $n                       = 0;
                foreach ($map['UisSubConnection'] as $item) {
                    $model->uisSubConnection[$n++] = null !== $item ? uisSubConnection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
