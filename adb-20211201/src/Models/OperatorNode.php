<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\OperatorNode\stats;

class OperatorNode extends Model
{
    /**
     * @var OperatorNode[]
     */
    public $children;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $levelWidth;

    /**
     * @var int
     */
    public $nodeDepth;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $nodeWidth;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var stats
     */
    public $stats;
    protected $_name = [
        'children' => 'children',
        'id' => 'id',
        'levelWidth' => 'levelWidth',
        'nodeDepth' => 'nodeDepth',
        'nodeName' => 'nodeName',
        'nodeWidth' => 'nodeWidth',
        'parentId' => 'parentId',
        'stats' => 'stats',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (null !== $this->stats) {
            $this->stats->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->levelWidth) {
            $res['levelWidth'] = $this->levelWidth;
        }

        if (null !== $this->nodeDepth) {
            $res['nodeDepth'] = $this->nodeDepth;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeWidth) {
            $res['nodeWidth'] = $this->nodeWidth;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->stats) {
            $res['stats'] = null !== $this->stats ? $this->stats->toArray($noStream) : $this->stats;
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
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['levelWidth'])) {
            $model->levelWidth = $map['levelWidth'];
        }

        if (isset($map['nodeDepth'])) {
            $model->nodeDepth = $map['nodeDepth'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['nodeWidth'])) {
            $model->nodeWidth = $map['nodeWidth'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['stats'])) {
            $model->stats = stats::fromMap($map['stats']);
        }

        return $model;
    }
}
