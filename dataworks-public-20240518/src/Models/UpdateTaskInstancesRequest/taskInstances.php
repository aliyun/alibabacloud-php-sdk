<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest\taskInstances\dataSource;

class taskInstances extends Model
{
    /**
     * @var dataSource
     */
    public $dataSource;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var string
     */
    public $runtimeResource;
    protected $_name = [
        'dataSource'      => 'DataSource',
        'id'              => 'Id',
        'priority'        => 'Priority',
        'runtimeResource' => 'RuntimeResource',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->runtimeResource) {
            $res['RuntimeResource'] = $this->runtimeResource;
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
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RuntimeResource'])) {
            $model->runtimeResource = $map['RuntimeResource'];
        }

        return $model;
    }
}
