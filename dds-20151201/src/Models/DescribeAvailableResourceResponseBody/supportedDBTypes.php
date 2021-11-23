<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAvailableResourceResponseBody\supportedDBTypes\supportedDBType;
use AlibabaCloud\Tea\Model;

class supportedDBTypes extends Model
{
    /**
     * @var supportedDBType[]
     */
    public $supportedDBType;
    protected $_name = [
        'supportedDBType' => 'SupportedDBType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedDBType) {
            $res['SupportedDBType'] = [];
            if (null !== $this->supportedDBType && \is_array($this->supportedDBType)) {
                $n = 0;
                foreach ($this->supportedDBType as $item) {
                    $res['SupportedDBType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedDBTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportedDBType'])) {
            if (!empty($map['SupportedDBType'])) {
                $model->supportedDBType = [];
                $n                      = 0;
                foreach ($map['SupportedDBType'] as $item) {
                    $model->supportedDBType[$n++] = null !== $item ? supportedDBType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
