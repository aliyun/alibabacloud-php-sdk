<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeSmartContractJobsRequest extends Model
{
    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'size'  => 'Size',
        'start' => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSmartContractJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
