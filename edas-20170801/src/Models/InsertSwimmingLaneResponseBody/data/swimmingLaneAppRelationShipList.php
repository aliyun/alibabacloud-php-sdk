<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertSwimmingLaneResponseBody\data;

use AlibabaCloud\Dara\Model;

class swimmingLaneAppRelationShipList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $rules;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'laneId' => 'LaneId',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = $this->rules;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
