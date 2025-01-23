<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RunTriggerNodeRequest extends Model
{
    /**
     * @var int
     */
    public $appId;
    /**
     * @var int
     */
    public $bizDate;
    /**
     * @var int
     */
    public $cycleTime;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
