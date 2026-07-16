<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $authConfigId;

    /**
     * @var string
     */
    public $authConfigProduct;

    /**
     * @var string
     */
    public $authConfigVendor;

    /**
     * @var string
     */
    public $dataConnectorConfig;

    /**
     * @var string
     */
    public $dataConnectorId;

    /**
     * @var string
     */
    public $dataConnectorStatus;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'authConfigId' => 'AuthConfigId',
        'authConfigProduct' => 'AuthConfigProduct',
        'authConfigVendor' => 'AuthConfigVendor',
        'dataConnectorConfig' => 'DataConnectorConfig',
        'dataConnectorId' => 'DataConnectorId',
        'dataConnectorStatus' => 'DataConnectorStatus',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfigId) {
            $res['AuthConfigId'] = $this->authConfigId;
        }

        if (null !== $this->authConfigProduct) {
            $res['AuthConfigProduct'] = $this->authConfigProduct;
        }

        if (null !== $this->authConfigVendor) {
            $res['AuthConfigVendor'] = $this->authConfigVendor;
        }

        if (null !== $this->dataConnectorConfig) {
            $res['DataConnectorConfig'] = $this->dataConnectorConfig;
        }

        if (null !== $this->dataConnectorId) {
            $res['DataConnectorId'] = $this->dataConnectorId;
        }

        if (null !== $this->dataConnectorStatus) {
            $res['DataConnectorStatus'] = $this->dataConnectorStatus;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['AuthConfigId'])) {
            $model->authConfigId = $map['AuthConfigId'];
        }

        if (isset($map['AuthConfigProduct'])) {
            $model->authConfigProduct = $map['AuthConfigProduct'];
        }

        if (isset($map['AuthConfigVendor'])) {
            $model->authConfigVendor = $map['AuthConfigVendor'];
        }

        if (isset($map['DataConnectorConfig'])) {
            $model->dataConnectorConfig = $map['DataConnectorConfig'];
        }

        if (isset($map['DataConnectorId'])) {
            $model->dataConnectorId = $map['DataConnectorId'];
        }

        if (isset($map['DataConnectorStatus'])) {
            $model->dataConnectorStatus = $map['DataConnectorStatus'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
