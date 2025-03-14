<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyServerlessAuthToMachineRequest extends Model
{
    /**
     * @description Application query condition.
     *
     * @example **7ad7e3a
     *
     * @var string
     */
    public $appCriteria;

    /**
     * @description Instance type. Values:
     * - **SERVERLESS**: Serverless asset
     *
     * @example SERVERLESS
     *
     * @var string
     */
    public $authItem;

    /**
     * @description Enable auto-binding. Values:
     *
     * - **0**: Off
     * - **1**: On
     *
     * @example 1
     *
     * @var int
     */
    public $autoBind;

    /**
     * @description Whether to bind all. Default is **false**. Values:
     *
     * - **true**: Yes
     * - **false**: No
     *
     * @example false
     *
     * @var bool
     */
    public $bindAll;

    /**
     * @description List of application IDs to be bound.
     *
     * > Obtained through the [ListMachineApps](~~ListMachineApps~~) interface.
     *
     * @var string[]
     */
    public $bindAppList;

    /**
     * @description Type of asset to operate on. Values:
     * - **INSTANCE**: Instance
     * - **APP**: Application
     *
     * @example APP
     *
     * @var string
     */
    public $bindAssetType;

    /**
     * @description List of asset UUIDs to be bound.
     *
     * @var string[]
     */
    public $bindUuidList;

    /**
     * @description Set the conditions for searching assets. This parameter is in JSON format, and case sensitivity should be noted when entering parameters.
     * > Supports searching assets using instance ID, instance name, VPC ID, region, public IP address, etc. You can call the [DescribeCriteria](~~DescribeCriteria~~) interface to query supported search conditions.
     *
     * @example [{"name":"vulStatus","value":"YES","logicalExp":"AND"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description Set the logical relationship between multiple search conditions. Values:
     * - **OR**: Indicates an **or** relationship between multiple conditions.
     * - **AND**: Indicates an **and** relationship between multiple conditions.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description NTM version code, used for pre-binding.
     *
     * @example level2
     *
     * @var string
     */
    public $ntmVersion;

    /**
     * @description Whether it is a pre-bind operation. Values:
     *
     * - **0**: No
     * - **1**: Yes
     * > After enabling pre-binding, the specified server will automatically bind the corresponding version\\"s authorization count after the purchase is completed.
     * @example 1
     *
     * @var int
     */
    public $preBind;

    /**
     * @description Pre-bind order ID.
     *
     * @example 233016**0482
     *
     * @var int
     */
    public $preBindOrderId;

    /**
     * @description UID of the associated resource directory.
     *
     * @example 123456
     *
     * @var int
     */
    public $resourceDirectoryUid;

    /**
     * @description List of application IDs to be unbound.
     *
     * > Obtained through the [ListMachineApps](~~ListMachineApps~~) interface.
     *
     * @var string[]
     */
    public $unBindAppList;

    /**
     * @description List of asset UUIDs to be unbound.
     *
     * @var string[]
     */
    public $unBindUuidList;
    protected $_name = [
        'appCriteria' => 'AppCriteria',
        'authItem' => 'AuthItem',
        'autoBind' => 'AutoBind',
        'bindAll' => 'BindAll',
        'bindAppList' => 'BindAppList',
        'bindAssetType' => 'BindAssetType',
        'bindUuidList' => 'BindUuidList',
        'criteria' => 'Criteria',
        'logicalExp' => 'LogicalExp',
        'ntmVersion' => 'NtmVersion',
        'preBind' => 'PreBind',
        'preBindOrderId' => 'PreBindOrderId',
        'resourceDirectoryUid' => 'ResourceDirectoryUid',
        'unBindAppList' => 'UnBindAppList',
        'unBindUuidList' => 'UnBindUuidList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCriteria) {
            $res['AppCriteria'] = $this->appCriteria;
        }
        if (null !== $this->authItem) {
            $res['AuthItem'] = $this->authItem;
        }
        if (null !== $this->autoBind) {
            $res['AutoBind'] = $this->autoBind;
        }
        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }
        if (null !== $this->bindAppList) {
            $res['BindAppList'] = $this->bindAppList;
        }
        if (null !== $this->bindAssetType) {
            $res['BindAssetType'] = $this->bindAssetType;
        }
        if (null !== $this->bindUuidList) {
            $res['BindUuidList'] = $this->bindUuidList;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->ntmVersion) {
            $res['NtmVersion'] = $this->ntmVersion;
        }
        if (null !== $this->preBind) {
            $res['PreBind'] = $this->preBind;
        }
        if (null !== $this->preBindOrderId) {
            $res['PreBindOrderId'] = $this->preBindOrderId;
        }
        if (null !== $this->resourceDirectoryUid) {
            $res['ResourceDirectoryUid'] = $this->resourceDirectoryUid;
        }
        if (null !== $this->unBindAppList) {
            $res['UnBindAppList'] = $this->unBindAppList;
        }
        if (null !== $this->unBindUuidList) {
            $res['UnBindUuidList'] = $this->unBindUuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyServerlessAuthToMachineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCriteria'])) {
            $model->appCriteria = $map['AppCriteria'];
        }
        if (isset($map['AuthItem'])) {
            $model->authItem = $map['AuthItem'];
        }
        if (isset($map['AutoBind'])) {
            $model->autoBind = $map['AutoBind'];
        }
        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }
        if (isset($map['BindAppList'])) {
            if (!empty($map['BindAppList'])) {
                $model->bindAppList = $map['BindAppList'];
            }
        }
        if (isset($map['BindAssetType'])) {
            $model->bindAssetType = $map['BindAssetType'];
        }
        if (isset($map['BindUuidList'])) {
            if (!empty($map['BindUuidList'])) {
                $model->bindUuidList = $map['BindUuidList'];
            }
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['NtmVersion'])) {
            $model->ntmVersion = $map['NtmVersion'];
        }
        if (isset($map['PreBind'])) {
            $model->preBind = $map['PreBind'];
        }
        if (isset($map['PreBindOrderId'])) {
            $model->preBindOrderId = $map['PreBindOrderId'];
        }
        if (isset($map['ResourceDirectoryUid'])) {
            $model->resourceDirectoryUid = $map['ResourceDirectoryUid'];
        }
        if (isset($map['UnBindAppList'])) {
            if (!empty($map['UnBindAppList'])) {
                $model->unBindAppList = $map['UnBindAppList'];
            }
        }
        if (isset($map['UnBindUuidList'])) {
            if (!empty($map['UnBindUuidList'])) {
                $model->unBindUuidList = $map['UnBindUuidList'];
            }
        }

        return $model;
    }
}
