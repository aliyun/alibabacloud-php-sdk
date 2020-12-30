<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema\restoreSchemaDetails\restoreSchemaDetail;
use AlibabaCloud\Tea\Model;

class restoreSchemaDetails extends Model
{
    /**
     * @var restoreSchemaDetail[]
     */
    public $restoreSchemaDetail;
    protected $_name = [
        'restoreSchemaDetail' => 'RestoreSchemaDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restoreSchemaDetail) {
            $res['RestoreSchemaDetail'] = [];
            if (null !== $this->restoreSchemaDetail && \is_array($this->restoreSchemaDetail)) {
                $n = 0;
                foreach ($this->restoreSchemaDetail as $item) {
                    $res['RestoreSchemaDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restoreSchemaDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RestoreSchemaDetail'])) {
            if (!empty($map['RestoreSchemaDetail'])) {
                $model->restoreSchemaDetail = [];
                $n                          = 0;
                foreach ($map['RestoreSchemaDetail'] as $item) {
                    $model->restoreSchemaDetail[$n++] = null !== $item ? restoreSchemaDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
