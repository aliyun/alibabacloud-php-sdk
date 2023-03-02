<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListDependentDataModelsResponseBody;

use AlibabaCloud\SDK\Ltl\V20190510\Models\ListDependentDataModelsResponseBody\data\dataModelInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataModelInfo[]
     */
    public $dataModelInfo;
    protected $_name = [
        'dataModelInfo' => 'DataModelInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataModelInfo) {
            $res['DataModelInfo'] = [];
            if (null !== $this->dataModelInfo && \is_array($this->dataModelInfo)) {
                $n = 0;
                foreach ($this->dataModelInfo as $item) {
                    $res['DataModelInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DataModelInfo'])) {
            if (!empty($map['DataModelInfo'])) {
                $model->dataModelInfo = [];
                $n                    = 0;
                foreach ($map['DataModelInfo'] as $item) {
                    $model->dataModelInfo[$n++] = null !== $item ? dataModelInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
