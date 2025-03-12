<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session\connections\connection;
use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @var connection[]
     */
    public $connection;
    protected $_name = [
        'connection' => 'Connection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connection) {
            $res['Connection'] = [];
            if (null !== $this->connection && \is_array($this->connection)) {
                $n = 0;
                foreach ($this->connection as $item) {
                    $res['Connection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connection'])) {
            if (!empty($map['Connection'])) {
                $model->connection = [];
                $n                 = 0;
                foreach ($map['Connection'] as $item) {
                    $model->connection[$n++] = null !== $item ? connection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
