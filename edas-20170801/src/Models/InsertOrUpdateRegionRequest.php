<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class InsertOrUpdateRegionRequest extends Model
{
    /**
     * @description Specifies whether to enable remote debugging. Valid values:
     *
     *   true: enables remote debugging.
     *   false: disables remote debugging.
     *
     * @example true
     *
     * @var bool
     */
    public $debugEnable;

    /**
     * @description The description of the namespace. The description can be up to 128 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to create or modify the namespace. If this parameter is left empty or is set to 0, the namespace is created. Otherwise, the namespace is modified.
     *
     * @example 0
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the MSE registry.
     *
     * @example mse_prepaid_public_cn-tl32n******
     *
     * @var string
     */
    public $mseInstanceId;

    /**
     * @description The name of the namespace. The name can be up to 63 characters in length.
     *
     * @example test_region
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the namespace.
     *
     *   The ID of a custom namespace is in the `Region ID:Namespace identifier` format. Example: cn-beijing:tdy218.
     *   The ID of the default namespace is in the `region ID` format. Example: cn-beijing.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $regionTag;

    /**
     * @description The type of the registry.
     *
     *   default: the shared registry of Enterprise Distributed Application Service (EDAS)
     *   exclusive_mse: a Microservices Engine (MSE) registry
     *
     * @example default
     *
     * @var string
     */
    public $registryType;
    protected $_name = [
        'debugEnable'   => 'DebugEnable',
        'description'   => 'Description',
        'id'            => 'Id',
        'mseInstanceId' => 'MseInstanceId',
        'regionName'    => 'RegionName',
        'regionTag'     => 'RegionTag',
        'registryType'  => 'RegistryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mseInstanceId) {
            $res['MseInstanceId'] = $this->mseInstanceId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertOrUpdateRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MseInstanceId'])) {
            $model->mseInstanceId = $map['MseInstanceId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }

        return $model;
    }
}
