<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstanceKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteInstanceKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantStatusRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantStatusResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantStatusShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudMonitorAgentStatusesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudMonitorAgentStatusesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandInvocationsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseErrorLogsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseErrorLogsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceMetricDataRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceMetricDataResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstanceParametersResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeDatabaseSlowLogRecordsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstanceKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstancePasswordsSettingRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstancePasswordsSettingResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstanceVncUrlRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInstanceVncUrlResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationResultResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeMonitorDataRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeMonitorDataResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeSecurityAgentStatusRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeSecurityAgentStatusResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DisableFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DisableFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\EnableFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\EnableFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudMonitorAgentRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudMonitorAgentResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListDisksRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListDisksResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListFirewallRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListImagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListImagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstanceStatusRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstanceStatusResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\LoginInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\LoginInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceDescriptionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceDescriptionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceParameterRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceParameterResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyImageShareStatusRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyImageShareStatusResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyInstanceVncPasswordRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyInstanceVncPasswordResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RebootInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ReleasePublicConnectionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ReleasePublicConnectionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDatabaseAccountPasswordRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDatabaseAccountPasswordResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDiskRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetDiskResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ResetSystemResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RestartDatabaseInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RestartDatabaseInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RunCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RunCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RunCommandShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartDatabaseInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartDatabaseInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartTerminalSessionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StartTerminalSessionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopDatabaseInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopDatabaseInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\StopInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateCommandAttributeRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateCommandAttributeResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateDiskAttributeRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateDiskAttributeResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateInstanceAttributeRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateInstanceAttributeResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateSnapshotAttributeRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpdateSnapshotAttributeResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpgradeInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UpgradeInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UploadInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UploadInstanceKeyPairResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class SWASOPEN extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('swas-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param AllocatePublicConnectionRequest $request AllocatePublicConnectionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AllocatePublicConnectionResponse AllocatePublicConnectionResponse
     */
    public function allocatePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AllocatePublicConnection',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AllocatePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param AllocatePublicConnectionRequest $request AllocatePublicConnectionRequest
     *
     * @return AllocatePublicConnectionResponse AllocatePublicConnectionResponse
     */
    public function allocatePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * @param CreateCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableParameter)) {
            $query['EnableParameter'] = $request->enableParameter;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->workingDir)) {
            $query['WorkingDir'] = $request->workingDir;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCommand',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCommandRequest $request
     *
     * @return CreateCommandResponse
     */
    public function createCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * A custom image is created based on a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](~~199375~~).
     *   * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](~~190452~~).
     *   * > If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     *   * Before you create a custom image, take note of the following items:
     *   * *   The custom image and the corresponding simple application server must reside in the same region.
     *   * *   The maximum number of custom images that can be maintained in an Alibaba Cloud account is triple the number of simple application servers in the account. The value cannot be greater than 15.
     *   * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     *   * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on a snapshot of the server are also released.
     *   * *   If you reset a simple application server by changing the application system or OS of the server or replacing the image of the server, the disk data on the server is cleared. Back up the disk data as needed.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateCustomImageRequest $request CreateCustomImageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomImageResponse CreateCustomImageResponse
     */
    public function createCustomImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataSnapshotId)) {
            $query['DataSnapshotId'] = $request->dataSnapshotId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemSnapshotId)) {
            $query['SystemSnapshotId'] = $request->systemSnapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomImage',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A custom image is created based on a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](~~199375~~).
     *   * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](~~190452~~).
     *   * > If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     *   * Before you create a custom image, take note of the following items:
     *   * *   The custom image and the corresponding simple application server must reside in the same region.
     *   * *   The maximum number of custom images that can be maintained in an Alibaba Cloud account is triple the number of simple application servers in the account. The value cannot be greater than 15.
     *   * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     *   * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on a snapshot of the server are also released.
     *   * *   If you reset a simple application server by changing the application system or OS of the server or replacing the image of the server, the disk data on the server is cleared. Back up the disk data as needed.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateCustomImageRequest $request CreateCustomImageRequest
     *
     * @return CreateCustomImageResponse CreateCustomImageResponse
     */
    public function createCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomImageWithOptions($request, $runtime);
    }

    /**
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *   * ### QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateFirewallRuleRequest $request CreateFirewallRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFirewallRuleResponse CreateFirewallRuleResponse
     */
    public function createFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->ruleProtocol)) {
            $query['RuleProtocol'] = $request->ruleProtocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFirewallRule',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *   * ### QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateFirewallRuleRequest $request CreateFirewallRuleRequest
     *
     * @return CreateFirewallRuleResponse CreateFirewallRuleResponse
     */
    public function createFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *   *
     * @param CreateFirewallRulesRequest $tmpReq  CreateFirewallRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFirewallRulesResponse CreateFirewallRulesResponse
     */
    public function createFirewallRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFirewallRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->firewallRules)) {
            $request->firewallRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->firewallRules, 'FirewallRules', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallRulesShrink)) {
            $query['FirewallRules'] = $request->firewallRulesShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFirewallRules',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *   *
     * @param CreateFirewallRulesRequest $request CreateFirewallRulesRequest
     *
     * @return CreateFirewallRulesResponse CreateFirewallRulesResponse
     */
    public function createFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceKeyPairResponse
     */
    public function createInstanceKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateInstanceKeyPairRequest $request
     *
     * @return CreateInstanceKeyPairResponse
     */
    public function createInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](~~58623~~).
     *   * *   A maximum of 20 simple application servers can be maintained in an Alibaba Cloud account.
     *   * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateInstancesRequest $request CreateInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstancesResponse CreateInstancesResponse
     */
    public function createInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstances',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](~~58623~~).
     *   * *   A maximum of 20 simple application servers can be maintained in an Alibaba Cloud account.
     *   * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateInstancesRequest $request CreateInstancesRequest
     *
     * @return CreateInstancesResponse CreateInstancesResponse
     */
    public function createInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancesWithOptions($request, $runtime);
    }

    /**
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental operations on instances, recover data after network attacks, and create custom images.
     *   * > You are not charged for creating snapshots for disks of simple application servers.
     *   * ### Precautions
     *   * *   You can create up to three snapshots for disks of each simple application server.
     *   * *   The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple the number of simple application servers that you maintain. The value cannot be greater than 15.
     *   * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     *   * *   If you reset the simple application server after you create a snapshot for a server, the snapshot is retained but cannot be used to roll back the disks of the server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental operations on instances, recover data after network attacks, and create custom images.
     *   * > You are not charged for creating snapshots for disks of simple application servers.
     *   * ### Precautions
     *   * *   You can create up to three snapshots for disks of each simple application server.
     *   * *   The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple the number of simple application servers that you maintain. The value cannot be greater than 15.
     *   * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     *   * *   If you reset the simple application server after you create a snapshot for a server, the snapshot is retained but cannot be used to roll back the disks of the server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCommand',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCommandRequest $request
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommandWithOptions($request, $runtime);
    }

    /**
     * You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *   * > If a custom image is shared to Elastic Compute Service (ECS), you must unshare the image before you can delete it. After you unshare the custom image, you cannot query the custom image by using the ECS console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](~~199378~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteCustomImageRequest $request DeleteCustomImageRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomImageResponse DeleteCustomImageResponse
     */
    public function deleteCustomImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomImage',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *   * > If a custom image is shared to Elastic Compute Service (ECS), you must unshare the image before you can delete it. After you unshare the custom image, you cannot query the custom image by using the ECS console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](~~199378~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteCustomImageRequest $request DeleteCustomImageRequest
     *
     * @return DeleteCustomImageResponse DeleteCustomImageResponse
     */
    public function deleteCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomImageWithOptions($request, $runtime);
    }

    /**
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteFirewallRuleRequest $request DeleteFirewallRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFirewallRuleResponse DeleteFirewallRuleResponse
     */
    public function deleteFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallRule',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteFirewallRuleRequest $request DeleteFirewallRuleRequest
     *
     * @return DeleteFirewallRuleResponse DeleteFirewallRuleResponse
     */
    public function deleteFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteInstanceKeyPairResponse
     */
    public function deleteInstanceKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstanceKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteInstanceKeyPairRequest $request
     *
     * @return DeleteInstanceKeyPairResponse
     */
    public function deleteInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * You can delete a snapshot if you no longer need it.
     *   * > If a custom image was created based on the snapshot, delete the custom image before you delete the snapshot.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can delete a snapshot if you no longer need it.
     *   * > If a custom image was created based on the snapshot, delete the custom image before you delete the snapshot.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnapshotsResponse
     */
    public function deleteSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshots',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSnapshotsRequest $request
     *
     * @return DeleteSnapshotsResponse
     */
    public function deleteSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotsWithOptions($request, $runtime);
    }

    /**
     * By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *   *
     * @param DescribeCloudAssistantStatusRequest $tmpReq  DescribeCloudAssistantStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudAssistantStatusResponse DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatusWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCloudAssistantStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeCloudAssistantStatus',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudAssistantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *   *
     * @param DescribeCloudAssistantStatusRequest $request DescribeCloudAssistantStatusRequest
     *
     * @return DescribeCloudAssistantStatusResponse DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudMonitorAgentStatusesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeCloudMonitorAgentStatusesResponse
     */
    public function describeCloudMonitorAgentStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudMonitorAgentStatuses',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudMonitorAgentStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudMonitorAgentStatusesRequest $request
     *
     * @return DescribeCloudMonitorAgentStatusesResponse
     */
    public function describeCloudMonitorAgentStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudMonitorAgentStatusesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommandInvocationsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCommandInvocationsResponse
     */
    public function describeCommandInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->commandName)) {
            $query['CommandName'] = $request->commandName;
        }
        if (!Utils::isUnset($request->commandType)) {
            $query['CommandType'] = $request->commandType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->invocationStatus)) {
            $query['InvocationStatus'] = $request->invocationStatus;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeCommandInvocations',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommandInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommandInvocationsRequest $request
     *
     * @return DescribeCommandInvocationsResponse
     */
    public function describeCommandInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandInvocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCommandsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provider)) {
            $query['Provider'] = $request->provider;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCommands',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCommandsRequest $request
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandsWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     *   * \\### QPS limit You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseErrorLogsRequest $request DescribeDatabaseErrorLogsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseErrorLogsResponse DescribeDatabaseErrorLogsResponse
     */
    public function describeDatabaseErrorLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabaseErrorLogs',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabaseErrorLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     *   * \\### QPS limit You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseErrorLogsRequest $request DescribeDatabaseErrorLogsRequest
     *
     * @return DescribeDatabaseErrorLogsResponse DescribeDatabaseErrorLogsResponse
     */
    public function describeDatabaseErrorLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseErrorLogsWithOptions($request, $runtime);
    }

    /**
     * After you create a Simple Database Service instance, you can query the details about the vCPU, memory, disk size, storage IOPS (input/output operations per second), and total current connection number of the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseInstanceMetricDataRequest $request DescribeDatabaseInstanceMetricDataRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseInstanceMetricDataResponse DescribeDatabaseInstanceMetricDataResponse
     */
    public function describeDatabaseInstanceMetricDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabaseInstanceMetricData',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabaseInstanceMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create a Simple Database Service instance, you can query the details about the vCPU, memory, disk size, storage IOPS (input/output operations per second), and total current connection number of the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseInstanceMetricDataRequest $request DescribeDatabaseInstanceMetricDataRequest
     *
     * @return DescribeDatabaseInstanceMetricDataResponse DescribeDatabaseInstanceMetricDataResponse
     */
    public function describeDatabaseInstanceMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstanceMetricDataWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the information about parameters of a Simple Database Service instance.
     *   *
     * @param DescribeDatabaseInstanceParametersRequest $request DescribeDatabaseInstanceParametersRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseInstanceParametersResponse DescribeDatabaseInstanceParametersResponse
     */
    public function describeDatabaseInstanceParametersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabaseInstanceParameters',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabaseInstanceParametersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the information about parameters of a Simple Database Service instance.
     *   *
     * @param DescribeDatabaseInstanceParametersRequest $request DescribeDatabaseInstanceParametersRequest
     *
     * @return DescribeDatabaseInstanceParametersResponse DescribeDatabaseInstanceParametersResponse
     */
    public function describeDatabaseInstanceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstanceParametersWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoint, internal endpoint, creation time, and expiration time of the instances.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseInstancesRequest $request DescribeDatabaseInstancesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseInstancesResponse DescribeDatabaseInstancesResponse
     */
    public function describeDatabaseInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->databaseInstanceIds)) {
            $query['DatabaseInstanceIds'] = $request->databaseInstanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeDatabaseInstances',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoint, internal endpoint, creation time, and expiration time of the instances.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseInstancesRequest $request DescribeDatabaseInstancesRequest
     *
     * @return DescribeDatabaseInstancesResponse DescribeDatabaseInstancesResponse
     */
    public function describeDatabaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstancesWithOptions($request, $runtime);
    }

    /**
     * You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     *   * > Slow query log details are retained for 7 days.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseSlowLogRecordsRequest $request DescribeDatabaseSlowLogRecordsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseSlowLogRecordsResponse DescribeDatabaseSlowLogRecordsResponse
     */
    public function describeDatabaseSlowLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsProduct)) {
            $query['AcsProduct'] = $request->acsProduct;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDatabaseSlowLogRecords',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDatabaseSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     *   * > Slow query log details are retained for 7 days.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param DescribeDatabaseSlowLogRecordsRequest $request DescribeDatabaseSlowLogRecordsRequest
     *
     * @return DescribeDatabaseSlowLogRecordsResponse DescribeDatabaseSlowLogRecordsResponse
     */
    public function describeDatabaseSlowLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseSlowLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceKeyPairRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceKeyPairResponse
     */
    public function describeInstanceKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceKeyPairRequest $request
     *
     * @return DescribeInstanceKeyPairResponse
     */
    public function describeInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancePasswordsSettingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeInstancePasswordsSettingResponse
     */
    public function describeInstancePasswordsSettingWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstancePasswordsSetting',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancePasswordsSettingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstancePasswordsSettingRequest $request
     *
     * @return DescribeInstancePasswordsSettingResponse
     */
    public function describeInstancePasswordsSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePasswordsSettingWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceVncUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceVncUrl',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceVncUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeInstanceVncUrlRequest $request
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     *   * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *   *
     * @param DescribeInvocationResultRequest $request DescribeInvocationResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvocationResultResponse DescribeInvocationResultResponse
     */
    public function describeInvocationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvocationResult',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvocationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     *   * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *   *
     * @param DescribeInvocationResultRequest $request DescribeInvocationResultRequest
     *
     * @return DescribeInvocationResultResponse DescribeInvocationResultResponse
     */
    public function describeInvocationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationResultWithOptions($request, $runtime);
    }

    /**
     * *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *   *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->invokeStatus)) {
            $query['InvokeStatus'] = $request->invokeStatus;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'DescribeInvocations',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *   *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMonitorDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMonitorDataResponse
     */
    public function describeMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->length)) {
            $query['Length'] = $request->length;
        }
        if (!Utils::isUnset($request->metricName)) {
            $query['MetricName'] = $request->metricName;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMonitorData',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMonitorDataRequest $request
     *
     * @return DescribeMonitorDataResponse
     */
    public function describeMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityAgentStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSecurityAgentStatusResponse
     */
    public function describeSecurityAgentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityAgentStatus',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSecurityAgentStatusRequest $request
     *
     * @return DescribeSecurityAgentStatusResponse
     */
    public function describeSecurityAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @param DisableFirewallRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableFirewallRuleResponse
     */
    public function disableFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableFirewallRule',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableFirewallRuleRequest $request
     *
     * @return DisableFirewallRuleResponse
     */
    public function disableFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @param EnableFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableFirewallRuleResponse
     */
    public function enableFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableFirewallRule',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param EnableFirewallRuleRequest $request
     *
     * @return EnableFirewallRuleResponse
     */
    public function enableFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](~~439512~~) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](~~190443~~) operation to restart the servers to allow the client to take effect.
     *   *
     * @param InstallCloudAssistantRequest $tmpReq  InstallCloudAssistantRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallCloudAssistantResponse InstallCloudAssistantResponse
     */
    public function installCloudAssistantWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InstallCloudAssistantShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallCloudAssistant',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallCloudAssistantResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](~~439512~~) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](~~190443~~) operation to restart the servers to allow the client to take effect.
     *   *
     * @param InstallCloudAssistantRequest $request InstallCloudAssistantRequest
     *
     * @return InstallCloudAssistantResponse InstallCloudAssistantResponse
     */
    public function installCloudAssistant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAssistantWithOptions($request, $runtime);
    }

    /**
     * @param InstallCloudMonitorAgentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InstallCloudMonitorAgentResponse
     */
    public function installCloudMonitorAgentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallCloudMonitorAgent',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallCloudMonitorAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InstallCloudMonitorAgentRequest $request
     *
     * @return InstallCloudMonitorAgentResponse
     */
    public function installCloudMonitorAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudMonitorAgentWithOptions($request, $runtime);
    }

    /**
     * @param InvokeCommandRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InvokeCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InvokeCommand',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InvokeCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InvokeCommandRequest $request
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeCommandWithOptions($request, $runtime);
    }

    /**
     * @param ListCustomImagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->dataSnapshotId)) {
            $query['DataSnapshotId'] = $request->dataSnapshotId;
        }
        if (!Utils::isUnset($request->imageIds)) {
            $query['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->imageNames)) {
            $query['ImageNames'] = $request->imageNames;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->systemSnapshotId)) {
            $query['SystemSnapshotId'] = $request->systemSnapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomImages',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCustomImagesRequest $request
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImagesWithOptions($request, $runtime);
    }

    /**
     * You can specify multiple request parameters such as `InstanceId` and `DiskIds`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](~~347607~~).
     *   *
     * @param ListDisksRequest $request ListDisksRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDisksResponse ListDisksResponse
     */
    public function listDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'ListDisks',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can specify multiple request parameters such as `InstanceId` and `DiskIds`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limit](~~347607~~).
     *   *
     * @param ListDisksRequest $request ListDisksRequest
     *
     * @return ListDisksResponse ListDisksResponse
     */
    public function listDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDisksWithOptions($request, $runtime);
    }

    /**
     * You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListFirewallRulesRequest $request ListFirewallRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFirewallRulesResponse ListFirewallRulesResponse
     */
    public function listFirewallRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'ListFirewallRules',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListFirewallRulesRequest $request ListFirewallRulesRequest
     *
     * @return ListFirewallRulesResponse ListFirewallRulesResponse
     */
    public function listFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * You can query information about images in a region, including the IDs, names, and types of the images.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListImagesRequest $request ListImagesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListImagesResponse ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageIds)) {
            $query['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2020-06-01',
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
     * You can query information about images in a region, including the IDs, names, and types of the images.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
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
     * If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans to which you can upgrade your simple application server. Then, you can call the [UpgradeInstance](~~190445~~) operation to upgrade the server.
     *   * > We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the server. For more information, see [CreateSnapshot](~~190452~~).
     *   * For the precautions about plan upgrade, see [Upgrade a simple application server](~~61433~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListInstancePlansModificationRequest $request ListInstancePlansModificationRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancePlansModificationResponse ListInstancePlansModificationResponse
     */
    public function listInstancePlansModificationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancePlansModification',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancePlansModificationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans to which you can upgrade your simple application server. Then, you can call the [UpgradeInstance](~~190445~~) operation to upgrade the server.
     *   * > We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the server. For more information, see [CreateSnapshot](~~190452~~).
     *   * For the precautions about plan upgrade, see [Upgrade a simple application server](~~61433~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListInstancePlansModificationRequest $request ListInstancePlansModificationRequest
     *
     * @return ListInstancePlansModificationResponse ListInstancePlansModificationResponse
     */
    public function listInstancePlansModification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePlansModificationWithOptions($request, $runtime);
    }

    /**
     * @param ListInstanceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceStatusResponse
     */
    public function listInstanceStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
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
            'action'      => 'ListInstanceStatus',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListInstanceStatusRequest $request
     *
     * @return ListInstanceStatusResponse
     */
    public function listInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListInstancesRequest $request ListInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesResponse ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->publicIpAddresses)) {
            $query['PublicIpAddresses'] = $request->publicIpAddresses;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstances',
            'version'     => '2020-06-01',
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
     * You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
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
     * You can query the details of data transfer plans of simple application servers, including the data transfer quota, used amount and unused amount of the data transfer quota, and excess data transfers beyond the quota in the current month.
     *   * Simple Application Server provides data transfer quotas in plans. Plan prices include prices of data transfer quotas. You are charged for data transfers that exceed the quotas. Take note of the following items:
     *   * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     *   * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     *   * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     *   * For more information, see [Quotas and billing of data transfers](~~86281~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListInstancesTrafficPackagesRequest $request ListInstancesTrafficPackagesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstancesTrafficPackagesResponse ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsProduct)) {
            $query['AcsProduct'] = $request->acsProduct;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListInstancesTrafficPackages',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListInstancesTrafficPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the details of data transfer plans of simple application servers, including the data transfer quota, used amount and unused amount of the data transfer quota, and excess data transfers beyond the quota in the current month.
     *   * Simple Application Server provides data transfer quotas in plans. Plan prices include prices of data transfer quotas. You are charged for data transfers that exceed the quotas. Take note of the following items:
     *   * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     *   * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     *   * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     *   * For more information, see [Quotas and billing of data transfers](~~86281~~).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListInstancesTrafficPackagesRequest $request ListInstancesTrafficPackagesRequest
     *
     * @return ListInstancesTrafficPackagesResponse ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesTrafficPackagesWithOptions($request, $runtime);
    }

    /**
     * You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListPlansRequest $request ListPlansRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPlansResponse ListPlansResponse
     */
    public function listPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPlans',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListPlansRequest $request ListPlansRequest
     *
     * @return ListPlansResponse ListPlansResponse
     */
    public function listPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlansWithOptions($request, $runtime);
    }

    /**
     * The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * You can specify multiple request parameters such as `InstanceId`, `DiskId`, and `SnapshotIds` to query snapshots. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acsProduct)) {
            $query['AcsProduct'] = $request->acsProduct;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        if (!Utils::isUnset($request->sourceDiskType)) {
            $query['SourceDiskType'] = $request->sourceDiskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSnapshots',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can specify multiple request parameters such as `InstanceId`, `DiskId`, and `SnapshotIds` to query snapshots. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ListSnapshotsRequest $request ListSnapshotsRequest
     *
     * @return ListSnapshotsResponse ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * ##
     *   * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *   *
     * @param LoginInstanceRequest $request LoginInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LoginInstanceResponse LoginInstanceResponse
     */
    public function loginInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LoginInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LoginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ##
     *   * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *   *
     * @param LoginInstanceRequest $request LoginInstanceRequest
     *
     * @return LoginInstanceResponse LoginInstanceResponse
     */
    public function loginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to modify the description of a Simple Database Service instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyDatabaseInstanceDescriptionRequest $request ModifyDatabaseInstanceDescriptionRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseInstanceDescriptionResponse ModifyDatabaseInstanceDescriptionResponse
     */
    public function modifyDatabaseInstanceDescriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceDescription)) {
            $query['DatabaseInstanceDescription'] = $request->databaseInstanceDescription;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseInstanceDescription',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to modify the description of a Simple Database Service instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyDatabaseInstanceDescriptionRequest $request ModifyDatabaseInstanceDescriptionRequest
     *
     * @return ModifyDatabaseInstanceDescriptionResponse ModifyDatabaseInstanceDescriptionResponse
     */
    public function modifyDatabaseInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyDatabaseInstanceParameterRequest $request ModifyDatabaseInstanceParameterRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDatabaseInstanceParameterResponse ModifyDatabaseInstanceParameterResponse
     */
    public function modifyDatabaseInstanceParameterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->forceRestart)) {
            $query['ForceRestart'] = $request->forceRestart;
        }
        if (!Utils::isUnset($request->parameters)) {
            $query['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDatabaseInstanceParameter',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDatabaseInstanceParameterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyDatabaseInstanceParameterRequest $request ModifyDatabaseInstanceParameterRequest
     *
     * @return ModifyDatabaseInstanceParameterResponse ModifyDatabaseInstanceParameterResponse
     */
    public function modifyDatabaseInstanceParameter($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseInstanceParameterWithOptions($request, $runtime);
    }

    /**
     * @param ModifyFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyFirewallRuleResponse
     */
    public function modifyFirewallRuleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->ruleProtocol)) {
            $query['RuleProtocol'] = $request->ruleProtocol;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirewallRule',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyFirewallRuleRequest $request
     *
     * @return ModifyFirewallRuleResponse
     */
    public function modifyFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * You can share a custom image with ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image with ECS to transfer your business from Simple Application Server to ECS.
     *   * > The shared image in ECS resides in the same region as the custom image in Simple Application Server.
     *   * You can unshare a custom image based on your business requirements or when you want to delete the custom image. Take note of the following items:
     *   * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     *   * *   After you unshare a custom image, you cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyImageShareStatusRequest $request ModifyImageShareStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyImageShareStatusResponse ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageShareStatus',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can share a custom image with ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image with ECS to transfer your business from Simple Application Server to ECS.
     *   * > The shared image in ECS resides in the same region as the custom image in Simple Application Server.
     *   * You can unshare a custom image based on your business requirements or when you want to delete the custom image. Take note of the following items:
     *   * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     *   * *   After you unshare a custom image, you cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ModifyImageShareStatusRequest $request ModifyImageShareStatusRequest
     *
     * @return ModifyImageShareStatusResponse ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageShareStatusWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceVncPasswordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceVncPasswordResponse
     */
    public function modifyInstanceVncPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vncPassword)) {
            $query['VncPassword'] = $request->vncPassword;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceVncPassword',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceVncPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyInstanceVncPasswordRequest $request
     *
     * @return ModifyInstanceVncPasswordResponse
     */
    public function modifyInstanceVncPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVncPasswordWithOptions($request, $runtime);
    }

    /**
     * *   Only simple application servers that are in the Running state can be restarted.
     *   * *   After you restart a simple application server, it enters the Starting state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RebootInstanceRequest $request RebootInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootInstanceResponse RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Only simple application servers that are in the Running state can be restarted.
     *   * *   After you restart a simple application server, it enters the Starting state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RebootInstanceRequest $request RebootInstanceRequest
     *
     * @return RebootInstanceResponse RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RebootInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceReboot)) {
            $query['ForceReboot'] = $request->forceReboot;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootInstances',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RebootInstancesRequest $request
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstancesWithOptions($request, $runtime);
    }

    /**
     * If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ReleasePublicConnectionRequest $request ReleasePublicConnectionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePublicConnectionResponse ReleasePublicConnectionResponse
     */
    public function releasePublicConnectionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleasePublicConnection',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ReleasePublicConnectionRequest $request ReleasePublicConnectionRequest
     *
     * @return ReleasePublicConnectionResponse ReleasePublicConnectionResponse
     */
    public function releasePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](~~58623~~).
     *   * *   When you call this operation to renew a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be renewed.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](~~58623~~).
     *   * *   When you call this operation to renew a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be renewed.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetDatabaseAccountPasswordRequest $request ResetDatabaseAccountPasswordRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDatabaseAccountPasswordResponse ResetDatabaseAccountPasswordResponse
     */
    public function resetDatabaseAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountPassword)) {
            $query['AccountPassword'] = $request->accountPassword;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDatabaseAccountPassword',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDatabaseAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetDatabaseAccountPasswordRequest $request ResetDatabaseAccountPasswordRequest
     *
     * @return ResetDatabaseAccountPasswordResponse ResetDatabaseAccountPasswordResponse
     */
    public function resetDatabaseAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDatabaseAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to roll back a disk only if the associated simple application server is in the Stopped state.
     *   * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     *   * ### Precautions
     *   * After you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting operation are retained but cannot be used to roll back the disks of the server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetDiskRequest $request ResetDiskRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDiskResponse ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDisk',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can call this operation to roll back a disk only if the associated simple application server is in the Stopped state.
     *   * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     *   * ### Precautions
     *   * After you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting operation are retained but cannot be used to roll back the disks of the server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetDiskRequest $request ResetDiskRequest
     *
     * @return ResetDiskResponse ResetDiskResponse
     */
    public function resetDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * You can reset a simple application server to re-install its application system or OS and re-initialize the server. You can reset a simple application server by resetting the current system or replacing the image.
     *   * You can use one of the following methods to reset a simple application server:
     *   * *   Reset the current system. You can re-install the operating system without replacing the image.
     *   * *   Replace the image. You can select an Alibaba Cloud image or a custom image that is different from the existing image of the server to reinstall the OS of the server.
     *   * ### Precautions
     *   * *   After you reset a simple application server, the disk data on the server is cleared. Back up the data as needed.
     *   * *   After you reset a simple application server, the monitoring operations that are performed on the server may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *   *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](~~183482~~).
     *   *     *   Use Command Assistant: For more information, see [Use Command Assistant](~~438681~~). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](~~438681~~) topic.
     *   * ### Limits
     *   * *   Snapshots that are created before a server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     *   * *   You cannot reset simple application servers that were created based on custom images that contain data of data disks.
     *   * *   Before you reset a simple application server by replacing the existing image with a custom image, take note of the following items:
     *   *     *   The custom image must reside in the same region as the current server.
     *   *     *   The custom image cannot be created based on the current server. If you want to recover the data on the server, you can use a snapshot of the server to roll back the disks of the server.
     *   *     *   If your simple application server resides outside the Chinese mainland, you cannot switch the OS of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. You also cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the OSs of simple application servers only between Windows Server OSs or between Linux distributions.
     *   *     *   The following limits apply to the disks attached to the simple application server:
     *   *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server and no data disk is attached, you cannot use the custom image to reset the simple application server.
     *   *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *   *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your simple application server, you can upgrade the server. For more information, see Upgrade a simple application server.
     *   *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetSystemRequest $request ResetSystemRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetSystemResponse ResetSystemResponse
     */
    public function resetSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSystem',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can reset a simple application server to re-install its application system or OS and re-initialize the server. You can reset a simple application server by resetting the current system or replacing the image.
     *   * You can use one of the following methods to reset a simple application server:
     *   * *   Reset the current system. You can re-install the operating system without replacing the image.
     *   * *   Replace the image. You can select an Alibaba Cloud image or a custom image that is different from the existing image of the server to reinstall the OS of the server.
     *   * ### Precautions
     *   * *   After you reset a simple application server, the disk data on the server is cleared. Back up the data as needed.
     *   * *   After you reset a simple application server, the monitoring operations that are performed on the server may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *   *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](~~183482~~).
     *   *     *   Use Command Assistant: For more information, see [Use Command Assistant](~~438681~~). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](~~438681~~) topic.
     *   * ### Limits
     *   * *   Snapshots that are created before a server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     *   * *   You cannot reset simple application servers that were created based on custom images that contain data of data disks.
     *   * *   Before you reset a simple application server by replacing the existing image with a custom image, take note of the following items:
     *   *     *   The custom image must reside in the same region as the current server.
     *   *     *   The custom image cannot be created based on the current server. If you want to recover the data on the server, you can use a snapshot of the server to roll back the disks of the server.
     *   *     *   If your simple application server resides outside the Chinese mainland, you cannot switch the OS of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. You also cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the OSs of simple application servers only between Windows Server OSs or between Linux distributions.
     *   *     *   The following limits apply to the disks attached to the simple application server:
     *   *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server and no data disk is attached, you cannot use the custom image to reset the simple application server.
     *   *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *   *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your simple application server, you can upgrade the server. For more information, see Upgrade a simple application server.
     *   *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param ResetSystemRequest $request ResetSystemRequest
     *
     * @return ResetSystemResponse ResetSystemResponse
     */
    public function resetSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSystemWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RestartDatabaseInstanceRequest $request RestartDatabaseInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDatabaseInstanceResponse RestartDatabaseInstanceResponse
     */
    public function restartDatabaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDatabaseInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param RestartDatabaseInstanceRequest $request RestartDatabaseInstanceRequest
     *
     * @return RestartDatabaseInstanceResponse RestartDatabaseInstanceResponse
     */
    public function restartDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     *   * Before you use Command Assistant, take note of the following items:
     *   * *   The simple application server must be in the Running state.
     *   * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](~~64921~~).
     *   *
     * @param RunCommandRequest $tmpReq  RunCommandRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommandWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunCommandShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->parameters)) {
            $request->parametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->enableParameter)) {
            $query['EnableParameter'] = $request->enableParameter;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parametersShrink)) {
            $query['Parameters'] = $request->parametersShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->windowsPasswordName)) {
            $query['WindowsPasswordName'] = $request->windowsPasswordName;
        }
        if (!Utils::isUnset($request->workingDir)) {
            $query['WorkingDir'] = $request->workingDir;
        }
        if (!Utils::isUnset($request->workingUser)) {
            $query['WorkingUser'] = $request->workingUser;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunCommand',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     *   * Before you use Command Assistant, take note of the following items:
     *   * *   The simple application server must be in the Running state.
     *   * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](~~64921~~).
     *   *
     * @param RunCommandRequest $request RunCommandRequest
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StartDatabaseInstanceRequest $request StartDatabaseInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDatabaseInstanceResponse StartDatabaseInstanceResponse
     */
    public function startDatabaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDatabaseInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StartDatabaseInstanceRequest $request StartDatabaseInstanceRequest
     *
     * @return StartDatabaseInstanceResponse StartDatabaseInstanceResponse
     */
    public function startDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to start a simple application server that is in the Stopped state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StartInstanceRequest $request StartInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to start a simple application server that is in the Stopped state.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StartInstanceRequest $request StartInstanceRequest
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartInstancesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartInstancesResponse
     */
    public function startInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstances',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartInstancesRequest $request
     *
     * @return StartInstancesResponse
     */
    public function startInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstancesWithOptions($request, $runtime);
    }

    /**
     * @param StartTerminalSessionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartTerminalSessionResponse
     */
    public function startTerminalSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTerminalSession',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTerminalSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartTerminalSessionRequest $request
     *
     * @return StartTerminalSessionResponse
     */
    public function startTerminalSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTerminalSessionWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StopDatabaseInstanceRequest $request StopDatabaseInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDatabaseInstanceResponse StopDatabaseInstanceResponse
     */
    public function stopDatabaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->databaseInstanceId)) {
            $query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDatabaseInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StopDatabaseInstanceRequest $request StopDatabaseInstanceRequest
     *
     * @return StopDatabaseInstanceResponse StopDatabaseInstanceResponse
     */
    public function stopDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * You can stop a simple application server that you do not use for the time being.
     *   * >  Stopping a simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StopInstanceRequest $request StopInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can stop a simple application server that you do not use for the time being.
     *   * >  Stopping a simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param StopInstanceRequest $request StopInstanceRequest
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StopInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopInstancesResponse
     */
    public function stopInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstances',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopInstancesRequest $request
     *
     * @return StopInstancesResponse
     */
    public function stopInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstancesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateCommandAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCommandAttributeResponse
     */
    public function updateCommandAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandId)) {
            $query['CommandId'] = $request->commandId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->workingDir)) {
            $query['WorkingDir'] = $request->workingDir;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCommandAttribute',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCommandAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateCommandAttributeRequest $request
     *
     * @return UpdateCommandAttributeResponse
     */
    public function updateCommandAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommandAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDiskAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDiskAttributeResponse
     */
    public function updateDiskAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateDiskAttribute',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateDiskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateDiskAttributeRequest $request
     *
     * @return UpdateDiskAttributeResponse
     */
    public function updateDiskAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDiskAttributeWithOptions($request, $runtime);
    }

    /**
     * ## Usage notes
     *   * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](~~190443~~) operation to allow the new password to take effect.
     *   * ### QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param UpdateInstanceAttributeRequest $request UpdateInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateInstanceAttributeResponse UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateInstanceAttribute',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Usage notes
     *   * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](~~190443~~) operation to allow the new password to take effect.
     *   * ### QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param UpdateInstanceAttributeRequest $request UpdateInstanceAttributeRequest
     *
     * @return UpdateInstanceAttributeResponse UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSnapshotAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSnapshotAttributeResponse
     */
    public function updateSnapshotAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSnapshotAttribute',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateSnapshotAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSnapshotAttributeRequest $request
     *
     * @return UpdateSnapshotAttributeResponse
     */
    public function updateSnapshotAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * *   The plan of a simple application server cannot be downgraded, but can only be upgraded. For more information about plans, see [Billable items](~~58623~~).
     *   * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param UpgradeInstanceRequest $request UpgradeInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeInstanceResponse UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeInstance',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   The plan of a simple application server cannot be downgraded, but can only be upgraded. For more information about plans, see [Billable items](~~58623~~).
     *   * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     *   * ### QPS limit
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](~~347607~~).
     *   *
     * @param UpgradeInstanceRequest $request UpgradeInstanceRequest
     *
     * @return UpgradeInstanceResponse UpgradeInstanceResponse
     */
    public function upgradeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param UploadInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadInstanceKeyPairResponse
     */
    public function uploadInstanceKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->publicKey)) {
            $query['PublicKey'] = $request->publicKey;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadInstanceKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadInstanceKeyPairRequest $request
     *
     * @return UploadInstanceKeyPairResponse
     */
    public function uploadInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadInstanceKeyPairWithOptions($request, $runtime);
    }
}
