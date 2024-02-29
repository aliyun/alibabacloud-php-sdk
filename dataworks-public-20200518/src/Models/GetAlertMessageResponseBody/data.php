<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody\data\instances;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody\data\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody\data\slaAlert;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetAlertMessageResponseBody\data\topics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $alertId;

    /**
     * @example READY_TO_SEND
     *
     * @var string
     */
    public $alertMessageStatus;

    /**
     * @example SMS
     *
     * @var string
     */
    public $alertMethod;

    /**
     * @example 1553524393000
     *
     * @var int
     */
    public $alertTime;

    /**
     * @example 9527952795****
     *
     * @var string
     */
    public $alertUser;

    /**
     * @var string
     */
    public $content;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @example 1234
     *
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $remindName;

    /**
     * @var slaAlert
     */
    public $slaAlert;

    /**
     * @example REMIND_ALERT
     *
     * @var string
     */
    public $source;

    /**
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'alertId'            => 'AlertId',
        'alertMessageStatus' => 'AlertMessageStatus',
        'alertMethod'        => 'AlertMethod',
        'alertTime'          => 'AlertTime',
        'alertUser'          => 'AlertUser',
        'content'            => 'Content',
        'instances'          => 'Instances',
        'nodes'              => 'Nodes',
        'remindId'           => 'RemindId',
        'remindName'         => 'RemindName',
        'slaAlert'           => 'SlaAlert',
        'source'             => 'Source',
        'topics'             => 'Topics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertMessageStatus) {
            $res['AlertMessageStatus'] = $this->alertMessageStatus;
        }
        if (null !== $this->alertMethod) {
            $res['AlertMethod'] = $this->alertMethod;
        }
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->alertUser) {
            $res['AlertUser'] = $this->alertUser;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->slaAlert) {
            $res['SlaAlert'] = null !== $this->slaAlert ? $this->slaAlert->toMap() : null;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertMessageStatus'])) {
            $model->alertMessageStatus = $map['AlertMessageStatus'];
        }
        if (isset($map['AlertMethod'])) {
            $model->alertMethod = $map['AlertMethod'];
        }
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['AlertUser'])) {
            $model->alertUser = $map['AlertUser'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['SlaAlert'])) {
            $model->slaAlert = slaAlert::fromMap($map['SlaAlert']);
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
