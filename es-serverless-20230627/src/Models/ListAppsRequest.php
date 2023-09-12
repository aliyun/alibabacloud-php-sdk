<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Tea\Model;

class ListAppsRequest extends Model
{
    /**
     * @example es-severless-test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 2023-08-29T02:37:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example metrics-logs-online
     *
     * @var string
     */
    public $description;

    /**
     * @example desc
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appName'     => 'appName',
        'createTime'  => 'createTime',
        'description' => 'description',
        'orderType'   => 'orderType',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
