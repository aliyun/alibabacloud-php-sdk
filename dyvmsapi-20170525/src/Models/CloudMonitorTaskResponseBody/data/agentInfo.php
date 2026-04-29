<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentInfo extends Model
{
    /**
     * @var int
     */
    public $availableCount;

    /**
     * @var int
     */
    public $bridgeCount;

    /**
     * @var int
     */
    public $onlineCount;

    /**
     * @var int
     */
    public $ringingCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $wrapupCount;
    protected $_name = [
        'availableCount' => 'AvailableCount',
        'bridgeCount' => 'BridgeCount',
        'onlineCount' => 'OnlineCount',
        'ringingCount' => 'RingingCount',
        'totalCount' => 'TotalCount',
        'wrapupCount' => 'WrapupCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCount) {
            $res['AvailableCount'] = $this->availableCount;
        }

        if (null !== $this->bridgeCount) {
            $res['BridgeCount'] = $this->bridgeCount;
        }

        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }

        if (null !== $this->ringingCount) {
            $res['RingingCount'] = $this->ringingCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->wrapupCount) {
            $res['WrapupCount'] = $this->wrapupCount;
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
        if (isset($map['AvailableCount'])) {
            $model->availableCount = $map['AvailableCount'];
        }

        if (isset($map['BridgeCount'])) {
            $model->bridgeCount = $map['BridgeCount'];
        }

        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }

        if (isset($map['RingingCount'])) {
            $model->ringingCount = $map['RingingCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WrapupCount'])) {
            $model->wrapupCount = $map['WrapupCount'];
        }

        return $model;
    }
}
