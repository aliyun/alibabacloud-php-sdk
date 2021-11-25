<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateMediaComplexTaskRequest extends Model
{
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
    public $parameters;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'parameters'      => 'Parameters',
        'project'         => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMediaComplexTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
