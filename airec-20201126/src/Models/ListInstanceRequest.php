<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceRequest extends Model
{
    /**
     * @description The state of the instance. Valid values: Running, Ready, Initializing, and Starting.
     *
     * @example 1608533404
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the instance. Fuzzy match is supported.
     *
     * @example Test instance
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example The number of entries to return on each page. Valid values: 1 to 50. Default value: 10.
     *
     * @var string
     */
    public $name;

    /**
     * @description GET /openapi/instances?name=test&instanceId=abc&page=1&size=10
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'expiredTime' => 'expiredTime',
        'instanceId'  => 'instanceId',
        'name'        => 'name',
        'page'        => 'page',
        'size'        => 'size',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
