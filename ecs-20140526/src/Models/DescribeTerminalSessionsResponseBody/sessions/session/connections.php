<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session\connections\connection;

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
        if (\is_array($this->connection)) {
            Model::validateArray($this->connection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connection) {
            if (\is_array($this->connection)) {
                $res['Connection'] = [];
                $n1 = 0;
                foreach ($this->connection as $item1) {
                    $res['Connection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Connection'])) {
            if (!empty($map['Connection'])) {
                $model->connection = [];
                $n1 = 0;
                foreach ($map['Connection'] as $item1) {
                    $model->connection[$n1] = connection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
