<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\instances;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\slaAlert;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListAlertMessagesResponseBody\data\alertMessages\topics;

class alertMessages extends Model
{
    /**
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $alertMessageStatus;

    /**
     * @var string
     */
    public $alertMethod;

    /**
     * @var int
     */
    public $alertTime;

    /**
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
     * @var string
     */
    public $source;

    /**
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'alertId' => 'AlertId',
        'alertMessageStatus' => 'AlertMessageStatus',
        'alertMethod' => 'AlertMethod',
        'alertTime' => 'AlertTime',
        'alertUser' => 'AlertUser',
        'content' => 'Content',
        'instances' => 'Instances',
        'nodes' => 'Nodes',
        'remindId' => 'RemindId',
        'remindName' => 'RemindName',
        'slaAlert' => 'SlaAlert',
        'source' => 'Source',
        'topics' => 'Topics',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (null !== $this->slaAlert) {
            $this->slaAlert->validate();
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['SlaAlert'] = null !== $this->slaAlert ? $this->slaAlert->toArray($noStream) : $this->slaAlert;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1++] = topics::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
