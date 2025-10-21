<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ListEditableNamespaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\EditableNamespace;

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
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->editableNamespaces)) {
            Model::validateArray($this->editableNamespaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editableNamespaces) {
            if (\is_array($this->editableNamespaces)) {
                $res['editableNamespaces'] = [];
                $n1 = 0;
                foreach ($this->editableNamespaces as $item1) {
                    $res['editableNamespaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['editableNamespaces'])) {
            if (!empty($map['editableNamespaces'])) {
                $model->editableNamespaces = [];
                $n1 = 0;
                foreach ($map['editableNamespaces'] as $item1) {
                    $model->editableNamespaces[$n1] = EditableNamespace::fromMap($item1);
                    ++$n1;
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
