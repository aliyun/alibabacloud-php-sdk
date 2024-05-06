<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node\daemonList\daemon;
use AlibabaCloud\Tea\Model;

class daemonList extends Model
{
    /**
     * @var daemon[]
     */
    public $daemon;
    protected $_name = [
        'daemon' => 'Daemon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daemon) {
            $res['Daemon'] = [];
            if (null !== $this->daemon && \is_array($this->daemon)) {
                $n = 0;
                foreach ($this->daemon as $item) {
                    $res['Daemon'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return daemonList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Daemon'])) {
            if (!empty($map['Daemon'])) {
                $model->daemon = [];
                $n             = 0;
                foreach ($map['Daemon'] as $item) {
                    $model->daemon[$n++] = null !== $item ? daemon::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
