<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest\centralizeConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest\dataConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest\policyConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest\resourceDirectory;
use AlibabaCloud\Tea\Model;

class UpsertCollectionPolicyRequest extends Model
{
    /**
     * @var centralizeConfig
     */
    public $centralizeConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $centralizeEnabled;

    /**
     * @description This parameter is required.
     *
     * @example access_log
     *
     * @var string
     */
    public $dataCode;

    /**
     * @var dataConfig
     */
    public $dataConfig;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description This parameter is required.
     *
     * @var policyConfig
     */
    public $policyConfig;

    /**
     * @description This parameter is required.
     *
     * @example your_log_policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @description This parameter is required.
     *
     * @example oss
     *
     * @var string
     */
    public $productCode;

    /**
     * @var resourceDirectory
     */
    public $resourceDirectory;
    protected $_name = [
        'centralizeConfig'  => 'centralizeConfig',
        'centralizeEnabled' => 'centralizeEnabled',
        'dataCode'          => 'dataCode',
        'dataConfig'        => 'dataConfig',
        'enabled'           => 'enabled',
        'policyConfig'      => 'policyConfig',
        'policyName'        => 'policyName',
        'productCode'       => 'productCode',
        'resourceDirectory' => 'resourceDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->centralizeConfig) {
            $res['centralizeConfig'] = null !== $this->centralizeConfig ? $this->centralizeConfig->toMap() : null;
        }
        if (null !== $this->centralizeEnabled) {
            $res['centralizeEnabled'] = $this->centralizeEnabled;
        }
        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }
        if (null !== $this->dataConfig) {
            $res['dataConfig'] = null !== $this->dataConfig ? $this->dataConfig->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->policyConfig) {
            $res['policyConfig'] = null !== $this->policyConfig ? $this->policyConfig->toMap() : null;
        }
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }
        if (null !== $this->resourceDirectory) {
            $res['resourceDirectory'] = null !== $this->resourceDirectory ? $this->resourceDirectory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpsertCollectionPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['centralizeConfig'])) {
            $model->centralizeConfig = centralizeConfig::fromMap($map['centralizeConfig']);
        }
        if (isset($map['centralizeEnabled'])) {
            $model->centralizeEnabled = $map['centralizeEnabled'];
        }
        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }
        if (isset($map['dataConfig'])) {
            $model->dataConfig = dataConfig::fromMap($map['dataConfig']);
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['policyConfig'])) {
            $model->policyConfig = policyConfig::fromMap($map['policyConfig']);
        }
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }
        if (isset($map['resourceDirectory'])) {
            $model->resourceDirectory = resourceDirectory::fromMap($map['resourceDirectory']);
        }

        return $model;
    }
}
