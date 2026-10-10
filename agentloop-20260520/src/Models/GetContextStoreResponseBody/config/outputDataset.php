<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetContextStoreResponseBody\config;

use AlibabaCloud\Dara\Model;

class outputDataset extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $schemaContract;

    /**
     * @var int
     */
    public $schemaVersion;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'datasetName' => 'datasetName',
        'schemaContract' => 'schemaContract',
        'schemaVersion' => 'schemaVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->datasetName) {
            $res['datasetName'] = $this->datasetName;
        }

        if (null !== $this->schemaContract) {
            $res['schemaContract'] = $this->schemaContract;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['datasetName'])) {
            $model->datasetName = $map['datasetName'];
        }

        if (isset($map['schemaContract'])) {
            $model->schemaContract = $map['schemaContract'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        return $model;
    }
}
