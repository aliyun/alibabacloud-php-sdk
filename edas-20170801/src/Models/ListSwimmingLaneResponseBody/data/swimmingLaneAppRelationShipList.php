<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListSwimmingLaneResponseBody\data;

use AlibabaCloud\Tea\Model;

class swimmingLaneAppRelationShipList extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3b615783-01f1-4569-baa3-cb71bdb6****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example prod-app-58846
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $extra;

    /**
     * @description The ID of the lane.
     *
     * @example 348
     *
     * @var int
     */
    public $laneId;

    /**
     * @description The association rule.
     *
     * @example ""
     *
     * @var string
     */
    public $rules;
    protected $_name = [
        'appId'   => 'AppId',
        'appName' => 'AppName',
        'extra'   => 'Extra',
        'laneId'  => 'LaneId',
        'rules'   => 'Rules',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return swimmingLaneAppRelationShipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }

        return $model;
    }
}
