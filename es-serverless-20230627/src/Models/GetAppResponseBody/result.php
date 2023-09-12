<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example test-app-abc
     *
     * @var string
     */
    public $appId;

    /**
     * @example es-severless-test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 2022-08-15T11:20:52.370Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @example 2022-08-15T11:21:50.000Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example *******7595
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @example 7.10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'appId'        => 'appId',
        'appName'      => 'appName',
        'createTime'   => 'createTime',
        'description'  => 'description',
        'instanceId'   => 'instanceId',
        'modifiedTime' => 'modifiedTime',
        'ownerId'      => 'ownerId',
        'regionId'     => 'regionId',
        'status'       => 'status',
        'version'      => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
