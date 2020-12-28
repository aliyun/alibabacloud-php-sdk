<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotPackageResponseBody;

use AlibabaCloud\Tea\Model;

class snapshotPackages extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $initCapacity;
    protected $_name = [
        'displayName'  => 'DisplayName',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'initCapacity' => 'InitCapacity',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotPackages
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }

        return $model;
    }
}
