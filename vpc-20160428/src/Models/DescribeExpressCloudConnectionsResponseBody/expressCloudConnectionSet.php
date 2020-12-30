<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponseBody\expressCloudConnectionSet\expressCloudConnectionType;
use AlibabaCloud\Tea\Model;

class expressCloudConnectionSet extends Model
{
    /**
     * @var expressCloudConnectionType[]
     */
    public $expressCloudConnectionType;
    protected $_name = [
        'expressCloudConnectionType' => 'ExpressCloudConnectionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressCloudConnectionType) {
            $res['ExpressCloudConnectionType'] = [];
            if (null !== $this->expressCloudConnectionType && \is_array($this->expressCloudConnectionType)) {
                $n = 0;
                foreach ($this->expressCloudConnectionType as $item) {
                    $res['ExpressCloudConnectionType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressCloudConnectionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressCloudConnectionType'])) {
            if (!empty($map['ExpressCloudConnectionType'])) {
                $model->expressCloudConnectionType = [];
                $n                                 = 0;
                foreach ($map['ExpressCloudConnectionType'] as $item) {
                    $model->expressCloudConnectionType[$n++] = null !== $item ? expressCloudConnectionType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
