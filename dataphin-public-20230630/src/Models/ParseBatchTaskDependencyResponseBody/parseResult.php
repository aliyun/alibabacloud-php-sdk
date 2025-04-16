<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList;

class parseResult extends Model
{
    /**
     * @var dependNodeList[]
     */
    public $dependNodeList;
    protected $_name = [
        'dependNodeList' => 'DependNodeList',
    ];

    public function validate()
    {
        if (\is_array($this->dependNodeList)) {
            Model::validateArray($this->dependNodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependNodeList) {
            if (\is_array($this->dependNodeList)) {
                $res['DependNodeList'] = [];
                $n1 = 0;
                foreach ($this->dependNodeList as $item1) {
                    $res['DependNodeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DependNodeList'])) {
            if (!empty($map['DependNodeList'])) {
                $model->dependNodeList = [];
                $n1 = 0;
                foreach ($map['DependNodeList'] as $item1) {
                    $model->dependNodeList[$n1++] = dependNodeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
