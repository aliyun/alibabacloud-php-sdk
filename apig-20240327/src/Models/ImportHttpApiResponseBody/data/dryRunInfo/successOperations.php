<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ImportHttpApiResponseBody\data\dryRunInfo;

use AlibabaCloud\Tea\Model;

class successOperations extends Model
{
    /**
     * @description The action that will be performed for the operation after the dry run.
     *
     *   Create: The operation is created.
     *   Update: The operation is updated.
     *
     * @example Create
     *
     * @var string
     */
    public $action;

    /**
     * @description The HTTP method of the operation.
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The operation name.
     *
     * @example CreateUser
     *
     * @var string
     */
    public $name;

    /**
     * @description The operation path.
     *
     * @example /v1/users
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'action' => 'action',
        'method' => 'method',
        'name' => 'name',
        'path' => 'path',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
