<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\RenewServiceInstanceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class renewalResult extends Model
{
    /**
     * @description Number of failed renewals.
     *
     * @example 1
     *
     * @var int
     */
    public $failed;

    /**
     * @description Number of successfully renewed resources.
     *
     * @example 9
     *
     * @var int
     */
    public $succeeded;

    /**
     * @description Number of renewed resources.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failed' => 'Failed',
        'succeeded' => 'Succeeded',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return renewalResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
