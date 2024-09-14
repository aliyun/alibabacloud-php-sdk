<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigAuditLogRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigAuditLogResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupTaskRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigBackupTaskResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterCertificateRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterCertificateResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterNameRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterNameResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterSubnetShrinkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterWhitelistRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigClusterWhitelistResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigImageRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigImageRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceIpAddressRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceIpAddressResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceRemarkRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceRemarkResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceWhitelistRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ConfigInstanceWhitelistResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CopyImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CopyImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\EnableBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\EnableBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ExportImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ExportImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetAuditLogStatusRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetAuditLogStatusResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetJobRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\GetJobResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeAuditLogResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\InitializeClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\JoinClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\JoinClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\LeaveClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\LeaveClusterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListClustersResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListImagesRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListImagesResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListInstancesRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ListInstancesResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\PauseInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\PauseInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickInitInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\QuickInitInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetBackupRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetBackupResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResetInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RestoreInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\RestoreInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResumeInstanceRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\ResumeInstanceResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SwitchClusterMasterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SwitchClusterMasterResponse;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SyncClusterRequest;
use AlibabaCloud\SDK\Hsm\V20231113\Models\SyncClusterResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Hsm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('hsm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 查询用户地域下审计日志功能开通
     *  *
     * @param ConfigAuditLogRequest $request ConfigAuditLogRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigAuditLogResponse ConfigAuditLogResponse
     */
    public function configAuditLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auditAction)) {
            $query['AuditAction'] = $request->auditAction;
        }
        if (!Utils::isUnset($request->auditOssBucket)) {
            $query['AuditOssBucket'] = $request->auditOssBucket;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigAuditLog',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户地域下审计日志功能开通
     *  *
     * @param ConfigAuditLogRequest $request ConfigAuditLogRequest
     *
     * @return ConfigAuditLogResponse ConfigAuditLogResponse
     */
    public function configAuditLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configAuditLogWithOptions($request, $runtime);
    }

    /**
     * @summary 设置备份名与备注
     *  *
     * @param ConfigBackupRemarkRequest $request ConfigBackupRemarkRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigBackupRemarkResponse ConfigBackupRemarkResponse
     */
    public function configBackupRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigBackupRemark',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigBackupRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置备份名与备注
     *  *
     * @param ConfigBackupRemarkRequest $request ConfigBackupRemarkRequest
     *
     * @return ConfigBackupRemarkResponse ConfigBackupRemarkResponse
     */
    public function configBackupRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configBackupRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary 配置备份自动轮转任务
     *  *
     * @param ConfigBackupTaskRequest $request ConfigBackupTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigBackupTaskResponse ConfigBackupTaskResponse
     */
    public function configBackupTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupHourInDay)) {
            $query['BackupHourInDay'] = $request->backupHourInDay;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupPeriod)) {
            $query['BackupPeriod'] = $request->backupPeriod;
        }
        if (!Utils::isUnset($request->manual2PeriodicList)) {
            $query['Manual2PeriodicList'] = $request->manual2PeriodicList;
        }
        if (!Utils::isUnset($request->periodic2ManualList)) {
            $query['Periodic2ManualList'] = $request->periodic2ManualList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigBackupTask',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigBackupTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置备份自动轮转任务
     *  *
     * @param ConfigBackupTaskRequest $request ConfigBackupTaskRequest
     *
     * @return ConfigBackupTaskResponse ConfigBackupTaskResponse
     */
    public function configBackupTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configBackupTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 国际站配置HSM集群证书
     *  *
     * @param ConfigClusterCertificateRequest $request ConfigClusterCertificateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigClusterCertificateResponse ConfigClusterCertificateResponse
     */
    public function configClusterCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterCertificate)) {
            $body['ClusterCertificate'] = $request->clusterCertificate;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->issuerCertificate)) {
            $body['IssuerCertificate'] = $request->issuerCertificate;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigClusterCertificate',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigClusterCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 国际站配置HSM集群证书
     *  *
     * @param ConfigClusterCertificateRequest $request ConfigClusterCertificateRequest
     *
     * @return ConfigClusterCertificateResponse ConfigClusterCertificateResponse
     */
    public function configClusterCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterCertificateWithOptions($request, $runtime);
    }

    /**
     * @summary 配置集群名称
     *  *
     * @param ConfigClusterNameRequest $request ConfigClusterNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigClusterNameResponse ConfigClusterNameResponse
     */
    public function configClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigClusterName',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigClusterNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置集群名称
     *  *
     * @param ConfigClusterNameRequest $request ConfigClusterNameRequest
     *
     * @return ConfigClusterNameResponse ConfigClusterNameResponse
     */
    public function configClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterNameWithOptions($request, $runtime);
    }

    /**
     * @summary 配置集群子网
     *  *
     * @param ConfigClusterSubnetRequest $tmpReq  ConfigClusterSubnetRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigClusterSubnetResponse ConfigClusterSubnetResponse
     */
    public function configClusterSubnetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConfigClusterSubnetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigClusterSubnet',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigClusterSubnetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置集群子网
     *  *
     * @param ConfigClusterSubnetRequest $request ConfigClusterSubnetRequest
     *
     * @return ConfigClusterSubnetResponse ConfigClusterSubnetResponse
     */
    public function configClusterSubnet($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterSubnetWithOptions($request, $runtime);
    }

    /**
     * @summary 配置集群名称
     *  *
     * @param ConfigClusterWhitelistRequest $request ConfigClusterWhitelistRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigClusterWhitelistResponse ConfigClusterWhitelistResponse
     */
    public function configClusterWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $body['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigClusterWhitelist',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigClusterWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 配置集群名称
     *  *
     * @param ConfigClusterWhitelistRequest $request ConfigClusterWhitelistRequest
     *
     * @return ConfigClusterWhitelistResponse ConfigClusterWhitelistResponse
     */
    public function configClusterWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configClusterWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary 设置镜像备注
     *  *
     * @param ConfigImageRemarkRequest $request ConfigImageRemarkRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigImageRemarkResponse ConfigImageRemarkResponse
     */
    public function configImageRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigImageRemark',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigImageRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置镜像备注
     *  *
     * @param ConfigImageRemarkRequest $request ConfigImageRemarkRequest
     *
     * @return ConfigImageRemarkResponse ConfigImageRemarkResponse
     */
    public function configImageRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configImageRemarkWithOptions($request, $runtime);
    }

    /**
     * @param ConfigInstanceIpAddressRequest $request ConfigInstanceIpAddressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceIpAddressResponse ConfigInstanceIpAddressResponse
     */
    public function configInstanceIpAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $body['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $body['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceIpAddress',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceIpAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigInstanceIpAddressRequest $request ConfigInstanceIpAddressRequest
     *
     * @return ConfigInstanceIpAddressResponse ConfigInstanceIpAddressResponse
     */
    public function configInstanceIpAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceIpAddressWithOptions($request, $runtime);
    }

    /**
     * @param ConfigInstanceRemarkRequest $request ConfigInstanceRemarkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceRemarkResponse ConfigInstanceRemarkResponse
     */
    public function configInstanceRemarkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->remark)) {
            $body['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceRemark',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceRemarkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ConfigInstanceRemarkRequest $request ConfigInstanceRemarkRequest
     *
     * @return ConfigInstanceRemarkResponse ConfigInstanceRemarkResponse
     */
    public function configInstanceRemark($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceRemarkWithOptions($request, $runtime);
    }

    /**
     * @summary TODO 不允许控制台直接修改集群内实例的白名单实现重构
     *  *
     * @param ConfigInstanceWhitelistRequest $request ConfigInstanceWhitelistRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigInstanceWhitelistResponse ConfigInstanceWhitelistResponse
     */
    public function configInstanceWhitelistWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->whitelist)) {
            $body['Whitelist'] = $request->whitelist;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConfigInstanceWhitelist',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigInstanceWhitelistResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary TODO 不允许控制台直接修改集群内实例的白名单实现重构
     *  *
     * @param ConfigInstanceWhitelistRequest $request ConfigInstanceWhitelistRequest
     *
     * @return ConfigInstanceWhitelistResponse ConfigInstanceWhitelistResponse
     */
    public function configInstanceWhitelist($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceWhitelistWithOptions($request, $runtime);
    }

    /**
     * @summary 跨地域复制镜像
     *  *
     * @param CopyImageRequest $request CopyImageRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyImageResponse CopyImageResponse
     */
    public function copyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageUid)) {
            $body['ImageUid'] = $request->imageUid;
        }
        if (!Utils::isUnset($request->targetRegionId)) {
            $body['TargetRegionId'] = $request->targetRegionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyImage',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 跨地域复制镜像
     *  *
     * @param CopyImageRequest $request CopyImageRequest
     *
     * @return CopyImageResponse CopyImageResponse
     */
    public function copyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->masterInstanceId)) {
            $body['MasterInstanceId'] = $request->masterInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary 启用备份
     *  *
     * @param EnableBackupRequest $request EnableBackupRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableBackupResponse EnableBackupResponse
     */
    public function enableBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableBackup',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 启用备份
     *  *
     * @param EnableBackupRequest $request EnableBackupRequest
     *
     * @return EnableBackupResponse EnableBackupResponse
     */
    public function enableBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBackupWithOptions($request, $runtime);
    }

    /**
     * @summary 手动导出镜像
     *  *
     * @param ExportImageRequest $request ExportImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportImageResponse ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportImage',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 手动导出镜像
     *  *
     * @param ExportImageRequest $request ExportImageRequest
     *
     * @return ExportImageResponse ExportImageResponse
     */
    public function exportImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * @summary 查询审计日志功能开通状态
     *  *
     * @param GetAuditLogStatusRequest $request GetAuditLogStatusRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAuditLogStatusResponse GetAuditLogStatusResponse
     */
    public function getAuditLogStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->getOssBucket)) {
            $query['GetOssBucket'] = $request->getOssBucket;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAuditLogStatus',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAuditLogStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询审计日志功能开通状态
     *  *
     * @param GetAuditLogStatusRequest $request GetAuditLogStatusRequest
     *
     * @return GetAuditLogStatusResponse GetAuditLogStatusResponse
     */
    public function getAuditLogStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditLogStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 展示用户备份
     *  *
     * @param GetBackupRequest $request GetBackupRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBackupResponse GetBackupResponse
     */
    public function getBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBackup',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示用户备份
     *  *
     * @param GetBackupRequest $request GetBackupRequest
     *
     * @return GetBackupResponse GetBackupResponse
     */
    public function getBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBackupWithOptions($request, $runtime);
    }

    /**
     * @param GetClusterRequest $request GetClusterRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetClusterRequest $request GetClusterRequest
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 展示备份下的用户镜像
     *  *
     * @param GetImageRequest $request GetImageRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetImage',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示备份下的用户镜像
     *  *
     * @param GetImageRequest $request GetImageRequest
     *
     * @return GetImageResponse GetImageResponse
     */
    public function getImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageWithOptions($request, $runtime);
    }

    /**
     * @param GetInstanceRequest $request GetInstanceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetInstanceRequest $request GetInstanceRequest
     *
     * @return GetInstanceResponse GetInstanceResponse
     */
    public function getInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取异步任务执行信息
     *  *
     * @param GetJobRequest  $request GetJobRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取异步任务执行信息
     *  *
     * @param GetJobRequest $request GetJobRequest
     *
     * @return GetJobResponse GetJobResponse
     */
    public function getJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobWithOptions($request, $runtime);
    }

    /**
     * @summary 为用户创建审计日志的服务关联角色
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeAuditLogResponse InitializeAuditLogResponse
     */
    public function initializeAuditLogWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'InitializeAuditLog',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeAuditLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 为用户创建审计日志的服务关联角色
     *  *
     * @return InitializeAuditLogResponse InitializeAuditLogResponse
     */
    public function initializeAuditLog()
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeAuditLogWithOptions($runtime);
    }

    /**
     * @summary 初始化集群（原activeCluster）
     *  *
     * @param InitializeClusterRequest $request InitializeClusterRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return InitializeClusterResponse InitializeClusterResponse
     */
    public function initializeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InitializeCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InitializeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 初始化集群（原activeCluster）
     *  *
     * @param InitializeClusterRequest $request InitializeClusterRequest
     *
     * @return InitializeClusterResponse InitializeClusterResponse
     */
    public function initializeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->initializeClusterWithOptions($request, $runtime);
    }

    /**
     * @param JoinClusterRequest $request JoinClusterRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinClusterResponse JoinClusterResponse
     */
    public function joinClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'JoinCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param JoinClusterRequest $request JoinClusterRequest
     *
     * @return JoinClusterResponse JoinClusterResponse
     */
    public function joinCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinClusterWithOptions($request, $runtime);
    }

    /**
     * @param LeaveClusterRequest $request LeaveClusterRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return LeaveClusterResponse LeaveClusterResponse
     */
    public function leaveClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LeaveCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LeaveClusterRequest $request LeaveClusterRequest
     *
     * @return LeaveClusterResponse LeaveClusterResponse
     */
    public function leaveCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 查询备份列表
     *  *
     * @param ListBackupsRequest $request ListBackupsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBackupsResponse ListBackupsResponse
     */
    public function listBackupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBackups',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBackupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询备份列表
     *  *
     * @param ListBackupsRequest $request ListBackupsRequest
     *
     * @return ListBackupsResponse ListBackupsResponse
     */
    public function listBackups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBackupsWithOptions($request, $runtime);
    }

    /**
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListClusters',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询用户镜像列表
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询用户镜像列表
     *  *
     * @param ListImagesRequest $request ListImagesRequest
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->currentPage)) {
            $body['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstancesRequest $request ListInstancesRequest
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 资源组移动资源
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveResourceGroup',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveResourceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 资源组移动资源
     *  *
     * @param MoveResourceGroupRequest $request MoveResourceGroupRequest
     *
     * @return MoveResourceGroupResponse MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param PauseInstanceRequest $request PauseInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return PauseInstanceResponse PauseInstanceResponse
     */
    public function pauseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PauseInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PauseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PauseInstanceRequest $request PauseInstanceRequest
     *
     * @return PauseInstanceResponse PauseInstanceResponse
     */
    public function pauseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pauseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param QuickInitInstanceRequest $request QuickInitInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return QuickInitInstanceResponse QuickInitInstanceResponse
     */
    public function quickInitInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QuickInitInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuickInitInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuickInitInstanceRequest $request QuickInitInstanceRequest
     *
     * @return QuickInitInstanceResponse QuickInitInstanceResponse
     */
    public function quickInitInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->quickInitInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 重置备份
     *  *
     * @param ResetBackupRequest $request ResetBackupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetBackupResponse ResetBackupResponse
     */
    public function resetBackupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetBackup',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetBackupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重置备份
     *  *
     * @param ResetBackupRequest $request ResetBackupRequest
     *
     * @return ResetBackupResponse ResetBackupResponse
     */
    public function resetBackup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetBackupWithOptions($request, $runtime);
    }

    /**
     * @param ResetInstanceRequest $request ResetInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetInstanceResponse ResetInstanceResponse
     */
    public function resetInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetInstanceRequest $request ResetInstanceRequest
     *
     * @return ResetInstanceResponse ResetInstanceResponse
     */
    public function resetInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestoreInstanceRequest $request RestoreInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RestoreInstanceResponse RestoreInstanceResponse
     */
    public function restoreInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RestoreInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestoreInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestoreInstanceRequest $request RestoreInstanceRequest
     *
     * @return RestoreInstanceResponse RestoreInstanceResponse
     */
    public function restoreInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restoreInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeInstanceRequest $request ResumeInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeInstanceResponse ResumeInstanceResponse
     */
    public function resumeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResumeInstance',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeInstanceRequest $request ResumeInstanceRequest
     *
     * @return ResumeInstanceResponse ResumeInstanceResponse
     */
    public function resumeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SwitchClusterMasterRequest $request SwitchClusterMasterRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SwitchClusterMasterResponse SwitchClusterMasterResponse
     */
    public function switchClusterMasterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SwitchClusterMaster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SwitchClusterMasterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SwitchClusterMasterRequest $request SwitchClusterMasterRequest
     *
     * @return SwitchClusterMasterResponse SwitchClusterMasterResponse
     */
    public function switchClusterMaster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->switchClusterMasterWithOptions($request, $runtime);
    }

    /**
     * @param SyncClusterRequest $request SyncClusterRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncClusterResponse SyncClusterResponse
     */
    public function syncClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SyncCluster',
            'version'     => '2023-11-13',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncClusterRequest $request SyncClusterRequest
     *
     * @return SyncClusterResponse SyncClusterResponse
     */
    public function syncCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncClusterWithOptions($request, $runtime);
    }
}
