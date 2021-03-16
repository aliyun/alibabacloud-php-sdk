<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTerrorismPipelineResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\UpdateTerrorismPipelineResponseBody\pipeline\notifyConfig;
use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var notifyConfig
     */
    public $notifyConfig;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'state'        => 'State',
        'notifyConfig' => 'NotifyConfig',
        'priority'     => 'Priority',
        'name'         => 'Name',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = null !== $this->notifyConfig ? $this->notifyConfig->toMap() : null;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = notifyConfig::fromMap($map['NotifyConfig']);
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
