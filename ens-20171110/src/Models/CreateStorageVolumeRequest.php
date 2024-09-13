<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateStorageVolumeRequest extends Model
{
    /**
     * @description The password of the CHAP protocol.
     *
     * @example Password
     *
     * @var string
     */
    public $authPassword;

    /**
     * @description The authentication protocol. Set the value to **CHAP**.
     *
     * @example CHAP
     *
     * @var string
     */
    public $authProtocol;

    /**
     * @description The username of the CHAP protocol.
     *
     * @example User
     *
     * @var string
     */
    public $authUser;

    /**
     * @description The description of the volume. The description must be 2 to 128 characters in length. The description cannot start with `http://` or `https://`.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the node.
     *
     * This parameter is required.
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the gateway.
     *
     * This parameter is required.
     * @example sgw-****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Specifies whether to enable authentication. Valid values:
     *
     *   **1**: enable authentication.
     *   **0** (default): disable authentication.
     *
     * @example 0
     *
     * @var string
     */
    public $isAuth;

    /**
     * @description Specifies whether to enable the volume. Valid values:
     *
     *   **1** (default): enable the volume.
     *   **0**: disable the volume.
     *
     * @example 1
     *
     * @var string
     */
    public $isEnable;

    /**
     * @description The ID of the storage medium.
     *
     * This parameter is required.
     * @example si-****
     *
     * @var string
     */
    public $storageId;

    /**
     * @description The name of the volume. The name must be 2 to 128 characters in length. The name cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testVolumeName
     *
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'authPassword' => 'AuthPassword',
        'authProtocol' => 'AuthProtocol',
        'authUser'     => 'AuthUser',
        'description'  => 'Description',
        'ensRegionId'  => 'EnsRegionId',
        'gatewayId'    => 'GatewayId',
        'isAuth'       => 'IsAuth',
        'isEnable'     => 'IsEnable',
        'storageId'    => 'StorageId',
        'volumeName'   => 'VolumeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPassword) {
            $res['AuthPassword'] = $this->authPassword;
        }
        if (null !== $this->authProtocol) {
            $res['AuthProtocol'] = $this->authProtocol;
        }
        if (null !== $this->authUser) {
            $res['AuthUser'] = $this->authUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->isAuth) {
            $res['IsAuth'] = $this->isAuth;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->storageId) {
            $res['StorageId'] = $this->storageId;
        }
        if (null !== $this->volumeName) {
            $res['VolumeName'] = $this->volumeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStorageVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPassword'])) {
            $model->authPassword = $map['AuthPassword'];
        }
        if (isset($map['AuthProtocol'])) {
            $model->authProtocol = $map['AuthProtocol'];
        }
        if (isset($map['AuthUser'])) {
            $model->authUser = $map['AuthUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IsAuth'])) {
            $model->isAuth = $map['IsAuth'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['StorageId'])) {
            $model->storageId = $map['StorageId'];
        }
        if (isset($map['VolumeName'])) {
            $model->volumeName = $map['VolumeName'];
        }

        return $model;
    }
}
