<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\ListBucketsResponseBody;

use AlibabaCloud\SDK\Oss\V20190517\Models\Bucket;
use AlibabaCloud\Tea\Model;

class buckets extends Model
{
    /**
     * @var Bucket[]
     */
    public $buckets;
    protected $_name = [
        'buckets' => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buckets) {
            $res['Bucket'] = [];
            if (null !== $this->buckets && \is_array($this->buckets)) {
                $n = 0;
                foreach ($this->buckets as $item) {
                    $res['Bucket'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buckets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            if (!empty($map['Bucket'])) {
                $model->buckets = [];
                $n              = 0;
                foreach ($map['Bucket'] as $item) {
                    $model->buckets[$n++] = null !== $item ? Bucket::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
