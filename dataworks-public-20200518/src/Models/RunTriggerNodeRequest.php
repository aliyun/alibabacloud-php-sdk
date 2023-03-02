<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunTriggerNodeRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace to which the manually triggered node belongs. You can call the [ListProjects](~~178393~~) operation to query the ID.
     *
     * @example 10001
     *
     * @var int
     */
    public $appId;

    /**
     * @description The data timestamp of the manually triggered node instance.
     *
     * @example 1606200230105
     *
     * @var int
     */
    public $bizDate;

    /**
     * @description The scheduled time to run the manually triggered node. Set the value to a 13-digit timestamp in milliseconds.
     *
     * @example 1606200230105
     *
     * @var int
     */
    public $cycleTime;

    /**
     * @description The ID of the manually triggered node. You can call the [ListNodes](~~173979~~) operation to query the ID.
     *
     * @example 10000011
     *
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'appId'     => 'AppId',
        'bizDate'   => 'BizDate',
        'cycleTime' => 'CycleTime',
        'nodeId'    => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->cycleTime) {
            $res['CycleTime'] = $this->cycleTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunTriggerNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['CycleTime'])) {
            $model->cycleTime = $map['CycleTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
