<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam\model_;
use AlibabaCloud\SDK\Sls\V20201230\Models\MLServiceParam\resource;
use AlibabaCloud\Tea\Model;

class MLServiceParam extends Model
{
    /**
     * @example 某某服务
     *
     * @var string
     */
    public $description;

    /**
     * @var model_
     */
    public $model;

    /**
     * @example service_name
     *
     * @var string
     */
    public $name;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @example sls_builtin
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example 1695090077
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'description'     => 'description',
        'model'           => 'model',
        'name'            => 'name',
        'resource'        => 'resource',
        'serviceType'     => 'serviceType',
        'status'          => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return MLServiceParam
     */
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
