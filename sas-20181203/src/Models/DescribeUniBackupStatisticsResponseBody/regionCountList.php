<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class regionCountList extends Model
{
    /**
     * @description The number of database instances that are automatically scanned.
     *
     * @example 1
     *
     * @var string
     */
    public $automaticCount;

    /**
     * @description The ID of the region in which the database instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'automaticCount' => 'AutomaticCount',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->automaticCount) {
            $res['AutomaticCount'] = $this->automaticCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutomaticCount'])) {
            $model->automaticCount = $map['AutomaticCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
