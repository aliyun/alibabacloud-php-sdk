<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models;

use AlibabaCloud\Dara\Model;

class GetConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'connectorId' => 'ConnectorId',
        'projectName' => 'ProjectName',
        'topicName' => 'TopicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
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
        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        return $model;
    }
}
