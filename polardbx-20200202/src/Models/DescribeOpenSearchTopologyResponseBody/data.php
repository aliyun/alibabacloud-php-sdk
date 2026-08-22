<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchTopologyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchTopologyResponseBody\data\nodes;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchTopologyResponseBody\data\storage;

class data extends Model
{
    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var storage
     */
    public $storage;
    protected $_name = [
        'nodes' => 'Nodes',
        'storage' => 'Storage',
    ];

    public function validate()
    {
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
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
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1] = nodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Storage'])) {
            $model->storage = storage::fromMap($map['Storage']);
        }

        return $model;
    }
}
