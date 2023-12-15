<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\GetTemplatesResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\GetTemplatesResponseBody\result\schemaList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var schemaList[]
     */
    public $schemaList;
    protected $_name = [
        'schemaList' => 'SchemaList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaList) {
            $res['SchemaList'] = [];
            if (null !== $this->schemaList && \is_array($this->schemaList)) {
                $n = 0;
                foreach ($this->schemaList as $item) {
                    $res['SchemaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemaList'])) {
            if (!empty($map['SchemaList'])) {
                $model->schemaList = [];
                $n                 = 0;
                foreach ($map['SchemaList'] as $item) {
                    $model->schemaList[$n++] = null !== $item ? schemaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
