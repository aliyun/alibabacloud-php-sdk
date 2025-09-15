<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody\restartRecord;

use AlibabaCloud\Dara\Model;

class detailErrorInfoList extends Model
{
    /**
     * @var bool
     */
    public $addJobLevelBlacklist;

    /**
     * @var bool
     */
    public $addNodeToBlacklist;

    /**
     * @var string
     */
    public $detailErrorMsg;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $errorSource;

    /**
     * @var string
     */
    public $node;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var bool
     */
    public $triggerRestart;
    protected $_name = [
        'addJobLevelBlacklist' => 'AddJobLevelBlacklist',
        'addNodeToBlacklist' => 'AddNodeToBlacklist',
        'detailErrorMsg' => 'DetailErrorMsg',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'errorSource' => 'ErrorSource',
        'node' => 'Node',
        'pod' => 'Pod',
        'triggerRestart' => 'TriggerRestart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addJobLevelBlacklist) {
            $res['AddJobLevelBlacklist'] = $this->addJobLevelBlacklist;
        }

        if (null !== $this->addNodeToBlacklist) {
            $res['AddNodeToBlacklist'] = $this->addNodeToBlacklist;
        }

        if (null !== $this->detailErrorMsg) {
            $res['DetailErrorMsg'] = $this->detailErrorMsg;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->errorSource) {
            $res['ErrorSource'] = $this->errorSource;
        }

        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }

        if (null !== $this->triggerRestart) {
            $res['TriggerRestart'] = $this->triggerRestart;
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
        if (isset($map['AddJobLevelBlacklist'])) {
            $model->addJobLevelBlacklist = $map['AddJobLevelBlacklist'];
        }

        if (isset($map['AddNodeToBlacklist'])) {
            $model->addNodeToBlacklist = $map['AddNodeToBlacklist'];
        }

        if (isset($map['DetailErrorMsg'])) {
            $model->detailErrorMsg = $map['DetailErrorMsg'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['ErrorSource'])) {
            $model->errorSource = $map['ErrorSource'];
        }

        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }

        if (isset($map['TriggerRestart'])) {
            $model->triggerRestart = $map['TriggerRestart'];
        }

        return $model;
    }
}
