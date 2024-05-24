<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ListEditableNamespaceResponseBody;

use AlibabaCloud\SDK\Ververica\V20220718\Models\EditableNamespace;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var EditableNamespace[]
     */
    public $editableNamespaces;

    /**
     * @var string
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'editableNamespaces' => 'editableNamespaces',
        'pageIndex'          => 'pageIndex',
        'pageSize'           => 'pageSize',
        'total'              => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editableNamespaces) {
            $res['editableNamespaces'] = [];
            if (null !== $this->editableNamespaces && \is_array($this->editableNamespaces)) {
                $n = 0;
                foreach ($this->editableNamespaces as $item) {
                    $res['editableNamespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['editableNamespaces'])) {
            if (!empty($map['editableNamespaces'])) {
                $model->editableNamespaces = [];
                $n                         = 0;
                foreach ($map['editableNamespaces'] as $item) {
                    $model->editableNamespaces[$n++] = null !== $item ? EditableNamespace::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
