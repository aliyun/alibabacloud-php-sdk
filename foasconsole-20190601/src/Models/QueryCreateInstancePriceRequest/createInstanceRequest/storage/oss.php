<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest\storage;

use AlibabaCloud\Tea\Model;

class oss extends Model
{
    /**
     * @example oss_flink
     *
     * @var string
     */
    public $bucket;
    protected $_name = [
        'bucket' => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return oss
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
