<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateStorageVolumeRequest extends Model
{
    /**
     * @var string
     */
    public $authPassword;

    /**
     * @var string
     */
    public $authProtocol;

    /**
     * @var string
     */
    public $authUser;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $isAuth;

    /**
     * @var string
     */
    public $isEnable;

    /**
     * @var string
     */
    public $storageId;

    /**
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'authPassword' => 'AuthPassword',
        'authProtocol' => 'AuthProtocol',
        'authUser' => 'AuthUser',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'gatewayId' => 'GatewayId',
        'isAuth' => 'IsAuth',
        'isEnable' => 'IsEnable',
        'storageId' => 'StorageId',
        'volumeName' => 'VolumeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
