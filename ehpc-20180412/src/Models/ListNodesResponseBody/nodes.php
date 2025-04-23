<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\nodeInfo;

class nodes extends Model
{
    /**
     * @var nodeInfo[]
     */
    public $nodeInfo;
    protected $_name = [
        'nodeInfo' => 'NodeInfo',
    ];

    public function validate()
    {
        if (\is_array($this->nodeInfo)) {
            Model::validateArray($this->nodeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeInfo) {
            if (\is_array($this->nodeInfo)) {
                $res['NodeInfo'] = [];
                $n1 = 0;
                foreach ($this->nodeInfo as $item1) {
                    $res['NodeInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeInfo'])) {
            if (!empty($map['NodeInfo'])) {
                $model->nodeInfo = [];
                $n1 = 0;
                foreach ($map['NodeInfo'] as $item1) {
                    $model->nodeInfo[$n1++] = nodeInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
