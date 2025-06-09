<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam\model_;
use AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam\resource;

class MLServiceParam extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'description' => 'description',
        'model' => 'model',
        'name' => 'name',
        'resource' => 'resource',
        'serviceType' => 'serviceType',
        'status' => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->model) {
            $this->model->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['model'])) {
            $model->model = model_::fromMap($map['model']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resource'])) {
            $model->resource = resource::fromMap($map['resource']);
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
