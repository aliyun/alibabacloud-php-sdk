<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionResponse;
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
     * @param AllocatePublicConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocatePublicConnectionResponse
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
     * @param AllocatePublicConnectionRequest $request
     *
     * @return AllocatePublicConnectionResponse
     */
    public function allocatePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocatePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * A custom image is created based on a snapshot of a simple application server. You can use custom images to create multiple simple application servers that have the same configurations. You can also share custom images with ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances.
     *   * For more information about custom images, see [Overview of custom images](~~199375~~).
     *   * You must create a system disk snapshot of a simple application server before you create a custom image of the simple application server. For more information, see [CreateSnapshot](~~190452~~).
     *   * >  If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     *   * When you create a custom image, take note of the following items:
     *   * *   The custom image and the corresponding simple application server reside in the same region.
     *   * *   The maximum number of custom images that can be retained in an Alibaba Cloud account is triple of the number of simple application servers that you created. The value cannot be greater than 15.
     *   * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     *   * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on the server are also released.
     *   * *   If you reset a simple application sever, the disk data on the server is cleared. You must back up the data as needed.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * A custom image is created based on a snapshot of a simple application server. You can use custom images to create multiple simple application servers that have the same configurations. You can also share custom images with ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances.
     *   * For more information about custom images, see [Overview of custom images](~~199375~~).
     *   * You must create a system disk snapshot of a simple application server before you create a custom image of the simple application server. For more information, see [CreateSnapshot](~~190452~~).
     *   * >  If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     *   * When you create a custom image, take note of the following items:
     *   * *   The custom image and the corresponding simple application server reside in the same region.
     *   * *   The maximum number of custom images that can be retained in an Alibaba Cloud account is triple of the number of simple application servers that you created. The value cannot be greater than 15.
     *   * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     *   * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on the server are also released.
     *   * *   If you reset a simple application sever, the disk data on the server is cleared. You must back up the data as needed.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, Secure Shell (SSH) port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
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
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, Secure Shell (SSH) port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
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
     * @param CreateFirewallRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateFirewallRulesResponse
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
     * @param CreateFirewallRulesRequest $request
     *
     * @return CreateFirewallRulesResponse
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
     *   * *   A maximum of 20 simple application servers can be created within an Alibaba Cloud account.
     *   * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     *   * *   A maximum of 20 simple application servers can be created within an Alibaba Cloud account.
     *   * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental instance releases, recover data after network attacks, and create custom images.
     *   * >  You are not charged for creating snapshots for simple application servers.
     *   * ## Precautions
     *   * - You can create up to three snapshots for disks of each simple application server.
     *   * - The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple of the number of simple application servers that are created. The value cannot be greater than 15.
     *   * - If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     *   * - If you create a snapshot for a simple application server before you reset the server, the snapshot is retained after you reset the server but the snapshot cannot be used to roll back the disks of the server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental instance releases, recover data after network attacks, and create custom images.
     *   * >  You are not charged for creating snapshots for simple application servers.
     *   * ## Precautions
     *   * - You can create up to three snapshots for disks of each simple application server.
     *   * - The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple of the number of simple application servers that are created. The value cannot be greater than 15.
     *   * - If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     *   * - If you create a snapshot for a simple application server before you reset the server, the snapshot is retained after you reset the server but the snapshot cannot be used to roll back the disks of the server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can delete a custom image that you no longer need. After the custom image is deleted, the simple application servers that were created from the custom image cannot be reset by using the custom image.
     *   * >  If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy custom images](~~199378~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can delete a custom image that you no longer need. After the custom image is deleted, the simple application servers that were created from the custom image cannot be reset by using the custom image.
     *   * >  If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy custom images](~~199378~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can delete a snapshot that is no longer needed.
     *   * >  If a custom image was created from the snapshot, delete the custom image before you delete the snapshot.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can delete a snapshot that is no longer needed.
     *   * >  If a custom image was created from the snapshot, delete the custom image before you delete the snapshot.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * By default, the Cloud Assistant client is installed on your simple application server. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the server.
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
     * By default, the Cloud Assistant client is installed on your simple application server. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the server.
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
     * @param DescribeDatabaseErrorLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDatabaseErrorLogsResponse
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
     * @param DescribeDatabaseErrorLogsRequest $request
     *
     * @return DescribeDatabaseErrorLogsResponse
     */
    public function describeDatabaseErrorLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseErrorLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabaseInstanceMetricDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDatabaseInstanceMetricDataResponse
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
     * @param DescribeDatabaseInstanceMetricDataRequest $request
     *
     * @return DescribeDatabaseInstanceMetricDataResponse
     */
    public function describeDatabaseInstanceMetricData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstanceMetricDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabaseInstanceParametersRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDatabaseInstanceParametersResponse
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
     * @param DescribeDatabaseInstanceParametersRequest $request
     *
     * @return DescribeDatabaseInstanceParametersResponse
     */
    public function describeDatabaseInstanceParameters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstanceParametersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabaseInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDatabaseInstancesResponse
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
     * @param DescribeDatabaseInstancesRequest $request
     *
     * @return DescribeDatabaseInstancesResponse
     */
    public function describeDatabaseInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDatabaseInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDatabaseSlowLogRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDatabaseSlowLogRecordsResponse
     */
    public function describeDatabaseSlowLogRecordsWithOptions($request, $runtime)
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
     * @param DescribeDatabaseSlowLogRecordsRequest $request
     *
     * @return DescribeDatabaseSlowLogRecordsResponse
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
     * *   After you run a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution information that is generated within the last two weeks. Up to 100,000 lines of execution information can be retained.
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
     * *   After you run a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution information that is generated within the last two weeks. Up to 100,000 lines of execution information can be retained.
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
     * *   After you run a command, the command may not succeed or deliver the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution information that is generated within the last two weeks. Up to 100,000 lines of execution information can be retained.
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
     * *   After you run a command, the command may not succeed or deliver the expected results. You can call this operation to query the actual execution results.
     *   * *   You can query the execution information that is generated within the last two weeks. Up to 100,000 lines of execution information can be retained.
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
     * To run commands, you must install the Cloud Assistant client on your simple application server. You can call the [DescribeCloudAssistantStatus](~~439512~~) operation to query whether the Cloud Assistant client is installed on your simple application server. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](~~190443~~) operation to restart the server to allow the installation to take effect.
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
     * To run commands, you must install the Cloud Assistant client on your simple application server. You can call the [DescribeCloudAssistantStatus](~~439512~~) operation to query whether the Cloud Assistant client is installed on your simple application server. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](~~190443~~) operation to restart the server to allow the installation to take effect.
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
     * ## Usage notes
     *   * You can specify multiple request parameters such as `InstanceId` and `DiskIds`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
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
     * ## Usage notes
     *   * You can specify multiple request parameters such as `InstanceId` and `DiskIds`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
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
     * You can call the ListFirewallRules operation to query the firewall rule details of a specified simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can call the ListFirewallRules operation to query the firewall rule details of a specified simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query details about one or more images in a specified region, including the IDs, names, and types of the images.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of your calls per second exceeds the limit, throttling is triggered. This may affect your business. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query details about one or more images in a specified region, including the IDs, names, and types of the images.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of your calls per second exceeds the limit, throttling is triggered. This may affect your business. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * If the plans of your simple application server do not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans that can be upgraded for your simple application server. Then, you can call the [UpgradeInstance](~~190445~~) operation to upgrade the plans.
     *   * >  We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the plans. For more information, see [CreateSnapshot](~~190452~~).
     *   * For the precautions about plan upgrade, see [Upgrade configurations](~~61433~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * If the plans of your simple application server do not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans that can be upgraded for your simple application server. Then, you can call the [UpgradeInstance](~~190445~~) operation to upgrade the plans.
     *   * >  We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the plans. For more information, see [CreateSnapshot](~~190452~~).
     *   * For the precautions about plan upgrade, see [Upgrade configurations](~~61433~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can call this operation to query the details of one or more simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can call this operation to query the details of one or more simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query the details of data transfer plans for one or more simple application servers, including the data transfer quota, used data transfer quota, unused data transfer quota, and excess data transfers in the current month.
     *   * Simple Application Server provides data transfer quotas in plans. The prices for data transfers within quotas are included in the plans. You are charged for data transfers that exceed the quotas. Take note of the following items:
     *   * *   You are charged only for outbound data transfers from simple application servers over the Internet. You are not charged for inbound data transfers to simple application servers over the Internet.
     *   * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet consume the data transfer quotas that are included in plans. If the quotas are exceeded, you are charged for the excess data transfers.
     *   * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     *   * For more information, see [Quotas and billing of data transfers](~~86281~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query the details of data transfer plans for one or more simple application servers, including the data transfer quota, used data transfer quota, unused data transfer quota, and excess data transfers in the current month.
     *   * Simple Application Server provides data transfer quotas in plans. The prices for data transfers within quotas are included in the plans. You are charged for data transfers that exceed the quotas. Take note of the following items:
     *   * *   You are charged only for outbound data transfers from simple application servers over the Internet. You are not charged for inbound data transfers to simple application servers over the Internet.
     *   * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet consume the data transfer quotas that are included in plans. If the quotas are exceeded, you are charged for the excess data transfers.
     *   * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     *   * For more information, see [Quotas and billing of data transfers](~~86281~~).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query the details of all plans provided by Simple Application Server in a specified region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can query the details of all plans provided by Simple Application Server in a specified region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * The query results include all the Alibaba Cloud regions where Simple Application Server is available on the International site (alibabacloud.com) and the China site (aliyun.com).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * The query results include all the Alibaba Cloud regions where Simple Application Server is available on the International site (alibabacloud.com) and the China site (aliyun.com).
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
     *   *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * ## Description
     *   * You can configure multiple request parameters such as `InstanceId`, `DiskId`, and `SnapshotIds` to query snapshots. Configured parameters have logical AND relations. Only the configured parameters are included in the filter conditions.
     *   * ### QPS limits
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
     * ## Description
     *   * You can configure multiple request parameters such as `InstanceId`, `DiskId`, and `SnapshotIds` to query snapshots. Configured parameters have logical AND relations. Only the configured parameters are included in the filter conditions.
     *   * ### QPS limits
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
     * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
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
     * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
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
     * @param ModifyDatabaseInstanceDescriptionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDatabaseInstanceDescriptionResponse
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
     * @param ModifyDatabaseInstanceDescriptionRequest $request
     *
     * @return ModifyDatabaseInstanceDescriptionResponse
     */
    public function modifyDatabaseInstanceDescription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDatabaseInstanceDescriptionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDatabaseInstanceParameterRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyDatabaseInstanceParameterResponse
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
     * @param ModifyDatabaseInstanceParameterRequest $request
     *
     * @return ModifyDatabaseInstanceParameterResponse
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
     * You can share a custom image to ECS. When the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image to ECS to transfer your business from Simple Application Server to ECS.
     *   * >  The region in which the shared image resides in ECS is the same as the region in which the custom image resides in Simple Application Server.
     *   * You can unshare a custom image based on your business requirements or when you want to delete the custom image.
     *   * Take note of the following items:
     *   * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     *   * *   After you unshare a custom image, the system disks of the ECS instances that were created from the shared image cannot be re-initialized.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can share a custom image to ECS. When the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image to ECS to transfer your business from Simple Application Server to ECS.
     *   * >  The region in which the shared image resides in ECS is the same as the region in which the custom image resides in Simple Application Server.
     *   * You can unshare a custom image based on your business requirements or when you want to delete the custom image.
     *   * Take note of the following items:
     *   * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     *   * *   After you unshare a custom image, the system disks of the ECS instances that were created from the shared image cannot be re-initialized.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * *   You can restart simple application server instances that are only in the Running (Running) state.
     *   * *   After you restart a simple application server, it enters the Starting (Starting) state.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * *   You can restart simple application server instances that are only in the Running (Running) state.
     *   * *   After you restart a simple application server, it enters the Starting (Starting) state.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * @param ReleasePublicConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePublicConnectionResponse
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
     * @param ReleasePublicConnectionRequest $request
     *
     * @return ReleasePublicConnectionResponse
     */
    public function releasePublicConnection($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePublicConnectionWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](~~58623~~).
     *   * *   When you call this operation to renew a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be renewed.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * @param ResetDatabaseAccountPasswordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetDatabaseAccountPasswordResponse
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
     * @param ResetDatabaseAccountPasswordRequest $request
     *
     * @return ResetDatabaseAccountPasswordResponse
     */
    public function resetDatabaseAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDatabaseAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * *   You can call this operation to roll back a disk only when the associated simple application server is in the Stopped state.
     *   * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     *   * ## Precautions
     *   * If you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting are retained but cannot be used to roll back the disks of the server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * *   You can call this operation to roll back a disk only when the associated simple application server is in the Stopped state.
     *   * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     *   * ## Precautions
     *   * If you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting are retained but cannot be used to roll back the disks of the server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can reset a simple application server to re-install its applications or operating system and re-initialize the server. You can reset a simple application server by resetting the operating system or replacing the image.
     *   * You can use one of the following methods to reset a simple application server:
     *   * *   Reset the operating system. You can re-install the operating system without the need to replace the image.
     *   * *   Replace the image. You can replace the existing image on the simple application server by using another Alibaba Cloud image or a custom image. This effectively replaces the operating system.
     *   * ## Precautions
     *   * - If you reset a simple application sever, the disk data on the server is cleared. You must back up the data as needed.
     *   * - After you reset a simple application server, the monitoring operations that are performed on the server may fail. You can use one of the following methods to install the CloudMonitor agent on the server:    - Connect to the server: For more information, see [Manually install plug-ins for Alibaba Cloud hosts](/help/en/cloudmonitor/latest/install-and-uninstall-the-cloudmonitor-agent-for-cpp).
     *   *   - Use Command Assistant: For more information, see [Use Command Assistant](/help/en/simple-application-server/latest/cloud-assistant). You can obtain the commands that are used to install CloudMonitor from the "Common commands" section in the [Use Command Assistant](/help/en/simple-application-server/latest/cloud-assistant) topic.
     *   * ## Limits
     *   * - If a simple application server is reset, snapshots that are created before the server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     *   * - If a simple application server was created based on a custom image that contains data of a data disk, the server cannot be reset.
     *   * - If you reset a simple application server by replacing the existing image with a custom image,   - The custom image must reside in the same region as the current server.
     *   *   - The custom image cannot be created from the current server. If you want to recover the data on the server, you can use a snapshot that is created from the server to roll back the disks.
     *   *   - If your simple application server resides in a region outside the Chinese mainland, you cannot switch the operating system of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. Similarly, you cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the operating system of simple application servers only between Windows Server operating systems or between Linux distributions.
     *   *   - The following limits apply to the disks on the simple application server:     - If the custom image contains a system disk and data disks, but the simple application server is not attached with a data disk but attached only with a system disk, you cannot use the custom image to reset the simple application server.
     *   *     - If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *   *     - When the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of the server, you can upgrade the simple application server. For more information, see Upgrade configurations.
     *   *     - If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can reset a simple application server to re-install its applications or operating system and re-initialize the server. You can reset a simple application server by resetting the operating system or replacing the image.
     *   * You can use one of the following methods to reset a simple application server:
     *   * *   Reset the operating system. You can re-install the operating system without the need to replace the image.
     *   * *   Replace the image. You can replace the existing image on the simple application server by using another Alibaba Cloud image or a custom image. This effectively replaces the operating system.
     *   * ## Precautions
     *   * - If you reset a simple application sever, the disk data on the server is cleared. You must back up the data as needed.
     *   * - After you reset a simple application server, the monitoring operations that are performed on the server may fail. You can use one of the following methods to install the CloudMonitor agent on the server:    - Connect to the server: For more information, see [Manually install plug-ins for Alibaba Cloud hosts](/help/en/cloudmonitor/latest/install-and-uninstall-the-cloudmonitor-agent-for-cpp).
     *   *   - Use Command Assistant: For more information, see [Use Command Assistant](/help/en/simple-application-server/latest/cloud-assistant). You can obtain the commands that are used to install CloudMonitor from the "Common commands" section in the [Use Command Assistant](/help/en/simple-application-server/latest/cloud-assistant) topic.
     *   * ## Limits
     *   * - If a simple application server is reset, snapshots that are created before the server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     *   * - If a simple application server was created based on a custom image that contains data of a data disk, the server cannot be reset.
     *   * - If you reset a simple application server by replacing the existing image with a custom image,   - The custom image must reside in the same region as the current server.
     *   *   - The custom image cannot be created from the current server. If you want to recover the data on the server, you can use a snapshot that is created from the server to roll back the disks.
     *   *   - If your simple application server resides in a region outside the Chinese mainland, you cannot switch the operating system of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. Similarly, you cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the operating system of simple application servers only between Windows Server operating systems or between Linux distributions.
     *   *   - The following limits apply to the disks on the simple application server:     - If the custom image contains a system disk and data disks, but the simple application server is not attached with a data disk but attached only with a system disk, you cannot use the custom image to reset the simple application server.
     *   *     - If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *   *     - When the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of the server, you can upgrade the simple application server. For more information, see Upgrade configurations.
     *   *     - If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * @param RestartDatabaseInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RestartDatabaseInstanceResponse
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
     * @param RestartDatabaseInstanceRequest $request
     *
     * @return RestartDatabaseInstanceResponse
     */
    public function restartDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Command Assistant is a Simple Application Server-specific automated O\\&M tool. You can manage simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without logging on to the servers.
     *   * When you use Command Assistant, the following conditions must be met:
     *   * *   The simple application server must be in the Running state.
     *   * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you manually uninstall the client, you must reinstall it. For more information, see [Install the Cloud Assistant client](~~64921~~).
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
     * Command Assistant is a Simple Application Server-specific automated O\\&M tool. You can manage simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without logging on to the servers.
     *   * When you use Command Assistant, the following conditions must be met:
     *   * *   The simple application server must be in the Running state.
     *   * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you manually uninstall the client, you must reinstall it. For more information, see [Install the Cloud Assistant client](~~64921~~).
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
     * @param StartDatabaseInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartDatabaseInstanceResponse
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
     * @param StartDatabaseInstanceRequest $request
     *
     * @return StartDatabaseInstanceResponse
     */
    public function startDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * If your simple application server is in the Stopped state, you can call the StartInstance operation to start the server.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * If your simple application server is in the Stopped state, you can call the StartInstance operation to start the server.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * @param StopDatabaseInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopDatabaseInstanceResponse
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
     * @param StopDatabaseInstanceRequest $request
     *
     * @return StopDatabaseInstanceResponse
     */
    public function stopDatabaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDatabaseInstanceWithOptions($request, $runtime);
    }

    /**
     * You can stop simple application servers that are not used for the time being.
     *   * >  The stopping of simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * You can stop simple application servers that are not used for the time being.
     *   * >  The stopping of simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     *   * ## QPS limits
     *   * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](/help/en/simple-application-server/latest/qps-limit-1).
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
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](~~190443~~) operation for the new password to take effect.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](~~190443~~) operation for the new password to take effect.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * *   The plans of simple application servers can only be upgraded. For more information about plans, see [Billable items](~~58623~~).
     *   * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
     * *   The plans of simple application servers can only be upgraded. For more information about plans, see [Billable items](~~58623~~).
     *   * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     *   * ## QPS limits
     *   * The queries per second (QPS) limit for a single user for the API operation is 10 calls per minute. If the number of calls to the API operation per minute exceeds the limit, throttling is triggered. As a result, your business may be affected. We recommend that you take note of the limit when you call this operation. For more information, see [QPS limit](/help/en/simple-application-server/latest/qps-limit-1).
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
