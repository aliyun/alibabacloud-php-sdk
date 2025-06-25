<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute\ports;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponseBody\instanceAttribute\whiteListPolicies;

class instanceAttribute extends Model
{
    /**
     * @var string
     */
    public $appOperationModule;

    /**
     * @var string[]
     */
    public $authorizedSecurityGroups;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackage;

    /**
     * @var string
     */
    public $dbOperationModule;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $HSMModule;

    /**
     * @var string
     */
    public $IDaaSModule;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $kmsSecretModule;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $modifyPasswordModule;

    /**
     * @var string
     */
    public $networkProxyModule;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var string[]
     */
    public $privateExportIps;

    /**
     * @var string[]
     */
    public $privateWhiteList;

    /**
     * @var string[]
     */
    public $publicExportIps;

    /**
     * @var string[]
     */
    public $publicIps;

    /**
     * @var bool
     */
    public $publicNetworkAccess;

    /**
     * @var string[]
     */
    public $publicWhiteList;

    /**
     * @var string
     */
    public $RDModule;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string[]
     */
    public $routerRules;

    /**
     * @var string
     */
    public $scriptDeliverModule;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $slaveVswitchId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $webTerminalModule;

    /**
     * @var whiteListPolicies[]
     */
    public $whiteListPolicies;
    protected $_name = [
        'appOperationModule' => 'AppOperationModule',
        'authorizedSecurityGroups' => 'AuthorizedSecurityGroups',
        'bandwidth' => 'Bandwidth',
        'bandwidthPackage' => 'BandwidthPackage',
        'dbOperationModule' => 'DbOperationModule',
        'description' => 'Description',
        'eniInstanceId' => 'EniInstanceId',
        'expireTime' => 'ExpireTime',
        'HSMModule' => 'HSMModule',
        'IDaaSModule' => 'IDaaSModule',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'kmsSecretModule' => 'KmsSecretModule',
        'licenseCode' => 'LicenseCode',
        'modifyPasswordModule' => 'ModifyPasswordModule',
        'networkProxyModule' => 'NetworkProxyModule',
        'ports' => 'Ports',
        'privateExportIps' => 'PrivateExportIps',
        'privateWhiteList' => 'PrivateWhiteList',
        'publicExportIps' => 'PublicExportIps',
        'publicIps' => 'PublicIps',
        'publicNetworkAccess' => 'PublicNetworkAccess',
        'publicWhiteList' => 'PublicWhiteList',
        'RDModule' => 'RDModule',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routerRules' => 'RouterRules',
        'scriptDeliverModule' => 'ScriptDeliverModule',
        'securityGroupIds' => 'SecurityGroupIds',
        'slaveVswitchId' => 'SlaveVswitchId',
        'startTime' => 'StartTime',
        'storage' => 'Storage',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'webTerminalModule' => 'WebTerminalModule',
        'whiteListPolicies' => 'WhiteListPolicies',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedSecurityGroups)) {
            Model::validateArray($this->authorizedSecurityGroups);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->privateExportIps)) {
            Model::validateArray($this->privateExportIps);
        }
        if (\is_array($this->privateWhiteList)) {
            Model::validateArray($this->privateWhiteList);
        }
        if (\is_array($this->publicExportIps)) {
            Model::validateArray($this->publicExportIps);
        }
        if (\is_array($this->publicIps)) {
            Model::validateArray($this->publicIps);
        }
        if (\is_array($this->publicWhiteList)) {
            Model::validateArray($this->publicWhiteList);
        }
        if (\is_array($this->routerRules)) {
            Model::validateArray($this->routerRules);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->whiteListPolicies)) {
            Model::validateArray($this->whiteListPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appOperationModule) {
            $res['AppOperationModule'] = $this->appOperationModule;
        }

        if (null !== $this->authorizedSecurityGroups) {
            if (\is_array($this->authorizedSecurityGroups)) {
                $res['AuthorizedSecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->authorizedSecurityGroups as $item1) {
                    $res['AuthorizedSecurityGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = $this->bandwidthPackage;
        }

        if (null !== $this->dbOperationModule) {
            $res['DbOperationModule'] = $this->dbOperationModule;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->HSMModule) {
            $res['HSMModule'] = $this->HSMModule;
        }

        if (null !== $this->IDaaSModule) {
            $res['IDaaSModule'] = $this->IDaaSModule;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }

        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->kmsSecretModule) {
            $res['KmsSecretModule'] = $this->kmsSecretModule;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        if (null !== $this->modifyPasswordModule) {
            $res['ModifyPasswordModule'] = $this->modifyPasswordModule;
        }

        if (null !== $this->networkProxyModule) {
            $res['NetworkProxyModule'] = $this->networkProxyModule;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['Ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['Ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateExportIps) {
            if (\is_array($this->privateExportIps)) {
                $res['PrivateExportIps'] = [];
                $n1 = 0;
                foreach ($this->privateExportIps as $item1) {
                    $res['PrivateExportIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privateWhiteList) {
            if (\is_array($this->privateWhiteList)) {
                $res['PrivateWhiteList'] = [];
                $n1 = 0;
                foreach ($this->privateWhiteList as $item1) {
                    $res['PrivateWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicExportIps) {
            if (\is_array($this->publicExportIps)) {
                $res['PublicExportIps'] = [];
                $n1 = 0;
                foreach ($this->publicExportIps as $item1) {
                    $res['PublicExportIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicIps) {
            if (\is_array($this->publicIps)) {
                $res['PublicIps'] = [];
                $n1 = 0;
                foreach ($this->publicIps as $item1) {
                    $res['PublicIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicNetworkAccess) {
            $res['PublicNetworkAccess'] = $this->publicNetworkAccess;
        }

        if (null !== $this->publicWhiteList) {
            if (\is_array($this->publicWhiteList)) {
                $res['PublicWhiteList'] = [];
                $n1 = 0;
                foreach ($this->publicWhiteList as $item1) {
                    $res['PublicWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->RDModule) {
            $res['RDModule'] = $this->RDModule;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->routerRules) {
            if (\is_array($this->routerRules)) {
                $res['RouterRules'] = [];
                $n1 = 0;
                foreach ($this->routerRules as $item1) {
                    $res['RouterRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scriptDeliverModule) {
            $res['ScriptDeliverModule'] = $this->scriptDeliverModule;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slaveVswitchId) {
            $res['SlaveVswitchId'] = $this->slaveVswitchId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->webTerminalModule) {
            $res['WebTerminalModule'] = $this->webTerminalModule;
        }

        if (null !== $this->whiteListPolicies) {
            if (\is_array($this->whiteListPolicies)) {
                $res['WhiteListPolicies'] = [];
                $n1 = 0;
                foreach ($this->whiteListPolicies as $item1) {
                    $res['WhiteListPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppOperationModule'])) {
            $model->appOperationModule = $map['AppOperationModule'];
        }

        if (isset($map['AuthorizedSecurityGroups'])) {
            if (!empty($map['AuthorizedSecurityGroups'])) {
                $model->authorizedSecurityGroups = [];
                $n1 = 0;
                foreach ($map['AuthorizedSecurityGroups'] as $item1) {
                    $model->authorizedSecurityGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BandwidthPackage'])) {
            $model->bandwidthPackage = $map['BandwidthPackage'];
        }

        if (isset($map['DbOperationModule'])) {
            $model->dbOperationModule = $map['DbOperationModule'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HSMModule'])) {
            $model->HSMModule = $map['HSMModule'];
        }

        if (isset($map['IDaaSModule'])) {
            $model->IDaaSModule = $map['IDaaSModule'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }

        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }

        if (isset($map['KmsSecretModule'])) {
            $model->kmsSecretModule = $map['KmsSecretModule'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        if (isset($map['ModifyPasswordModule'])) {
            $model->modifyPasswordModule = $map['ModifyPasswordModule'];
        }

        if (isset($map['NetworkProxyModule'])) {
            $model->networkProxyModule = $map['NetworkProxyModule'];
        }

        if (isset($map['Ports'])) {
            if (!empty($map['Ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['Ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivateExportIps'])) {
            if (!empty($map['PrivateExportIps'])) {
                $model->privateExportIps = [];
                $n1 = 0;
                foreach ($map['PrivateExportIps'] as $item1) {
                    $model->privateExportIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivateWhiteList'])) {
            if (!empty($map['PrivateWhiteList'])) {
                $model->privateWhiteList = [];
                $n1 = 0;
                foreach ($map['PrivateWhiteList'] as $item1) {
                    $model->privateWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicExportIps'])) {
            if (!empty($map['PublicExportIps'])) {
                $model->publicExportIps = [];
                $n1 = 0;
                foreach ($map['PublicExportIps'] as $item1) {
                    $model->publicExportIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = [];
                $n1 = 0;
                foreach ($map['PublicIps'] as $item1) {
                    $model->publicIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicNetworkAccess'])) {
            $model->publicNetworkAccess = $map['PublicNetworkAccess'];
        }

        if (isset($map['PublicWhiteList'])) {
            if (!empty($map['PublicWhiteList'])) {
                $model->publicWhiteList = [];
                $n1 = 0;
                foreach ($map['PublicWhiteList'] as $item1) {
                    $model->publicWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RDModule'])) {
            $model->RDModule = $map['RDModule'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RouterRules'])) {
            if (!empty($map['RouterRules'])) {
                $model->routerRules = [];
                $n1 = 0;
                foreach ($map['RouterRules'] as $item1) {
                    $model->routerRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScriptDeliverModule'])) {
            $model->scriptDeliverModule = $map['ScriptDeliverModule'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SlaveVswitchId'])) {
            $model->slaveVswitchId = $map['SlaveVswitchId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['WebTerminalModule'])) {
            $model->webTerminalModule = $map['WebTerminalModule'];
        }

        if (isset($map['WhiteListPolicies'])) {
            if (!empty($map['WhiteListPolicies'])) {
                $model->whiteListPolicies = [];
                $n1 = 0;
                foreach ($map['WhiteListPolicies'] as $item1) {
                    $model->whiteListPolicies[$n1] = whiteListPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
