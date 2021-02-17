<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupFacesJobRequest extends Model
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
    protected $_name = [
        'project'         => 'Project',
        'setId'           => 'SetId',
        'notifyTopicName' => 'NotifyTopicName',
        'notifyEndpoint'  => 'NotifyEndpoint',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupFacesJobRequest
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

        return $model;
    }
}
