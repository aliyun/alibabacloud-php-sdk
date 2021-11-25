<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateMergeFaceGroupsJobRequest extends Model
{
    /**
     * @var string
     */
    public $customMessage;

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
    public $setId;
    protected $_name = [
        'customMessage'   => 'CustomMessage',
        'groupIdFrom'     => 'GroupIdFrom',
        'groupIdTo'       => 'GroupIdTo',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'project'         => 'Project',
        'setId'           => 'SetId',
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
        if (null !== $this->groupIdFrom) {
            $res['GroupIdFrom'] = $this->groupIdFrom;
        }
        if (null !== $this->groupIdTo) {
            $res['GroupIdTo'] = $this->groupIdTo;
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
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
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
        if (isset($map['CustomMessage'])) {
            $model->customMessage = $map['CustomMessage'];
        }
        if (isset($map['GroupIdFrom'])) {
            $model->groupIdFrom = $map['GroupIdFrom'];
        }
        if (isset($map['GroupIdTo'])) {
            $model->groupIdTo = $map['GroupIdTo'];
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
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
