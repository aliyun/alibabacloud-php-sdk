<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryChangeInfoRequest\levelTree\treeData;

class levelTree extends Model
{
    /**
     * @var string
     */
    public $dataType;

    /**
     * @var treeData[]
     */
    public $treeData;
    protected $_name = [
        'dataType' => 'DataType',
        'treeData' => 'TreeData',
    ];

    public function validate()
    {
        if (\is_array($this->treeData)) {
            Model::validateArray($this->treeData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->treeData) {
            if (\is_array($this->treeData)) {
                $res['TreeData'] = [];
                $n1 = 0;
                foreach ($this->treeData as $item1) {
                    $res['TreeData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['TreeData'])) {
            if (!empty($map['TreeData'])) {
                $model->treeData = [];
                $n1 = 0;
                foreach ($map['TreeData'] as $item1) {
                    $model->treeData[$n1] = treeData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
