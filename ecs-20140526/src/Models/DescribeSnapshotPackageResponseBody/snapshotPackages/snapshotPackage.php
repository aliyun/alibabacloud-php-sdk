<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody\snapshotPackages;

use AlibabaCloud\Tea\Model;

class snapshotPackage extends Model
{
    /**
     * @description The name of the OSS storage plan.
     *
     * @example testDisplayName
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The time when the OSS storage plan expires. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-11-30T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum storage capacity offered by the OSS storage plan.
     *
     * @example 500
     *
     * @var int
     */
    public $initCapacity;

    /**
     * @description The time when the OSS storage plan was purchased. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2017-11-30T06:32:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'endTime'      => 'EndTime',
        'initCapacity' => 'InitCapacity',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
