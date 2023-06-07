<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeDatabaseInstanceParametersRequest extends Model
{
    /**
     * @example db-38263fa955774501a2ae1bdaed6f****
     *
     * @var string
     */
    public $databaseInstanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseInstanceId' => 'DatabaseInstanceId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseInstanceId) {
            $res['DatabaseInstanceId'] = $this->databaseInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDatabaseInstanceParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseInstanceId'])) {
            $model->databaseInstanceId = $map['DatabaseInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
