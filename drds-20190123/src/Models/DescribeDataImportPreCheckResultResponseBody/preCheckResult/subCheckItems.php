<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody\preCheckResult;

use AlibabaCloud\Tea\Model;

class subCheckItems extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody\preCheckResult\subCheckItems\subCheckItems[]
     */
    public $subCheckItems;
    protected $_name = [
        'subCheckItems' => 'SubCheckItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subCheckItems) {
            $res['SubCheckItems'] = [];
            if (null !== $this->subCheckItems && \is_array($this->subCheckItems)) {
                $n = 0;
                foreach ($this->subCheckItems as $item) {
                    $res['SubCheckItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subCheckItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubCheckItems'])) {
            if (!empty($map['SubCheckItems'])) {
                $model->subCheckItems = [];
                $n                    = 0;
                foreach ($map['SubCheckItems'] as $item) {
                    $model->subCheckItems[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDataImportPreCheckResultResponseBody\preCheckResult\subCheckItems\subCheckItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
