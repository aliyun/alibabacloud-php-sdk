<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeExperimentEnvResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @example UID
     *
     * @var string
     */
    public $divideType;
    protected $_name = [
        'bucketCount' => 'bucketCount',
        'divideType'  => 'divideType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketCount) {
            $res['bucketCount'] = $this->bucketCount;
        }
        if (null !== $this->divideType) {
            $res['divideType'] = $this->divideType;
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
        if (isset($map['bucketCount'])) {
            $model->bucketCount = $map['bucketCount'];
        }
        if (isset($map['divideType'])) {
            $model->divideType = $map['divideType'];
        }

        return $model;
    }
}
