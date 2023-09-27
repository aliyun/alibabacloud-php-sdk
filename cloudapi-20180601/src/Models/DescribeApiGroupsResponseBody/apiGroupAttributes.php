<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiGroupsResponseBody\apiGroupAttributes\apiGroupAttribute;
use AlibabaCloud\Tea\Model;

class apiGroupAttributes extends Model
{
    /**
     * @var apiGroupAttribute[]
     */
    public $apiGroupAttribute;
    protected $_name = [
        'apiGroupAttribute' => 'ApiGroupAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiGroupAttribute) {
            $res['ApiGroupAttribute'] = [];
            if (null !== $this->apiGroupAttribute && \is_array($this->apiGroupAttribute)) {
                $n = 0;
                foreach ($this->apiGroupAttribute as $item) {
                    $res['ApiGroupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiGroupAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiGroupAttribute'])) {
            if (!empty($map['ApiGroupAttribute'])) {
                $model->apiGroupAttribute = [];
                $n                        = 0;
                foreach ($map['ApiGroupAttribute'] as $item) {
                    $model->apiGroupAttribute[$n++] = null !== $item ? apiGroupAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
