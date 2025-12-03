<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeClusterAttributeResponseBody\nodeList\node\daemonList\daemon;

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
        if (\is_array($this->daemon)) {
            Model::validateArray($this->daemon);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->daemon) {
            if (\is_array($this->daemon)) {
                $res['Daemon'] = [];
                $n1 = 0;
                foreach ($this->daemon as $item1) {
                    $res['Daemon'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Daemon'])) {
            if (!empty($map['Daemon'])) {
                $model->daemon = [];
                $n1 = 0;
                foreach ($map['Daemon'] as $item1) {
                    $model->daemon[$n1] = daemon::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
