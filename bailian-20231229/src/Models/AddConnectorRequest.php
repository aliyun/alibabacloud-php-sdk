<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\AddConnectorRequest\fileConnectorConfig;

class AddConnectorRequest extends Model
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
     * @var fileConnectorConfig
     */
    public $fileConnectorConfig;
    protected $_name = [
        'connectorName' => 'ConnectorName',
        'connectorType' => 'ConnectorType',
        'description' => 'Description',
        'fileConnectorConfig' => 'FileConnectorConfig',
    ];

    public function validate()
    {
        if (null !== $this->fileConnectorConfig) {
            $this->fileConnectorConfig->validate();
        }
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

        if (null !== $this->fileConnectorConfig) {
            $res['FileConnectorConfig'] = null !== $this->fileConnectorConfig ? $this->fileConnectorConfig->toArray($noStream) : $this->fileConnectorConfig;
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
            $model->fileConnectorConfig = fileConnectorConfig::fromMap($map['FileConnectorConfig']);
        }

        return $model;
    }
}
