<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\elasticPolicy;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\gatewayEntry;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\initConfig;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\internetSlb;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\maintenancePeriod;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayResponseBody\data\result\slb;

class result extends Model
{
    /**
     * @var bool
     */
    public $ahasOn;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var bool
     */
    public $armsOn;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var bool
     */
    public $elastic;

    /**
     * @var string
     */
    public $elasticInstanceId;

    /**
     * @var elasticPolicy
     */
    public $elasticPolicy;

    /**
     * @var int
     */
    public $elasticReplica;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var gatewayEntry[]
     */
    public $gatewayEntry;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gatewayVersion;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var initConfig
     */
    public $initConfig;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var internetSlb[]
     */
    public $internetSlb;

    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var maintenancePeriod
     */
    public $maintenancePeriod;

    /**
     * @var string
     */
    public $mseTag;

    /**
     * @var string
     */
    public $mseVersion;

    /**
     * @var bool
     */
    public $mustUpgrade;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $rollBack;

    /**
     * @var slb[]
     */
    public $slb;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var bool
     */
    public $supportWasm;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var int
     */
    public $totalReplica;

    /**
     * @var bool
     */
    public $upgrade;

    /**
     * @var string
     */
    public $versionLifecycle;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitch2;
    protected $_name = [
        'ahasOn' => 'AhasOn',
        'appVersion' => 'AppVersion',
        'armsOn' => 'ArmsOn',
        'chargeType' => 'ChargeType',
        'currentVersion' => 'CurrentVersion',
        'elastic' => 'Elastic',
        'elasticInstanceId' => 'ElasticInstanceId',
        'elasticPolicy' => 'ElasticPolicy',
        'elasticReplica' => 'ElasticReplica',
        'elasticType' => 'ElasticType',
        'endDate' => 'EndDate',
        'gatewayEntry' => 'GatewayEntry',
        'gatewayType' => 'GatewayType',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gatewayVersion' => 'GatewayVersion',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'initConfig' => 'InitConfig',
        'instanceId' => 'InstanceId',
        'internetSlb' => 'InternetSlb',
        'latestVersion' => 'LatestVersion',
        'maintenancePeriod' => 'MaintenancePeriod',
        'mseTag' => 'MseTag',
        'mseVersion' => 'MseVersion',
        'mustUpgrade' => 'MustUpgrade',
        'name' => 'Name',
        'primaryUser' => 'PrimaryUser',
        'region' => 'Region',
        'replica' => 'Replica',
        'resourceGroupId' => 'ResourceGroupId',
        'rollBack' => 'RollBack',
        'slb' => 'Slb',
        'spec' => 'Spec',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'supportWasm' => 'SupportWasm',
        'tag' => 'Tag',
        'totalReplica' => 'TotalReplica',
        'upgrade' => 'Upgrade',
        'versionLifecycle' => 'VersionLifecycle',
        'vpcId' => 'VpcId',
        'vswitch2' => 'Vswitch2',
    ];

    public function validate()
    {
        if (null !== $this->elasticPolicy) {
            $this->elasticPolicy->validate();
        }
        if (\is_array($this->gatewayEntry)) {
            Model::validateArray($this->gatewayEntry);
        }
        if (null !== $this->initConfig) {
            $this->initConfig->validate();
        }
        if (\is_array($this->internetSlb)) {
            Model::validateArray($this->internetSlb);
        }
        if (null !== $this->maintenancePeriod) {
            $this->maintenancePeriod->validate();
        }
        if (\is_array($this->slb)) {
            Model::validateArray($this->slb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ElasticPolicy'] = null !== $this->elasticPolicy ? $this->elasticPolicy->toArray($noStream) : $this->elasticPolicy;
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

        if (null !== $this->gatewayEntry) {
            if (\is_array($this->gatewayEntry)) {
                $res['GatewayEntry'] = [];
                $n1 = 0;
                foreach ($this->gatewayEntry as $item1) {
                    $res['GatewayEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $res['InitConfig'] = null !== $this->initConfig ? $this->initConfig->toArray($noStream) : $this->initConfig;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internetSlb) {
            if (\is_array($this->internetSlb)) {
                $res['InternetSlb'] = [];
                $n1 = 0;
                foreach ($this->internetSlb as $item1) {
                    $res['InternetSlb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
        }

        if (null !== $this->maintenancePeriod) {
            $res['MaintenancePeriod'] = null !== $this->maintenancePeriod ? $this->maintenancePeriod->toArray($noStream) : $this->maintenancePeriod;
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
            if (\is_array($this->slb)) {
                $res['Slb'] = [];
                $n1 = 0;
                foreach ($this->slb as $item1) {
                    $res['Slb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->versionLifecycle) {
            $res['VersionLifecycle'] = $this->versionLifecycle;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitch2) {
            $res['Vswitch2'] = $this->vswitch2;
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

        if (isset($map['GatewayEntry'])) {
            if (!empty($map['GatewayEntry'])) {
                $model->gatewayEntry = [];
                $n1 = 0;
                foreach ($map['GatewayEntry'] as $item1) {
                    $model->gatewayEntry[$n1] = gatewayEntry::fromMap($item1);
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['InternetSlb'] as $item1) {
                    $model->internetSlb[$n1] = internetSlb::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Slb'] as $item1) {
                    $model->slb[$n1] = slb::fromMap($item1);
                    ++$n1;
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

        if (isset($map['VersionLifecycle'])) {
            $model->versionLifecycle = $map['VersionLifecycle'];
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
