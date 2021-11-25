<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateGrabFrameTaskRequest extends Model
{
    /**
     * @var string
     */
    public $customMessage;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $targetList;

    /**
     * @var string
     */
    public $videoUri;
    protected $_name = [
        'customMessage'   => 'CustomMessage',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'project'         => 'Project',
        'targetList'      => 'TargetList',
        'videoUri'        => 'VideoUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customMessage) {
            $res['CustomMessage'] = $this->customMessage;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->targetList) {
            $res['TargetList'] = $this->targetList;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGrabFrameTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['TargetList'])) {
            $model->targetList = $map['TargetList'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }

        return $model;
    }
}
