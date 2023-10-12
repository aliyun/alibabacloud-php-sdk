<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\elasticPolicy;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\initConfig;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\internetSlb;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\maintenancePeriod;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\slb;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether Application High Availability Service (AHAS) is activated.
     *
     * @example false
     *
     * @var bool
     */
    public $ahasOn;

    /**
     * @description The version of the application.
     *
     * @example 1.0.1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description Indicates whether Application Real-Time Monitoring Service (ARMS) is activated.
     *
     * @example false
     *
     * @var bool
     */
    public $armsOn;

    /**
     * @description The billing method.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The current version of the gateway.
     *
     * @example 0.1.0-mse-gw
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $elastic;

    /**
     * @example mse_ingresselastic_public_cn-uqm3d0*****
     *
     * @var string
     */
    public $elasticInstanceId;

    /**
     * @var elasticPolicy
     */
    public $elasticPolicy;

    /**
     * @example 2
     *
     * @var int
     */
    public $elasticReplica;

    /**
     * @example CronHPA
     *
     * @var string
     */
    public $elasticType;

    /**
     * @description The time when the instance expires.
     *
     * @example 4792060800000
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The gateway type.
     *
     * @example Ingress
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-5017305290e14cebb8ce5cb6a4****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The version of the gateway.
     *
     * @example 1.2.9
     *
     * @var string
     */
    public $gatewayVersion;

    /**
     * @description The time when the gateway was created.
     *
     * @example 2021-09-13 19:24:23
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the gateway was modified.
     *
     * @example 2021-09-13 19:24:23
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The gateway ID.
     *
     * @example 153
     *
     * @var int
     */
    public $id;

    /**
     * @description The configurations.
     *
     * @var initConfig
     */
    public $initConfig;

    /**
     * @description The instance ID.
     *
     * @example mse_ingresspost-cn-0jbvrcex****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The details of the Internet-facing SLB instances.
     *
     * @var internetSlb[]
     */
    public $internetSlb;

    /**
     * @description The latest version of the gateway.
     *
     * @example 0.1.0-mse-gw
     *
     * @var string
     */
    public $latestVersion;

    /**
     * @var maintenancePeriod
     */
    public $maintenancePeriod;

    /**
     * @description The resource tag.
     *
     * @example {"tagKey":"tagValue"}
     *
     * @var string
     */
    public $mseTag;

    /**
     * @var string
     */
    public $mseVersion;

    /**
     * @description Indicates whether the instance was forcefully upgraded.
     *
     * @example false
     *
     * @var bool
     */
    public $mustUpgrade;

    /**
     * @description The gateway name.
     *
     * @example tesa-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The user information.
     *
     * @example 18278117654342
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The region in which the gateway resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-97hg87vi****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether rollbacks are allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $rollBack;

    /**
     * @description The details of Server Load Balancer (SLB) instances.
     *
     * @var slb[]
     */
    public $slb;

    /**
     * @description The specifications of the gateway.
     *
     * @example MSE_GTW_1_2_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The gateway state. Valid values:
     *
     *   0: The gateway is being created.
     *   1: The gateway failed to be created.
     *   2: The gateway is running.
     *   3: The gateway is being changed.
     *   4: The gateway is scaling down.
     *   6: The gateway is scaling up.
     *   8: The gateway is being deleted.
     *   9: The gateway is suspended and is to be released.
     *   10: The gateway is restarting.
     *   11: The gateway is being rebuilt.
     *   12: The gateway is being upgraded.
     *   13: The gateway failed to be upgraded.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The description of the gateway state.
     *
     * @example Restarting
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description Indicates whether WebAssembly (Wasm) is supported.
     *
     * @example true
     *
     * @var bool
     */
    public $supportWasm;

    /**
     * @description The tag.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalReplica;

    /**
     * @description Indicates whether the instance was upgraded.
     *
     * @example false
     *
     * @var bool
     */
    public $upgrade;

    /**
     * @example vpc-uf6heojei217tv14*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the secondary vSwitch.
     *
     * @example vsw-bpbrveck45nf****
     *
     * @var string
     */
    public $vswitch2;
    protected $_name = [
        'ahasOn'            => 'AhasOn',
        'appVersion'        => 'AppVersion',
        'armsOn'            => 'ArmsOn',
        'chargeType'        => 'ChargeType',
        'currentVersion'    => 'CurrentVersion',
        'elastic'           => 'Elastic',
        'elasticInstanceId' => 'ElasticInstanceId',
        'elasticPolicy'     => 'ElasticPolicy',
        'elasticReplica'    => 'ElasticReplica',
        'elasticType'       => 'ElasticType',
        'endDate'           => 'EndDate',
        'gatewayType'       => 'GatewayType',
        'gatewayUniqueId'   => 'GatewayUniqueId',
        'gatewayVersion'    => 'GatewayVersion',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'id'                => 'Id',
        'initConfig'        => 'InitConfig',
        'instanceId'        => 'InstanceId',
        'internetSlb'       => 'InternetSlb',
        'latestVersion'     => 'LatestVersion',
        'maintenancePeriod' => 'MaintenancePeriod',
        'mseTag'            => 'MseTag',
        'mseVersion'        => 'MseVersion',
        'mustUpgrade'       => 'MustUpgrade',
        'name'              => 'Name',
        'primaryUser'       => 'PrimaryUser',
        'region'            => 'Region',
        'replica'           => 'Replica',
        'resourceGroupId'   => 'ResourceGroupId',
        'rollBack'          => 'RollBack',
        'slb'               => 'Slb',
        'spec'              => 'Spec',
        'status'            => 'Status',
        'statusDesc'        => 'StatusDesc',
        'supportWasm'       => 'SupportWasm',
        'tag'               => 'Tag',
        'totalReplica'      => 'TotalReplica',
        'upgrade'           => 'Upgrade',
        'vpcId'             => 'VpcId',
        'vswitch2'          => 'Vswitch2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ahasOn) {
            $res['AhasOn'] = $this->ahasOn;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->armsOn) {
            $res['ArmsOn'] = $this->armsOn;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->elastic) {
            $res['Elastic'] = $this->elastic;
        }
        if (null !== $this->elasticInstanceId) {
            $res['ElasticInstanceId'] = $this->elasticInstanceId;
        }
        if (null !== $this->elasticPolicy) {
            $res['ElasticPolicy'] = null !== $this->elasticPolicy ? $this->elasticPolicy->toMap() : null;
        }
        if (null !== $this->elasticReplica) {
            $res['ElasticReplica'] = $this->elasticReplica;
        }
        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gatewayVersion) {
            $res['GatewayVersion'] = $this->gatewayVersion;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->initConfig) {
            $res['InitConfig'] = null !== $this->initConfig ? $this->initConfig->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetSlb) {
            $res['InternetSlb'] = [];
            if (null !== $this->internetSlb && \is_array($this->internetSlb)) {
                $n = 0;
                foreach ($this->internetSlb as $item) {
                    $res['InternetSlb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }
        if (null !== $this->maintenancePeriod) {
            $res['MaintenancePeriod'] = null !== $this->maintenancePeriod ? $this->maintenancePeriod->toMap() : null;
        }
        if (null !== $this->mseTag) {
            $res['MseTag'] = $this->mseTag;
        }
        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
        }
        if (null !== $this->mustUpgrade) {
            $res['MustUpgrade'] = $this->mustUpgrade;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rollBack) {
            $res['RollBack'] = $this->rollBack;
        }
        if (null !== $this->slb) {
            $res['Slb'] = [];
            if (null !== $this->slb && \is_array($this->slb)) {
                $n = 0;
                foreach ($this->slb as $item) {
                    $res['Slb'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->supportWasm) {
            $res['SupportWasm'] = $this->supportWasm;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->totalReplica) {
            $res['TotalReplica'] = $this->totalReplica;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitch2) {
            $res['Vswitch2'] = $this->vswitch2;
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
        if (isset($map['AhasOn'])) {
            $model->ahasOn = $map['AhasOn'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ArmsOn'])) {
            $model->armsOn = $map['ArmsOn'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['Elastic'])) {
            $model->elastic = $map['Elastic'];
        }
        if (isset($map['ElasticInstanceId'])) {
            $model->elasticInstanceId = $map['ElasticInstanceId'];
        }
        if (isset($map['ElasticPolicy'])) {
            $model->elasticPolicy = elasticPolicy::fromMap($map['ElasticPolicy']);
        }
        if (isset($map['ElasticReplica'])) {
            $model->elasticReplica = $map['ElasticReplica'];
        }
        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GatewayVersion'])) {
            $model->gatewayVersion = $map['GatewayVersion'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InitConfig'])) {
            $model->initConfig = initConfig::fromMap($map['InitConfig']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetSlb'])) {
            if (!empty($map['InternetSlb'])) {
                $model->internetSlb = [];
                $n                  = 0;
                foreach ($map['InternetSlb'] as $item) {
                    $model->internetSlb[$n++] = null !== $item ? internetSlb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
        }
        if (isset($map['MaintenancePeriod'])) {
            $model->maintenancePeriod = maintenancePeriod::fromMap($map['MaintenancePeriod']);
        }
        if (isset($map['MseTag'])) {
            $model->mseTag = $map['MseTag'];
        }
        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }
        if (isset($map['MustUpgrade'])) {
            $model->mustUpgrade = $map['MustUpgrade'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RollBack'])) {
            $model->rollBack = $map['RollBack'];
        }
        if (isset($map['Slb'])) {
            if (!empty($map['Slb'])) {
                $model->slb = [];
                $n          = 0;
                foreach ($map['Slb'] as $item) {
                    $model->slb[$n++] = null !== $item ? slb::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['SupportWasm'])) {
            $model->supportWasm = $map['SupportWasm'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TotalReplica'])) {
            $model->totalReplica = $map['TotalReplica'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Vswitch2'])) {
            $model->vswitch2 = $map['Vswitch2'];
        }

        return $model;
    }
}
