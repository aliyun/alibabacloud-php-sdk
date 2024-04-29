<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponseBody\desktopGroups;

use AlibabaCloud\Tea\Model;

class countPerStatus extends Model
{
    /**
     * @description The total number of cloud computers.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The status of the cloud computer.
     *
     * Valid values:
     *
     *   Stopped
     *
     * <!-- -->
     *
     *   Starting
     *
     * <!-- -->
     *
     *   Rebuilding
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Stopping
     *
     * <!-- -->
     *
     *   Expired
     *
     * <!-- -->
     *
     *   Deleted
     *
     * <!-- -->
     *
     *   Pending
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'count'  => 'Count',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return countPerStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
