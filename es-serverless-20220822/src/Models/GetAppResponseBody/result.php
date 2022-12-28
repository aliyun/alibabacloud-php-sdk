<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 代表资源名称的资源属性字段
     *
     * @example es-severless-test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2022-12-27T07:09:11.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 应用备注
     *
     * @var string
     */
    public $description;

    /**
     * @description 流量限流额
     *
     * @example ***
     *
     * @var string
     */
    public $flowQuota;

    /**
     * @description OwnerID账号ID
     *
     * @example *******7595
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description 代表region的资源属性字段
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 代表资源状态的资源属性字段
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description 存储限流额
     *
     * @example ***
     *
     * @var string
     */
    public $storageQuota;
    protected $_name = [
        'appName'      => 'appName',
        'createTime'   => 'createTime',
        'description'  => 'description',
        'flowQuota'    => 'flowQuota',
        'ownerId'      => 'ownerId',
        'regionId'     => 'regionId',
        'status'       => 'status',
        'storageQuota' => 'storageQuota',
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
        if (null !== $this->flowQuota) {
            $res['flowQuota'] = $this->flowQuota;
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
        if (null !== $this->storageQuota) {
            $res['storageQuota'] = $this->storageQuota;
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
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['flowQuota'])) {
            $model->flowQuota = $map['flowQuota'];
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
        if (isset($map['storageQuota'])) {
            $model->storageQuota = $map['storageQuota'];
        }

        return $model;
    }
}
