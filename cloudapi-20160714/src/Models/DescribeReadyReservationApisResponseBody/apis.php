<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeReadyReservationApisResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeReadyReservationApisResponseBody\apis\apiDigest;
use AlibabaCloud\Tea\Model;

class apis extends Model
{
    /**
     * @var apiDigest[]
     */
    public $apiDigest;
    protected $_name = [
        'apiDigest' => 'ApiDigest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDigest) {
            $res['ApiDigest'] = [];
            if (null !== $this->apiDigest && \is_array($this->apiDigest)) {
                $n = 0;
                foreach ($this->apiDigest as $item) {
                    $res['ApiDigest'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDigest'])) {
            if (!empty($map['ApiDigest'])) {
                $model->apiDigest = [];
                $n                = 0;
                foreach ($map['ApiDigest'] as $item) {
                    $model->apiDigest[$n++] = null !== $item ? apiDigest::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
