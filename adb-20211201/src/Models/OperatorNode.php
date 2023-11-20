<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\OperatorNode\stats;
use AlibabaCloud\Tea\Model;

class OperatorNode extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Adb\V20211201\Models\OperatorNode[]
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
        'children'   => 'children',
        'id'         => 'id',
        'levelWidth' => 'levelWidth',
        'nodeDepth'  => 'nodeDepth',
        'nodeName'   => 'nodeName',
        'nodeWidth'  => 'nodeWidth',
        'parentId'   => 'parentId',
        'stats'      => 'stats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['children'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperatorNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
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
