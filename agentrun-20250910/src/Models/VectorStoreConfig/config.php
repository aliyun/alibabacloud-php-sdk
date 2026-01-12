<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\VectorStoreConfig;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $collectionName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $vectorDimension;
    protected $_name = [
        'collectionName' => 'collectionName',
        'endpoint' => 'endpoint',
        'instanceName' => 'instanceName',
        'vectorDimension' => 'vectorDimension',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['collectionName'] = $this->collectionName;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->vectorDimension) {
            $res['vectorDimension'] = $this->vectorDimension;
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
        if (isset($map['collectionName'])) {
            $model->collectionName = $map['collectionName'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['vectorDimension'])) {
            $model->vectorDimension = $map['vectorDimension'];
        }

        return $model;
    }
}
