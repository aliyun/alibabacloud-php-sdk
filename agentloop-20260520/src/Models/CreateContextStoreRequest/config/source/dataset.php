<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset\customFields;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset\filter;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset\versionPolicy;

class dataset extends Model
{
    /**
     * @var customFields[]
     */
    public $customFields;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var filter
     */
    public $filter;

    /**
     * @var int
     */
    public $pollIntervalSeconds;

    /**
     * @var string
     */
    public $schemaContract;

    /**
     * @var versionPolicy
     */
    public $versionPolicy;
    protected $_name = [
        'customFields' => 'customFields',
        'datasetName' => 'datasetName',
        'filter' => 'filter',
        'pollIntervalSeconds' => 'pollIntervalSeconds',
        'schemaContract' => 'schemaContract',
        'versionPolicy' => 'versionPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->customFields)) {
            Model::validateArray($this->customFields);
        }
        if (null !== $this->filter) {
            $this->filter->validate();
        }
        if (null !== $this->versionPolicy) {
            $this->versionPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customFields) {
            if (\is_array($this->customFields)) {
                $res['customFields'] = [];
                $n1 = 0;
                foreach ($this->customFields as $item1) {
                    $res['customFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->datasetName) {
            $res['datasetName'] = $this->datasetName;
        }

        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toArray($noStream) : $this->filter;
        }

        if (null !== $this->pollIntervalSeconds) {
            $res['pollIntervalSeconds'] = $this->pollIntervalSeconds;
        }

        if (null !== $this->schemaContract) {
            $res['schemaContract'] = $this->schemaContract;
        }

        if (null !== $this->versionPolicy) {
            $res['versionPolicy'] = null !== $this->versionPolicy ? $this->versionPolicy->toArray($noStream) : $this->versionPolicy;
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
        if (isset($map['customFields'])) {
            if (!empty($map['customFields'])) {
                $model->customFields = [];
                $n1 = 0;
                foreach ($map['customFields'] as $item1) {
                    $model->customFields[$n1] = customFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['datasetName'])) {
            $model->datasetName = $map['datasetName'];
        }

        if (isset($map['filter'])) {
            $model->filter = filter::fromMap($map['filter']);
        }

        if (isset($map['pollIntervalSeconds'])) {
            $model->pollIntervalSeconds = $map['pollIntervalSeconds'];
        }

        if (isset($map['schemaContract'])) {
            $model->schemaContract = $map['schemaContract'];
        }

        if (isset($map['versionPolicy'])) {
            $model->versionPolicy = versionPolicy::fromMap($map['versionPolicy']);
        }

        return $model;
    }
}
