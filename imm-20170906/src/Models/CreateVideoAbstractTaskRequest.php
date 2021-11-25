<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoAbstractTaskRequest extends Model
{
    /**
     * @var int
     */
    public $abstractLength;

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
    public $targetClipsUri;

    /**
     * @var string
     */
    public $targetVideoUri;

    /**
     * @var string
     */
    public $videoUri;
    protected $_name = [
        'abstractLength'  => 'AbstractLength',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'project'         => 'Project',
        'targetClipsUri'  => 'TargetClipsUri',
        'targetVideoUri'  => 'TargetVideoUri',
        'videoUri'        => 'VideoUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abstractLength) {
            $res['AbstractLength'] = $this->abstractLength;
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
        if (null !== $this->targetClipsUri) {
            $res['TargetClipsUri'] = $this->targetClipsUri;
        }
        if (null !== $this->targetVideoUri) {
            $res['TargetVideoUri'] = $this->targetVideoUri;
        }
        if (null !== $this->videoUri) {
            $res['VideoUri'] = $this->videoUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoAbstractTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbstractLength'])) {
            $model->abstractLength = $map['AbstractLength'];
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
        if (isset($map['TargetClipsUri'])) {
            $model->targetClipsUri = $map['TargetClipsUri'];
        }
        if (isset($map['TargetVideoUri'])) {
            $model->targetVideoUri = $map['TargetVideoUri'];
        }
        if (isset($map['VideoUri'])) {
            $model->videoUri = $map['VideoUri'];
        }

        return $model;
    }
}
