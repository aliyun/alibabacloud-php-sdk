<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsRequest\filter;
use AlibabaCloud\Tea\Model;

class GetSyntheticMonitorsRequest extends Model
{
    /**
     * @description The query conditions.
     *
     * This parameter is required.
     * @var filter
     */
    public $filter;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'filter'   => 'Filter',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSyntheticMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = filter::fromMap($map['Filter']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
