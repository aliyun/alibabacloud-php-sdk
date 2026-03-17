<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class UpdateSmartAccessGatewayOspfRouteRequest extends Model
{
    /**
     * @var int
     */
    public $areaId;

    /**
     * @var string
     */
    public $authenticationType;

    /**
     * @var bool
     */
    public $crossAccount;

    /**
     * @var int
     */
    public $deadTime;

    /**
     * @var int
     */
    public $helloTime;

    /**
     * @var string
     */
    public $interfaceName;

    /**
     * @var string
     */
    public $md5Key;

    /**
     * @var int
     */
    public $md5KeyId;

    /**
     * @var string
     */
    public $networks;

    /**
     * @var int
     */
    public $ospfCost;

    /**
     * @var string
     */
    public $ospfNetworkType;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $redistributeProtocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $sagInsId;

    /**
     * @var string
     */
    public $sagSn;
    protected $_name = [
        'areaId' => 'AreaId',
        'authenticationType' => 'AuthenticationType',
        'crossAccount' => 'CrossAccount',
        'deadTime' => 'DeadTime',
        'helloTime' => 'HelloTime',
        'interfaceName' => 'InterfaceName',
        'md5Key' => 'Md5Key',
        'md5KeyId' => 'Md5KeyId',
        'networks' => 'Networks',
        'ospfCost' => 'OspfCost',
        'ospfNetworkType' => 'OspfNetworkType',
        'password' => 'Password',
        'redistributeProtocol' => 'RedistributeProtocol',
        'regionId' => 'RegionId',
        'resourceUid' => 'ResourceUid',
        'routerId' => 'RouterId',
        'sagInsId' => 'SagInsId',
        'sagSn' => 'SagSn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }

        if (null !== $this->crossAccount) {
            $res['CrossAccount'] = $this->crossAccount;
        }

        if (null !== $this->deadTime) {
            $res['DeadTime'] = $this->deadTime;
        }

        if (null !== $this->helloTime) {
            $res['HelloTime'] = $this->helloTime;
        }

        if (null !== $this->interfaceName) {
            $res['InterfaceName'] = $this->interfaceName;
        }

        if (null !== $this->md5Key) {
            $res['Md5Key'] = $this->md5Key;
        }

        if (null !== $this->md5KeyId) {
            $res['Md5KeyId'] = $this->md5KeyId;
        }

        if (null !== $this->networks) {
            $res['Networks'] = $this->networks;
        }

        if (null !== $this->ospfCost) {
            $res['OspfCost'] = $this->ospfCost;
        }

        if (null !== $this->ospfNetworkType) {
            $res['OspfNetworkType'] = $this->ospfNetworkType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->redistributeProtocol) {
            $res['RedistributeProtocol'] = $this->redistributeProtocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }

        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }

        if (null !== $this->sagInsId) {
            $res['SagInsId'] = $this->sagInsId;
        }

        if (null !== $this->sagSn) {
            $res['SagSn'] = $this->sagSn;
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
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }

        if (isset($map['CrossAccount'])) {
            $model->crossAccount = $map['CrossAccount'];
        }

        if (isset($map['DeadTime'])) {
            $model->deadTime = $map['DeadTime'];
        }

        if (isset($map['HelloTime'])) {
            $model->helloTime = $map['HelloTime'];
        }

        if (isset($map['InterfaceName'])) {
            $model->interfaceName = $map['InterfaceName'];
        }

        if (isset($map['Md5Key'])) {
            $model->md5Key = $map['Md5Key'];
        }

        if (isset($map['Md5KeyId'])) {
            $model->md5KeyId = $map['Md5KeyId'];
        }

        if (isset($map['Networks'])) {
            $model->networks = $map['Networks'];
        }

        if (isset($map['OspfCost'])) {
            $model->ospfCost = $map['OspfCost'];
        }

        if (isset($map['OspfNetworkType'])) {
            $model->ospfNetworkType = $map['OspfNetworkType'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RedistributeProtocol'])) {
            $model->redistributeProtocol = $map['RedistributeProtocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }

        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }

        if (isset($map['SagInsId'])) {
            $model->sagInsId = $map['SagInsId'];
        }

        if (isset($map['SagSn'])) {
            $model->sagSn = $map['SagSn'];
        }

        return $model;
    }
}
