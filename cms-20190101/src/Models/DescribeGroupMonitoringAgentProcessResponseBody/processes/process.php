<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\matchExpress;

class process extends Model
{
    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var matchExpress
     */
    public $matchExpress;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $processName;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'matchExpress' => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'processName' => 'ProcessName',
    ];

    public function validate()
    {
        if (null !== $this->alertConfig) {
            $this->alertConfig->validate();
        }
        if (null !== $this->matchExpress) {
            $this->matchExpress->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toArray($noStream) : $this->alertConfig;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = null !== $this->matchExpress ? $this->matchExpress->toArray($noStream) : $this->matchExpress;
        }

        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
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
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MatchExpress'])) {
            $model->matchExpress = matchExpress::fromMap($map['MatchExpress']);
        }

        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        return $model;
    }
}
