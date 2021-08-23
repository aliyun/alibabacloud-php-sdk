<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateMergeFaceGroupsJobRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $setId;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $groupIdFrom;

    /**
     * @var string
     */
    public $groupIdTo;

    /**
     * @var string
     */
    public $customMessage;
    protected $_name = [
        'project'         => 'Project',
        'setId'           => 'SetId',
        'notifyTopicName' => 'NotifyTopicName',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'groupIdFrom'     => 'GroupIdFrom',
        'groupIdTo'       => 'GroupIdTo',
        'customMessage'   => 'CustomMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->groupIdFrom) {
            $res['GroupIdFrom'] = $this->groupIdFrom;
        }
        if (null !== $this->groupIdTo) {
            $res['GroupIdTo'] = $this->groupIdTo;
        }
        if (null !== $this->customMessage) {
            $res['CustomMessage'] = $this->customMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMergeFaceGroupsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['GroupIdFrom'])) {
            $model->groupIdFrom = $map['GroupIdFrom'];
        }
        if (isset($map['GroupIdTo'])) {
            $model->groupIdTo = $map['GroupIdTo'];
        }
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }

        return $model;
    }
}
