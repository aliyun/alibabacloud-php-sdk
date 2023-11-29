<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\StartProjectsByLabelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failedProjectIds;

    /**
     * @var string[]
     */
    public $succeedProjectIds;

    /**
     * @example 20
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'failedProjectIds'  => 'FailedProjectIds',
        'succeedProjectIds' => 'SucceedProjectIds',
        'total'             => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedProjectIds) {
            $res['FailedProjectIds'] = $this->failedProjectIds;
        }
        if (null !== $this->succeedProjectIds) {
            $res['SucceedProjectIds'] = $this->succeedProjectIds;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedProjectIds'])) {
            if (!empty($map['FailedProjectIds'])) {
                $model->failedProjectIds = $map['FailedProjectIds'];
            }
        }
        if (isset($map['SucceedProjectIds'])) {
            if (!empty($map['SucceedProjectIds'])) {
                $model->succeedProjectIds = $map['SucceedProjectIds'];
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
