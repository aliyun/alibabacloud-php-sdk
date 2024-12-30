<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependNodeList) {
            $res['DependNodeList'] = [];
            if (null !== $this->dependNodeList && \is_array($this->dependNodeList)) {
                $n = 0;
                foreach ($this->dependNodeList as $item) {
                    $res['DependNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parseResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependNodeList'])) {
            if (!empty($map['DependNodeList'])) {
                $model->dependNodeList = [];
                $n                     = 0;
                foreach ($map['DependNodeList'] as $item) {
                    $model->dependNodeList[$n++] = null !== $item ? dependNodeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
