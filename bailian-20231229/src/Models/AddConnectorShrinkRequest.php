<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class AddConnectorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $connectorName;

    /**
     * @var string
     */
    public $connectorType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileConnectorConfigShrink;
    protected $_name = [
        'connectorName' => 'ConnectorName',
        'connectorType' => 'ConnectorType',
        'description' => 'Description',
        'fileConnectorConfigShrink' => 'FileConnectorConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectorName) {
            $res['ConnectorName'] = $this->connectorName;
        }

        if (null !== $this->connectorType) {
            $res['ConnectorType'] = $this->connectorType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileConnectorConfigShrink) {
            $res['FileConnectorConfig'] = $this->fileConnectorConfigShrink;
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
        if (isset($map['ConnectorName'])) {
            $model->connectorName = $map['ConnectorName'];
        }

        if (isset($map['ConnectorType'])) {
            $model->connectorType = $map['ConnectorType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileConnectorConfig'])) {
            $model->fileConnectorConfigShrink = $map['FileConnectorConfig'];
        }

        return $model;
    }
}
