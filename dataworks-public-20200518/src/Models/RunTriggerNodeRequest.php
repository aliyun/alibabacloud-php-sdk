<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunTriggerNodeRequest extends Model
{
    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $cycleTime;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var int
     */
    public $appId;
    protected $_name = [
        'nodeId'    => 'NodeId',
        'cycleTime' => 'CycleTime',
        'bizDate'   => 'BizDate',
        'appId'     => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->cycleTime) {
            $res['CycleTime'] = $this->cycleTime;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['CycleTime'])) {
            $model->cycleTime = $map['CycleTime'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
