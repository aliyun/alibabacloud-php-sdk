<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponseBody;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponseBody\data\optionalValues;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var optionalValues[]
     */
    public $optionalValues;
    protected $_name = [
        'optionalValues' => 'OptionalValues',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionalValues) {
            $res['OptionalValues'] = [];
            if (null !== $this->optionalValues && \is_array($this->optionalValues)) {
                $n = 0;
                foreach ($this->optionalValues as $item) {
                    $res['OptionalValues'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['OptionalValues'])) {
            if (!empty($map['OptionalValues'])) {
                $model->optionalValues = [];
                $n = 0;
                foreach ($map['OptionalValues'] as $item) {
                    $model->optionalValues[$n++] = null !== $item ? optionalValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
