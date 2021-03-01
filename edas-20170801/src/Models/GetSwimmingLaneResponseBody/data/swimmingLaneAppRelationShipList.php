<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetSwimmingLaneResponseBody\data;

use AlibabaCloud\Tea\Model;

class swimmingLaneAppRelationShipList extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $rules;

    /**
     * @var int
     */
    public $laneId;
    protected $_name = [
        'appName' => 'AppName',
        'appId'   => 'AppId',
        'rules'   => 'Rules',
        'laneId'  => 'LaneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = $map['Rules'];
        }
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        return $model;
    }
}
