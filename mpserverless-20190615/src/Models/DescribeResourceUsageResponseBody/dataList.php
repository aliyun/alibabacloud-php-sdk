<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList\cloudDB;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList\cloudFunction;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList\cloudStorage;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList\staticWeb;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var cloudDB
     */
    public $cloudDB;

    /**
     * @var cloudFunction
     */
    public $cloudFunction;

    /**
     * @var cloudStorage
     */
    public $cloudStorage;

    /**
     * @example 2021-10-01T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2021-10-01T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var staticWeb
     */
    public $staticWeb;
    protected $_name = [
        'cloudDB'       => 'CloudDB',
        'cloudFunction' => 'CloudFunction',
        'cloudStorage'  => 'CloudStorage',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'staticWeb'     => 'StaticWeb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudDB) {
            $res['CloudDB'] = null !== $this->cloudDB ? $this->cloudDB->toMap() : null;
        }
        if (null !== $this->cloudFunction) {
            $res['CloudFunction'] = null !== $this->cloudFunction ? $this->cloudFunction->toMap() : null;
        }
        if (null !== $this->cloudStorage) {
            $res['CloudStorage'] = null !== $this->cloudStorage ? $this->cloudStorage->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->staticWeb) {
            $res['StaticWeb'] = null !== $this->staticWeb ? $this->staticWeb->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDB'])) {
            $model->cloudDB = cloudDB::fromMap($map['CloudDB']);
        }
        if (isset($map['CloudFunction'])) {
            $model->cloudFunction = cloudFunction::fromMap($map['CloudFunction']);
        }
        if (isset($map['CloudStorage'])) {
            $model->cloudStorage = cloudStorage::fromMap($map['CloudStorage']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StaticWeb'])) {
            $model->staticWeb = staticWeb::fromMap($map['StaticWeb']);
        }

        return $model;
    }
}
