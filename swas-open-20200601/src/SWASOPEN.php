<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AddCustomImageShareAccountRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AddCustomImageShareAccountResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AllocatePublicConnectionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ApplyFirewallTemplateRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ApplyFirewallTemplateResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AttachKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\AttachKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallRulesShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateFirewallTemplateRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstanceKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateInstancesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImageResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImagesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteCustomImagesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallRulesShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallTemplateRulesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallTemplateRulesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallTemplatesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteFirewallTemplatesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteInstanceKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteInstanceKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DeleteSnapshotsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantAttributesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantAttributesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantAttributesShrinkRequest;
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
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateApplyResultsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateRulesApplyResultRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplateRulesApplyResultResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeFirewallTemplatesResponse;
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
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DetachKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DetachKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DisableFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DisableFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\EnableFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\EnableFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudAssistantShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudMonitorAgentRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InstallCloudMonitorAgentResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\InvokeCommandShrinkRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImageShareAccountsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImageShareAccountsResponse;
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
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListKeyPairsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListKeyPairsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListPlansResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListRegionsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\LoginInstanceRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\LoginInstanceResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceDescriptionRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceDescriptionResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceParameterRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyDatabaseInstanceParameterResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallRuleRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallRuleResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallTemplateRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ModifyFirewallTemplateResponse;
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
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RemoveCustomImageShareAccountRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\RemoveCustomImageShareAccountResponse;
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
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\TagResourcesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\TagResourcesResponse;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\UntagResourcesResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Shares a custom image with other Alibaba Cloud accounts in the same region to quickly deploy the same environment configurations for multiple simple application servers at a time. This improves deployment efficiency.
     *
     * @remarks
     *   Before you share a custom image, make sure that all sensitive data and files are removed from the image.
     * *   The IDs of the Alibaba Cloud accounts with which you want to share the image is obtained. Move the pointer over the profile in the upper-right corner of the Simple Application Server console. In the card that appears, if Main Account is displayed, the showed account ID is the Alibaba Cloud account ID.
     *
     * @param request - AddCustomImageShareAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddCustomImageShareAccountResponse
     *
     * @param AddCustomImageShareAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddCustomImageShareAccountResponse
     */
    public function addCustomImageShareAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddCustomImageShareAccount',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddCustomImageShareAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCustomImageShareAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Shares a custom image with other Alibaba Cloud accounts in the same region to quickly deploy the same environment configurations for multiple simple application servers at a time. This improves deployment efficiency.
     *
     * @remarks
     *   Before you share a custom image, make sure that all sensitive data and files are removed from the image.
     * *   The IDs of the Alibaba Cloud accounts with which you want to share the image is obtained. Move the pointer over the profile in the upper-right corner of the Simple Application Server console. In the card that appears, if Main Account is displayed, the showed account ID is the Alibaba Cloud account ID.
     *
     * @param request - AddCustomImageShareAccountRequest
     * @returns AddCustomImageShareAccountResponse
     *
     * @param AddCustomImageShareAccountRequest $request
     *
     * @return AddCustomImageShareAccountResponse
     */
    public function addCustomImageShareAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomImageShareAccountWithOptions($request, $runtime);
    }

    /**
     * Applies for a public endpoint for a Simple Database Service instance.
     *
     * @remarks
     * By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     *
     * @param request - AllocatePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AllocatePublicConnectionResponse
     *
     * @param AllocatePublicConnectionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AllocatePublicConnectionResponse
     */
    public function allocatePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AllocatePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AllocatePublicConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Applies for a public endpoint for a Simple Database Service instance.
     *
     * @remarks
     * By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     *
     * @param request - AllocatePublicConnectionRequest
     * @returns AllocatePublicConnectionResponse
     *
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
     * Uses a firewall template to apply firewall rules to multiple simple application servers at a time. This improves your efficiency of setting firewall rules.
     *
     * @remarks
     * If the port range, protocol, and source IP address of a firewall rule in a firewall template are the same as the port range, protocol, and source IP address of an existing rule, the new rule overwrites the existing rule regardless of whether the existing rule is enabled or disabled.
     *
     * @param request - ApplyFirewallTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ApplyFirewallTemplateResponse
     *
     * @param ApplyFirewallTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ApplyFirewallTemplateResponse
     */
    public function applyFirewallTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyFirewallTemplate',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ApplyFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ApplyFirewallTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uses a firewall template to apply firewall rules to multiple simple application servers at a time. This improves your efficiency of setting firewall rules.
     *
     * @remarks
     * If the port range, protocol, and source IP address of a firewall rule in a firewall template are the same as the port range, protocol, and source IP address of an existing rule, the new rule overwrites the existing rule regardless of whether the existing rule is enabled or disabled.
     *
     * @param request - ApplyFirewallTemplateRequest
     * @returns ApplyFirewallTemplateResponse
     *
     * @param ApplyFirewallTemplateRequest $request
     *
     * @return ApplyFirewallTemplateResponse
     */
    public function applyFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * Binds a key pair to simple application servers.
     *
     * @remarks
     * You can bind only one key pair to a simple application server in the Simple Application Server console. If a simple application server has a key pair bound, the new key pair overwrites the original key pair.
     *
     * @param request - AttachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AttachKeyPairResponse
     *
     * @param AttachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AttachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AttachKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Binds a key pair to simple application servers.
     *
     * @remarks
     * You can bind only one key pair to a simple application server in the Simple Application Server console. If a simple application server has a key pair bound, the new key pair overwrites the original key pair.
     *
     * @param request - AttachKeyPairRequest
     * @returns AttachKeyPairResponse
     *
     * @param AttachKeyPairRequest $request
     *
     * @return AttachKeyPairResponse
     */
    public function attachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * Creates a Cloud Assistant command.
     *
     * @param request - CreateCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCommandResponse
     *
     * @param CreateCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCommandResponse
     */
    public function createCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableParameter) {
            @$query['EnableParameter'] = $request->enableParameter;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->workingDir) {
            @$query['WorkingDir'] = $request->workingDir;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a Cloud Assistant command.
     *
     * @param request - CreateCommandRequest
     * @returns CreateCommandResponse
     *
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
     * Creates a custom image based on a snapshot of a simple application server.
     *
     * @remarks
     * A custom image is created from a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](https://help.aliyun.com/document_detail/199375.html).
     * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * >  If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     * Before you create a custom image, take note of the following items:
     * *   The custom image and the corresponding simple application server must reside in the same region.
     * *   The maximum number of custom images that you can create is 3 times the number of simple application servers that you have, but cannot exceed 15.
     * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot in addition to a system disk snapshot when you create the custom image.
     * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on the server are also released.
     * *   Resetting the system or changing the image of a simple application server clears the disk data on the server. Back up the data as needed.
     *
     * @param request - CreateCustomImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCustomImageResponse
     *
     * @param CreateCustomImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataSnapshotId) {
            @$query['DataSnapshotId'] = $request->dataSnapshotId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->systemSnapshotId) {
            @$query['SystemSnapshotId'] = $request->systemSnapshotId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom image based on a snapshot of a simple application server.
     *
     * @remarks
     * A custom image is created from a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](https://help.aliyun.com/document_detail/199375.html).
     * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * >  If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     * Before you create a custom image, take note of the following items:
     * *   The custom image and the corresponding simple application server must reside in the same region.
     * *   The maximum number of custom images that you can create is 3 times the number of simple application servers that you have, but cannot exceed 15.
     * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot in addition to a system disk snapshot when you create the custom image.
     * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on the server are also released.
     * *   Resetting the system or changing the image of a simple application server clears the disk data on the server. Back up the data as needed.
     *
     * @param request - CreateCustomImageRequest
     * @returns CreateCustomImageResponse
     *
     * @param CreateCustomImageRequest $request
     *
     * @return CreateCustomImageResponse
     */
    public function createCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomImageWithOptions($request, $runtime);
    }

    /**
     * Creates a firewall rule for a simple application server.
     *
     * @remarks
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *
     * @param request - CreateFirewallRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFirewallRuleResponse
     *
     * @param CreateFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateFirewallRuleResponse
     */
    public function createFirewallRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->ruleProtocol) {
            @$query['RuleProtocol'] = $request->ruleProtocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFirewallRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a firewall rule for a simple application server.
     *
     * @remarks
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *
     * @param request - CreateFirewallRuleRequest
     * @returns CreateFirewallRuleResponse
     *
     * @param CreateFirewallRuleRequest $request
     *
     * @return CreateFirewallRuleResponse
     */
    public function createFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * Creates multiple firewall rules for a simple application server at a time.
     *
     * @remarks
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *
     * @param tmpReq - CreateFirewallRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFirewallRulesResponse
     *
     * @param CreateFirewallRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateFirewallRulesResponse
     */
    public function createFirewallRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFirewallRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->firewallRules) {
            $request->firewallRulesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->firewallRules, 'FirewallRules', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallRulesShrink) {
            @$query['FirewallRules'] = $request->firewallRulesShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFirewallRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates multiple firewall rules for a simple application server at a time.
     *
     * @remarks
     * Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *
     * @param request - CreateFirewallRulesRequest
     * @returns CreateFirewallRulesResponse
     *
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
     * Creates a firewall template.
     *
     * @remarks
     * Simple Application Server supports the firewall template feature that provides multiple firewall rules. You can use a template to add a group of firewall rules to one or more simple application servers at a time. This improves the efficiency of setting firewall rules.
     *
     * @param request - CreateFirewallTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFirewallTemplateResponse
     *
     * @param CreateFirewallTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateFirewallTemplateResponse
     */
    public function createFirewallTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->firewallRule) {
            @$query['FirewallRule'] = $request->firewallRule;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFirewallTemplate',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFirewallTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a firewall template.
     *
     * @remarks
     * Simple Application Server supports the firewall template feature that provides multiple firewall rules. You can use a template to add a group of firewall rules to one or more simple application servers at a time. This improves the efficiency of setting firewall rules.
     *
     * @param request - CreateFirewallTemplateRequest
     * @returns CreateFirewallTemplateResponse
     *
     * @param CreateFirewallTemplateRequest $request
     *
     * @return CreateFirewallTemplateResponse
     */
    public function createFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * Adds firewall rules to a firewall template based on your business requirements.
     *
     * @remarks
     * Adding firewall rules to a firewall template does not affect the firewall rules that have been applied to simple application servers..
     *
     * @param request - CreateFirewallTemplateRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateFirewallTemplateRulesResponse
     *
     * @param CreateFirewallTemplateRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateFirewallTemplateRulesResponse
     */
    public function createFirewallTemplateRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallRule) {
            @$query['FirewallRule'] = $request->firewallRule;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFirewallTemplateRules',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateFirewallTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateFirewallTemplateRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds firewall rules to a firewall template based on your business requirements.
     *
     * @remarks
     * Adding firewall rules to a firewall template does not affect the firewall rules that have been applied to simple application servers..
     *
     * @param request - CreateFirewallTemplateRulesRequest
     * @returns CreateFirewallTemplateRulesResponse
     *
     * @param CreateFirewallTemplateRulesRequest $request
     *
     * @return CreateFirewallTemplateRulesResponse
     */
    public function createFirewallTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * Creates a key pair for a simple application server.
     *
     * @param request - CreateInstanceKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateInstanceKeyPairResponse
     *
     * @param CreateInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInstanceKeyPairResponse
     */
    public function createInstanceKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstanceKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a key pair for a simple application server.
     *
     * @param request - CreateInstanceKeyPairRequest
     * @returns CreateInstanceKeyPairResponse
     *
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
     * Creates subscription simple application servers.
     *
     * @remarks
     *   Before you call this operation, we recommend that you understand the billing rules of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * >  If you have coupons in your Alibaba Cloud account, the coupons are preferentially used to pay for the simple application servers.
     * *   You can create a maximum of 50 simple application servers in a region for an Alibaba Cloud account.
     * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *
     * @param request - CreateInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateInstancesResponse
     *
     * @param CreateInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateInstancesResponse
     */
    public function createInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates subscription simple application servers.
     *
     * @remarks
     *   Before you call this operation, we recommend that you understand the billing rules of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * >  If you have coupons in your Alibaba Cloud account, the coupons are preferentially used to pay for the simple application servers.
     * *   You can create a maximum of 50 simple application servers in a region for an Alibaba Cloud account.
     * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     *
     * @param request - CreateInstancesRequest
     * @returns CreateInstancesResponse
     *
     * @param CreateInstancesRequest $request
     *
     * @return CreateInstancesResponse
     */
    public function createInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstancesWithOptions($request, $runtime);
    }

    /**
     * Creates a key pair.
     *
     * @remarks
     * Alibaba Cloud SSH key pairs offer a secure and efficient logon authentication mechanism, facilitating both verification and encrypted communication within the SSH protocol framework. An SSH key pair is essentially constituted by a public key and a private key. Tailored for Linux-based simple application servers, this security measure enhances security and convenience, effectively addressing your heightened security requirements.
     * *   The key pair logon method is only valid for Linux-based simple application servers.
     * *   A maximum of 10 key pairs can be created in a region for an Alibaba Cloud account.
     * *   Only RSA 2048-bit key pairs can be created in the Simple Application Server console.
     *
     * @param request - CreateKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateKeyPairResponse
     *
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a key pair.
     *
     * @remarks
     * Alibaba Cloud SSH key pairs offer a secure and efficient logon authentication mechanism, facilitating both verification and encrypted communication within the SSH protocol framework. An SSH key pair is essentially constituted by a public key and a private key. Tailored for Linux-based simple application servers, this security measure enhances security and convenience, effectively addressing your heightened security requirements.
     * *   The key pair logon method is only valid for Linux-based simple application servers.
     * *   A maximum of 10 key pairs can be created in a region for an Alibaba Cloud account.
     * *   Only RSA 2048-bit key pairs can be created in the Simple Application Server console.
     *
     * @param request - CreateKeyPairRequest
     * @returns CreateKeyPairResponse
     *
     * @param CreateKeyPairRequest $request
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * Creates a snapshot for a disk.
     *
     * @remarks
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after misoperations on servers, recover data after network attacks, and create custom images.
     * >  You are not charged for creating snapshots in Simple Application Server.
     * ### [](#)Precautions
     * *   You can create up to three snapshots for each simple application server.
     * *   The maximum number of snapshots that you create per Alibaba Cloud account is triple of the number of simple application servers that are created. The value cannot be greater than 15.
     * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     * *   If you reset a simple application server after you create a snapshot for the server, the snapshot is retained but cannot be used to restore the disks of the server.
     *
     * @param request - CreateSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSnapshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a snapshot for a disk.
     *
     * @remarks
     * A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after misoperations on servers, recover data after network attacks, and create custom images.
     * >  You are not charged for creating snapshots in Simple Application Server.
     * ### [](#)Precautions
     * *   You can create up to three snapshots for each simple application server.
     * *   The maximum number of snapshots that you create per Alibaba Cloud account is triple of the number of simple application servers that are created. The value cannot be greater than 15.
     * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     * *   If you reset a simple application server after you create a snapshot for the server, the snapshot is retained but cannot be used to restore the disks of the server.
     *
     * @param request - CreateSnapshotRequest
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * Deletes a Command Assistant command.
     *
     * @remarks
     * You cannot delete commands that are being run.
     *
     * @param request - DeleteCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCommandResponse
     *
     * @param DeleteCommandRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCommandResponse
     */
    public function deleteCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandId) {
            @$query['CommandId'] = $request->commandId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a Command Assistant command.
     *
     * @remarks
     * You cannot delete commands that are being run.
     *
     * @param request - DeleteCommandRequest
     * @returns DeleteCommandResponse
     *
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
     * Deletes a custom image.
     *
     * @remarks
     * You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     * >  To delete a shared image, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or API. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](https://help.aliyun.com/document_detail/199378.html).
     *
     * @param request - DeleteCustomImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCustomImageResponse
     *
     * @param DeleteCustomImageRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteCustomImageResponse
     */
    public function deleteCustomImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomImageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomImageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom image.
     *
     * @remarks
     * You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     * >  To delete a shared image, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or API. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](https://help.aliyun.com/document_detail/199378.html).
     *
     * @param request - DeleteCustomImageRequest
     * @returns DeleteCustomImageResponse
     *
     * @param DeleteCustomImageRequest $request
     *
     * @return DeleteCustomImageResponse
     */
    public function deleteCustomImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomImageWithOptions($request, $runtime);
    }

    /**
     * Deletes custom images. If you no longer require a custom image, you can call this operation to delete the custom image. You can also call this operation to delete multiple custom images at the same time. After a custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *
     * @remarks
     * If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling an ECS API operation. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see [Copy a custom image](https://help.aliyun.com/document_detail/199378.html).
     *
     * @param request - DeleteCustomImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCustomImagesResponse
     *
     * @param DeleteCustomImagesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCustomImagesResponse
     */
    public function deleteCustomImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageIds) {
            @$query['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCustomImages',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomImagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes custom images. If you no longer require a custom image, you can call this operation to delete the custom image. You can also call this operation to delete multiple custom images at the same time. After a custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *
     * @remarks
     * If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling an ECS API operation. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see [Copy a custom image](https://help.aliyun.com/document_detail/199378.html).
     *
     * @param request - DeleteCustomImagesRequest
     * @returns DeleteCustomImagesResponse
     *
     * @param DeleteCustomImagesRequest $request
     *
     * @return DeleteCustomImagesResponse
     */
    public function deleteCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomImagesWithOptions($request, $runtime);
    }

    /**
     * Deletes a firewall rule of a simple application server.
     *
     * @remarks
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *
     * @param request - DeleteFirewallRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFirewallRuleResponse
     *
     * @param DeleteFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteFirewallRuleResponse
     */
    public function deleteFirewallRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFirewallRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a firewall rule of a simple application server.
     *
     * @remarks
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *
     * @param request - DeleteFirewallRuleRequest
     * @returns DeleteFirewallRuleResponse
     *
     * @param DeleteFirewallRuleRequest $request
     *
     * @return DeleteFirewallRuleResponse
     */
    public function deleteFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple firewall rules of a simple application server.
     *
     * @remarks
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *
     * @param tmpReq - DeleteFirewallRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFirewallRulesResponse
     *
     * @param DeleteFirewallRulesRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteFirewallRulesResponse
     */
    public function deleteFirewallRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteFirewallRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ruleIds) {
            $request->ruleIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ruleIds, 'RuleIds', 'simple');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleIdsShrink) {
            @$query['RuleIds'] = $request->ruleIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallRules',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFirewallRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes multiple firewall rules of a simple application server.
     *
     * @remarks
     * After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *
     * @param request - DeleteFirewallRulesRequest
     * @returns DeleteFirewallRulesResponse
     *
     * @param DeleteFirewallRulesRequest $request
     *
     * @return DeleteFirewallRulesResponse
     */
    public function deleteFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes firewall rules from a firewall template based on your requirements.
     *
     * @remarks
     * Deletion of firewall rules does not affect the firewall rules that have been applied to simple application servers.
     *
     * @param request - DeleteFirewallTemplateRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFirewallTemplateRulesResponse
     *
     * @param DeleteFirewallTemplateRulesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteFirewallTemplateRulesResponse
     */
    public function deleteFirewallTemplateRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->firewallTemplateRuleId) {
            @$query['FirewallTemplateRuleId'] = $request->firewallTemplateRuleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallTemplateRules',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFirewallTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFirewallTemplateRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes firewall rules from a firewall template based on your requirements.
     *
     * @remarks
     * Deletion of firewall rules does not affect the firewall rules that have been applied to simple application servers.
     *
     * @param request - DeleteFirewallTemplateRulesRequest
     * @returns DeleteFirewallTemplateRulesResponse
     *
     * @param DeleteFirewallTemplateRulesRequest $request
     *
     * @return DeleteFirewallTemplateRulesResponse
     */
    public function deleteFirewallTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * Deletes firewall templates from a simple application server.
     *
     * @remarks
     * Deleting a firewall template does not affect the firewall rules that have been applied to simple application servers. You can delete firewall templates that you no longer need.
     *
     * @param request - DeleteFirewallTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteFirewallTemplatesResponse
     *
     * @param DeleteFirewallTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteFirewallTemplatesResponse
     */
    public function deleteFirewallTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFirewallTemplates',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteFirewallTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteFirewallTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes firewall templates from a simple application server.
     *
     * @remarks
     * Deleting a firewall template does not affect the firewall rules that have been applied to simple application servers. You can delete firewall templates that you no longer need.
     *
     * @param request - DeleteFirewallTemplatesRequest
     * @returns DeleteFirewallTemplatesResponse
     *
     * @param DeleteFirewallTemplatesRequest $request
     *
     * @return DeleteFirewallTemplatesResponse
     */
    public function deleteFirewallTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallTemplatesWithOptions($request, $runtime);
    }

    /**
     * Deletes the key pair of a simple application server.
     *
     * @param request - DeleteInstanceKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteInstanceKeyPairResponse
     *
     * @param DeleteInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteInstanceKeyPairResponse
     */
    public function deleteInstanceKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteInstanceKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the key pair of a simple application server.
     *
     * @param request - DeleteInstanceKeyPairRequest
     * @returns DeleteInstanceKeyPairResponse
     *
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
     * Deletes the SSH key pairs of simple application servers.
     *
     * @remarks
     * You must unbind SSH key pairs that you no longer use from simple application servers before you delete the SSH key pairs.
     *
     * @param request - DeleteKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteKeyPairsResponse
     *
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->keyPairNames) {
            @$query['KeyPairNames'] = $request->keyPairNames;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyPairs',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteKeyPairsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the SSH key pairs of simple application servers.
     *
     * @remarks
     * You must unbind SSH key pairs that you no longer use from simple application servers before you delete the SSH key pairs.
     *
     * @param request - DeleteKeyPairsRequest
     * @returns DeleteKeyPairsResponse
     *
     * @param DeleteKeyPairsRequest $request
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * Deletes a snapshot of a simple application server.
     *
     * @remarks
     * You can delete a snapshot if you no longer need it.
     * >  If a custom image was created from the snapshot, delete the custom image before you delete the snapshot.
     *
     * @param request - DeleteSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSnapshotResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a snapshot of a simple application server.
     *
     * @remarks
     * You can delete a snapshot if you no longer need it.
     * >  If a custom image was created from the snapshot, delete the custom image before you delete the snapshot.
     *
     * @param request - DeleteSnapshotRequest
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * Deletes snapshots of a simple application server.
     *
     * @param request - DeleteSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSnapshotsResponse
     *
     * @param DeleteSnapshotsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnapshotsResponse
     */
    public function deleteSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotIds) {
            @$query['SnapshotIds'] = $request->snapshotIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes snapshots of a simple application server.
     *
     * @param request - DeleteSnapshotsRequest
     * @returns DeleteSnapshotsResponse
     *
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
     * Queries the Command Assistant information of simple application servers.
     *
     * @param tmpReq - DescribeCloudAssistantAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCloudAssistantAttributesResponse
     *
     * @param DescribeCloudAssistantAttributesRequest $tmpReq
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeCloudAssistantAttributesResponse
     */
    public function describeCloudAssistantAttributesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudAssistantAttributesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudAssistantAttributes',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCloudAssistantAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCloudAssistantAttributesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the Command Assistant information of simple application servers.
     *
     * @param request - DescribeCloudAssistantAttributesRequest
     * @returns DescribeCloudAssistantAttributesResponse
     *
     * @param DescribeCloudAssistantAttributesRequest $request
     *
     * @return DescribeCloudAssistantAttributesResponse
     */
    public function describeCloudAssistantAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantAttributesWithOptions($request, $runtime);
    }

    /**
     * Queries whether the Cloud Assistant client is installed on simple application servers.
     *
     * @remarks
     * By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *
     * @param tmpReq - DescribeCloudAssistantStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCloudAssistantStatusResponse
     *
     * @param DescribeCloudAssistantStatusRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudAssistantStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCloudAssistantStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCloudAssistantStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries whether the Cloud Assistant client is installed on simple application servers.
     *
     * @remarks
     * By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *
     * @param request - DescribeCloudAssistantStatusRequest
     * @returns DescribeCloudAssistantStatusResponse
     *
     * @param DescribeCloudAssistantStatusRequest $request
     *
     * @return DescribeCloudAssistantStatusResponse
     */
    public function describeCloudAssistantStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the status of the CloudMonitor agent on simple application servers.
     *
     * @param request - DescribeCloudMonitorAgentStatusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCloudMonitorAgentStatusesResponse
     *
     * @param DescribeCloudMonitorAgentStatusesRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeCloudMonitorAgentStatusesResponse
     */
    public function describeCloudMonitorAgentStatusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCloudMonitorAgentStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCloudMonitorAgentStatusesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of the CloudMonitor agent on simple application servers.
     *
     * @param request - DescribeCloudMonitorAgentStatusesRequest
     * @returns DescribeCloudMonitorAgentStatusesResponse
     *
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
     * Queries the executions and execution status of a Cloud Assistant command.
     *
     * @param request - DescribeCommandInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCommandInvocationsResponse
     *
     * @param DescribeCommandInvocationsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeCommandInvocationsResponse
     */
    public function describeCommandInvocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandId) {
            @$query['CommandId'] = $request->commandId;
        }

        if (null !== $request->commandName) {
            @$query['CommandName'] = $request->commandName;
        }

        if (null !== $request->commandType) {
            @$query['CommandType'] = $request->commandType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->invocationStatus) {
            @$query['InvocationStatus'] = $request->invocationStatus;
        }

        if (null !== $request->invokeId) {
            @$query['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCommandInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCommandInvocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the executions and execution status of a Cloud Assistant command.
     *
     * @param request - DescribeCommandInvocationsRequest
     * @returns DescribeCommandInvocationsResponse
     *
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
     * Queries the commands that you created or the common commands that Alibaba Cloud provides.
     *
     * @param request - DescribeCommandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeCommandsResponse
     *
     * @param DescribeCommandsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeCommandsResponse
     */
    public function describeCommandsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandId) {
            @$query['CommandId'] = $request->commandId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeCommandsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the commands that you created or the common commands that Alibaba Cloud provides.
     *
     * @param request - DescribeCommandsRequest
     * @returns DescribeCommandsResponse
     *
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
     * Queries error logs of databases in a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     *
     * @param request - DescribeDatabaseErrorLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDatabaseErrorLogsResponse
     *
     * @param DescribeDatabaseErrorLogsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDatabaseErrorLogsResponse
     */
    public function describeDatabaseErrorLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabaseErrorLogsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabaseErrorLogsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries error logs of databases in a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     *
     * @param request - DescribeDatabaseErrorLogsRequest
     * @returns DescribeDatabaseErrorLogsResponse
     *
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
     * Queries the monitoring information about a Simple Database Service instance.
     *
     * @remarks
     * After you create a Simple Database Service instance, you can query the details about the instance, including CPU, memory, and disk usage, storage IOPS, and total number of connections.
     *
     * @param request - DescribeDatabaseInstanceMetricDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDatabaseInstanceMetricDataResponse
     *
     * @param DescribeDatabaseInstanceMetricDataRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDatabaseInstanceMetricDataResponse
     */
    public function describeDatabaseInstanceMetricDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabaseInstanceMetricDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabaseInstanceMetricDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the monitoring information about a Simple Database Service instance.
     *
     * @remarks
     * After you create a Simple Database Service instance, you can query the details about the instance, including CPU, memory, and disk usage, storage IOPS, and total number of connections.
     *
     * @param request - DescribeDatabaseInstanceMetricDataRequest
     * @returns DescribeDatabaseInstanceMetricDataResponse
     *
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
     * Queries the parameters of a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to query the information about parameters of a Simple Database Service instance.
     *
     * @param request - DescribeDatabaseInstanceParametersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDatabaseInstanceParametersResponse
     *
     * @param DescribeDatabaseInstanceParametersRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeDatabaseInstanceParametersResponse
     */
    public function describeDatabaseInstanceParametersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabaseInstanceParametersResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabaseInstanceParametersResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the parameters of a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to query the information about parameters of a Simple Database Service instance.
     *
     * @param request - DescribeDatabaseInstanceParametersRequest
     * @returns DescribeDatabaseInstanceParametersResponse
     *
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
     * Queries the information about Simple Database Service instances.
     *
     * @remarks
     * You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoints, internal endpoints, creation time, and expiration time of the instances.
     *
     * @param request - DescribeDatabaseInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDatabaseInstancesResponse
     *
     * @param DescribeDatabaseInstancesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeDatabaseInstancesResponse
     */
    public function describeDatabaseInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseInstanceIds) {
            @$query['DatabaseInstanceIds'] = $request->databaseInstanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabaseInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabaseInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about Simple Database Service instances.
     *
     * @remarks
     * You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoints, internal endpoints, creation time, and expiration time of the instances.
     *
     * @param request - DescribeDatabaseInstancesRequest
     * @returns DescribeDatabaseInstancesResponse
     *
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
     * Queries the slow query log details of a Simple Database Service instance.
     *
     * @remarks
     * You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     * >  Slow query log details are retained for 7 days.
     *
     * @param request - DescribeDatabaseSlowLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeDatabaseSlowLogRecordsResponse
     *
     * @param DescribeDatabaseSlowLogRecordsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDatabaseSlowLogRecordsResponse
     */
    public function describeDatabaseSlowLogRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeDatabaseSlowLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeDatabaseSlowLogRecordsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the slow query log details of a Simple Database Service instance.
     *
     * @remarks
     * You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     * >  Slow query log details are retained for 7 days.
     *
     * @param request - DescribeDatabaseSlowLogRecordsRequest
     * @returns DescribeDatabaseSlowLogRecordsResponse
     *
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
     * Queries the result of applying a firewall template to simple application servers.
     *
     * @param request - DescribeFirewallTemplateApplyResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeFirewallTemplateApplyResultsResponse
     *
     * @param DescribeFirewallTemplateApplyResultsRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeFirewallTemplateApplyResultsResponse
     */
    public function describeFirewallTemplateApplyResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFirewallTemplateApplyResults',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeFirewallTemplateApplyResultsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeFirewallTemplateApplyResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the result of applying a firewall template to simple application servers.
     *
     * @param request - DescribeFirewallTemplateApplyResultsRequest
     * @returns DescribeFirewallTemplateApplyResultsResponse
     *
     * @param DescribeFirewallTemplateApplyResultsRequest $request
     *
     * @return DescribeFirewallTemplateApplyResultsResponse
     */
    public function describeFirewallTemplateApplyResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplateApplyResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the result of applying a firewall template rule to simple application servers.
     *
     * @param request - DescribeFirewallTemplateRulesApplyResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeFirewallTemplateRulesApplyResultResponse
     *
     * @param DescribeFirewallTemplateRulesApplyResultRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeFirewallTemplateRulesApplyResultResponse
     */
    public function describeFirewallTemplateRulesApplyResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFirewallTemplateRulesApplyResult',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeFirewallTemplateRulesApplyResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeFirewallTemplateRulesApplyResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the result of applying a firewall template rule to simple application servers.
     *
     * @param request - DescribeFirewallTemplateRulesApplyResultRequest
     * @returns DescribeFirewallTemplateRulesApplyResultResponse
     *
     * @param DescribeFirewallTemplateRulesApplyResultRequest $request
     *
     * @return DescribeFirewallTemplateRulesApplyResultResponse
     */
    public function describeFirewallTemplateRulesApplyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplateRulesApplyResultWithOptions($request, $runtime);
    }

    /**
     * Queries details about firewall templates.
     *
     * @param request - DescribeFirewallTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeFirewallTemplatesResponse
     *
     * @param DescribeFirewallTemplatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFirewallTemplatesResponse
     */
    public function describeFirewallTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFirewallTemplates',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeFirewallTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeFirewallTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries details about firewall templates.
     *
     * @param request - DescribeFirewallTemplatesRequest
     * @returns DescribeFirewallTemplatesResponse
     *
     * @param DescribeFirewallTemplatesRequest $request
     *
     * @return DescribeFirewallTemplatesResponse
     */
    public function describeFirewallTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries information about the key pair of a simple application server.
     *
     * @param request - DescribeInstanceKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstanceKeyPairResponse
     *
     * @param DescribeInstanceKeyPairRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceKeyPairResponse
     */
    public function describeInstanceKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about the key pair of a simple application server.
     *
     * @param request - DescribeInstanceKeyPairRequest
     * @returns DescribeInstanceKeyPairResponse
     *
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
     * Checks whether a password is set for a simple application server.
     *
     * @param request - DescribeInstancePasswordsSettingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstancePasswordsSettingResponse
     *
     * @param DescribeInstancePasswordsSettingRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeInstancePasswordsSettingResponse
     */
    public function describeInstancePasswordsSettingWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstancePasswordsSettingResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstancePasswordsSettingResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks whether a password is set for a simple application server.
     *
     * @param request - DescribeInstancePasswordsSettingRequest
     * @returns DescribeInstancePasswordsSettingResponse
     *
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
     * Queries the VNC connection address of a simple application server.
     *
     * @param request - DescribeInstanceVncUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInstanceVncUrlResponse
     *
     * @param DescribeInstanceVncUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInstanceVncUrlResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInstanceVncUrlResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the VNC connection address of a simple application server.
     *
     * @param request - DescribeInstanceVncUrlRequest
     * @returns DescribeInstanceVncUrlResponse
     *
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
     * Queries the execution result of a command.
     *
     * @remarks
     *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *
     * @param request - DescribeInvocationResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInvocationResultResponse
     *
     * @param DescribeInvocationResultRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInvocationResultResponse
     */
    public function describeInvocationResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->invokeId) {
            @$query['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInvocationResultResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInvocationResultResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the execution result of a command.
     *
     * @remarks
     *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *
     * @param request - DescribeInvocationResultRequest
     * @returns DescribeInvocationResultResponse
     *
     * @param DescribeInvocationResultRequest $request
     *
     * @return DescribeInvocationResultResponse
     */
    public function describeInvocationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationResultWithOptions($request, $runtime);
    }

    /**
     * Queries details about command execution.
     *
     * @remarks
     *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *
     * @param request - DescribeInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->invokeStatus) {
            @$query['InvokeStatus'] = $request->invokeStatus;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeInvocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries details about command execution.
     *
     * @remarks
     *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *
     * @param request - DescribeInvocationsRequest
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring information about vCPUs, memory, disk IOPS, and traffic of a simple application server.
     *
     * @param request - DescribeMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMonitorDataResponse
     *
     * @param DescribeMonitorDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeMonitorDataResponse
     */
    public function describeMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->length) {
            @$query['Length'] = $request->length;
        }

        if (null !== $request->metricName) {
            @$query['MetricName'] = $request->metricName;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMonitorDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the monitoring information about vCPUs, memory, disk IOPS, and traffic of a simple application server.
     *
     * @param request - DescribeMonitorDataRequest
     * @returns DescribeMonitorDataResponse
     *
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
     * Queries the status of the Security Center agent on a simple application server.
     *
     * @param request - DescribeSecurityAgentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeSecurityAgentStatusResponse
     *
     * @param DescribeSecurityAgentStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSecurityAgentStatusResponse
     */
    public function describeSecurityAgentStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeSecurityAgentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeSecurityAgentStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of the Security Center agent on a simple application server.
     *
     * @param request - DescribeSecurityAgentStatusRequest
     * @returns DescribeSecurityAgentStatusResponse
     *
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
     * Unbinds key pairs from simple application servers.
     *
     * @remarks
     * If you want to change the SSH key pairs that are bound to your simple application servers or your end user no longer needs to access a specific simple application server, you can unbind the SSH key pairs from simple application servers to improve the security of the simple application servers or restrict access to the specific simple application server.
     *
     * @param request - DetachKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DetachKeyPairResponse
     *
     * @param DetachKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetachKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unbinds key pairs from simple application servers.
     *
     * @remarks
     * If you want to change the SSH key pairs that are bound to your simple application servers or your end user no longer needs to access a specific simple application server, you can unbind the SSH key pairs from simple application servers to improve the security of the simple application servers or restrict access to the specific simple application server.
     *
     * @param request - DetachKeyPairRequest
     * @returns DetachKeyPairResponse
     *
     * @param DetachKeyPairRequest $request
     *
     * @return DetachKeyPairResponse
     */
    public function detachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * Disables a firewall rule of a simple application server.
     *
     * @param request - DisableFirewallRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DisableFirewallRuleResponse
     *
     * @param DisableFirewallRuleRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DisableFirewallRuleResponse
     */
    public function disableFirewallRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DisableFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DisableFirewallRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Disables a firewall rule of a simple application server.
     *
     * @param request - DisableFirewallRuleRequest
     * @returns DisableFirewallRuleResponse
     *
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
     * Enables a firewall rule for a simple application server.
     *
     * @param request - EnableFirewallRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns EnableFirewallRuleResponse
     *
     * @param EnableFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return EnableFirewallRuleResponse
     */
    public function enableFirewallRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return EnableFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnableFirewallRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Enables a firewall rule for a simple application server.
     *
     * @param request - EnableFirewallRuleRequest
     * @returns EnableFirewallRuleResponse
     *
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
     * Imports an existing key pair to the Simple Application Server console.
     *
     * @remarks
     * You can call this operation to import an existing key pair to the Simple Application Server console. This way, you can use the key pair to log on to simple application servers. The existing key pair that you want to import must use a supported encryption method. For more information, see [Q2: Which encryption methods must be used by key pairs when I import existing key pairs to the Simple Application Server console?](https://help.aliyun.com/document_detail/59085.html)
     *
     * @param request - ImportKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ImportKeyPairResponse
     *
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->publicKeyBody) {
            @$query['PublicKeyBody'] = $request->publicKeyBody;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportKeyPair',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ImportKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports an existing key pair to the Simple Application Server console.
     *
     * @remarks
     * You can call this operation to import an existing key pair to the Simple Application Server console. This way, you can use the key pair to log on to simple application servers. The existing key pair that you want to import must use a supported encryption method. For more information, see [Q2: Which encryption methods must be used by key pairs when I import existing key pairs to the Simple Application Server console?](https://help.aliyun.com/document_detail/59085.html)
     *
     * @param request - ImportKeyPairRequest
     * @returns ImportKeyPairResponse
     *
     * @param ImportKeyPairRequest $request
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * Installs the Cloud Assistant client on simple application servers at a time.
     *
     * @remarks
     * To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](https://help.aliyun.com/document_detail/439512.html) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to restart the servers to allow the client to take effect.
     *
     * @param tmpReq - InstallCloudAssistantRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallCloudAssistantResponse
     *
     * @param InstallCloudAssistantRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistantWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InstallCloudAssistantShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallCloudAssistantResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallCloudAssistantResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Installs the Cloud Assistant client on simple application servers at a time.
     *
     * @remarks
     * To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](https://help.aliyun.com/document_detail/439512.html) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to restart the servers to allow the client to take effect.
     *
     * @param request - InstallCloudAssistantRequest
     * @returns InstallCloudAssistantResponse
     *
     * @param InstallCloudAssistantRequest $request
     *
     * @return InstallCloudAssistantResponse
     */
    public function installCloudAssistant($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAssistantWithOptions($request, $runtime);
    }

    /**
     * Installs the CloudMonitor agent for a simple application server.
     *
     * @param request - InstallCloudMonitorAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InstallCloudMonitorAgentResponse
     *
     * @param InstallCloudMonitorAgentRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return InstallCloudMonitorAgentResponse
     */
    public function installCloudMonitorAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InstallCloudMonitorAgentResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InstallCloudMonitorAgentResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Installs the CloudMonitor agent for a simple application server.
     *
     * @param request - InstallCloudMonitorAgentRequest
     * @returns InstallCloudMonitorAgentResponse
     *
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
     * Runs a Command Assistant command for one or more simple application servers.
     *
     * @remarks
     *   The simple application servers for which you want to call the operation must meet the following conditions. If a simple application server cannot meet the conditions, you must call this operation again.
     *     *   The simple application servers are in the `Running` state. You can call the [ListInstances](https://help.aliyun.com/document_detail/2361065.html) operation to query the status of simple application servers.
     *     *   Cloud Assistant Agent is installed on the simple application servers. For more information, see [InstallCloudAssistant](https://help.aliyun.com/document_detail/2361030.html).
     *     *   If you run a PowerShell command, make sure that the PowerShell module is configured for the simple application servers.
     * *   The command may fail to be run due to the abnormal states of simple application servers, network exceptions, or exceptions in Cloud Assistant Agent. If the command fails to be run, no execution information is generated.
     * *   If you enable the custom parameter feature when you create a command, you must set the `Parameters` parameter to specify custom parameters when you run the command.
     * *   When you call this operation, you can select only one common command or a custom command that you have created.
     *
     * @param tmpReq - InvokeCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InvokeCommandResponse
     *
     * @param InvokeCommandRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return InvokeCommandResponse
     */
    public function invokeCommandWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new InvokeCommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->commandId) {
            @$query['CommandId'] = $request->commandId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InvokeCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InvokeCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Runs a Command Assistant command for one or more simple application servers.
     *
     * @remarks
     *   The simple application servers for which you want to call the operation must meet the following conditions. If a simple application server cannot meet the conditions, you must call this operation again.
     *     *   The simple application servers are in the `Running` state. You can call the [ListInstances](https://help.aliyun.com/document_detail/2361065.html) operation to query the status of simple application servers.
     *     *   Cloud Assistant Agent is installed on the simple application servers. For more information, see [InstallCloudAssistant](https://help.aliyun.com/document_detail/2361030.html).
     *     *   If you run a PowerShell command, make sure that the PowerShell module is configured for the simple application servers.
     * *   The command may fail to be run due to the abnormal states of simple application servers, network exceptions, or exceptions in Cloud Assistant Agent. If the command fails to be run, no execution information is generated.
     * *   If you enable the custom parameter feature when you create a command, you must set the `Parameters` parameter to specify custom parameters when you run the command.
     * *   When you call this operation, you can select only one common command or a custom command that you have created.
     *
     * @param request - InvokeCommandRequest
     * @returns InvokeCommandResponse
     *
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
     * Queries information about custom images that are shared across Alibaba Cloud accounts in a region.
     *
     * @param request - ListCustomImageShareAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCustomImageShareAccountsResponse
     *
     * @param ListCustomImageShareAccountsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListCustomImageShareAccountsResponse
     */
    public function listCustomImageShareAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomImageShareAccounts',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomImageShareAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomImageShareAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about custom images that are shared across Alibaba Cloud accounts in a region.
     *
     * @param request - ListCustomImageShareAccountsRequest
     * @returns ListCustomImageShareAccountsResponse
     *
     * @param ListCustomImageShareAccountsRequest $request
     *
     * @return ListCustomImageShareAccountsResponse
     */
    public function listCustomImageShareAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImageShareAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about custom images in a region.
     *
     * @param request - ListCustomImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCustomImagesResponse
     *
     * @param ListCustomImagesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListCustomImagesResponse
     */
    public function listCustomImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->dataSnapshotId) {
            @$query['DataSnapshotId'] = $request->dataSnapshotId;
        }

        if (null !== $request->imageIds) {
            @$query['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->imageNames) {
            @$query['ImageNames'] = $request->imageNames;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->share) {
            @$query['Share'] = $request->share;
        }

        if (null !== $request->systemSnapshotId) {
            @$query['SystemSnapshotId'] = $request->systemSnapshotId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomImagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about custom images in a region.
     *
     * @param request - ListCustomImagesRequest
     * @returns ListCustomImagesResponse
     *
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
     * Queries the information about disks in a region.
     *
     * @remarks
     * The `InstanceId`, `DiskIds`, and `ResourceGroupId` parameters are optional. However, you can specify them as filter conditions and combine them with the logical AND operator to filter disks that you want to query.
     *
     * @param request - ListDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDisksResponse
     *
     * @param ListDisksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListDisksResponse
     */
    public function listDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskIds) {
            @$query['DiskIds'] = $request->diskIds;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDisksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDisksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about disks in a region.
     *
     * @remarks
     * The `InstanceId`, `DiskIds`, and `ResourceGroupId` parameters are optional. However, you can specify them as filter conditions and combine them with the logical AND operator to filter disks that you want to query.
     *
     * @param request - ListDisksRequest
     * @returns ListDisksResponse
     *
     * @param ListDisksRequest $request
     *
     * @return ListDisksResponse
     */
    public function listDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDisksWithOptions($request, $runtime);
    }

    /**
     * Queries the firewall rules of a simple application server.
     *
     * @remarks
     * You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *
     * @param request - ListFirewallRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListFirewallRulesResponse
     *
     * @param ListFirewallRulesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListFirewallRulesResponse
     */
    public function listFirewallRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firewallRuleId) {
            @$query['FirewallRuleId'] = $request->firewallRuleId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListFirewallRulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the firewall rules of a simple application server.
     *
     * @remarks
     * You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     *
     * @param request - ListFirewallRulesRequest
     * @returns ListFirewallRulesResponse
     *
     * @param ListFirewallRulesRequest $request
     *
     * @return ListFirewallRulesResponse
     */
    public function listFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about images in a region.
     *
     * @remarks
     * You can query details about one or more images in a specified region, including the IDs, names, and types of the images.
     *
     * @param request - ListImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageIds) {
            @$query['ImageIds'] = $request->imageIds;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListImagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about images in a region.
     *
     * @remarks
     * You can query details about one or more images in a specified region, including the IDs, names, and types of the images.
     *
     * @param request - ListImagesRequest
     * @returns ListImagesResponse
     *
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listImagesWithOptions($request, $runtime);
    }

    /**
     * Queries the plans to which you can upgrade your simple application server.
     *
     * @remarks
     * If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans that can be upgraded for your simple application server. Then, you can call the [UpgradeInstance](https://help.aliyun.com/document_detail/190445.html) operation to upgrade the plan.
     * >  We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the plan. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * For the precautions about plan upgrade, see [Upgrade a simple application server](https://help.aliyun.com/document_detail/61433.html).
     *
     * @param request - ListInstancePlansModificationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstancePlansModificationResponse
     *
     * @param ListInstancePlansModificationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListInstancePlansModificationResponse
     */
    public function listInstancePlansModificationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancePlansModificationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancePlansModificationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the plans to which you can upgrade your simple application server.
     *
     * @remarks
     * If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans that can be upgraded for your simple application server. Then, you can call the [UpgradeInstance](https://help.aliyun.com/document_detail/190445.html) operation to upgrade the plan.
     * >  We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the plan. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * For the precautions about plan upgrade, see [Upgrade a simple application server](https://help.aliyun.com/document_detail/61433.html).
     *
     * @param request - ListInstancePlansModificationRequest
     * @returns ListInstancePlansModificationResponse
     *
     * @param ListInstancePlansModificationRequest $request
     *
     * @return ListInstancePlansModificationResponse
     */
    public function listInstancePlansModification($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancePlansModificationWithOptions($request, $runtime);
    }

    /**
     * Queries the status of simple application servers.
     *
     * @param request - ListInstanceStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstanceStatusResponse
     *
     * @param ListInstanceStatusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListInstanceStatusResponse
     */
    public function listInstanceStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstanceStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstanceStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status of simple application servers.
     *
     * @param request - ListInstanceStatusRequest
     * @returns ListInstanceStatusResponse
     *
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
     * Queries the information about simple application servers in a region.
     *
     * @remarks
     * You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *
     * @param request - ListInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListInstancesResponse
     */
    public function listInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->publicIpAddresses) {
            @$query['PublicIpAddresses'] = $request->publicIpAddresses;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about simple application servers in a region.
     *
     * @remarks
     * You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     *
     * @param request - ListInstancesRequest
     * @returns ListInstancesResponse
     *
     * @param ListInstancesRequest $request
     *
     * @return ListInstancesResponse
     */
    public function listInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the details about data transfer plans of simple application servers.
     *
     * @remarks
     * You can query the details of data transfer plans of simple application servers, including the total quota, used quota, unused quota, and excess data transfers in the current month.
     * Simple Application Server provides data transfer plans that can be used to offset data transfer fees. You are charged for excess data transfers. Take note of the following items:
     * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     * For more information, see [Quotas and billing of data transfers](https://help.aliyun.com/document_detail/86281.html).
     *
     * @param request - ListInstancesTrafficPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListInstancesTrafficPackagesResponse
     *
     * @param ListInstancesTrafficPackagesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListInstancesTrafficPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListInstancesTrafficPackagesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details about data transfer plans of simple application servers.
     *
     * @remarks
     * You can query the details of data transfer plans of simple application servers, including the total quota, used quota, unused quota, and excess data transfers in the current month.
     * Simple Application Server provides data transfer plans that can be used to offset data transfer fees. You are charged for excess data transfers. Take note of the following items:
     * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     * For more information, see [Quotas and billing of data transfers](https://help.aliyun.com/document_detail/86281.html).
     *
     * @param request - ListInstancesTrafficPackagesRequest
     * @returns ListInstancesTrafficPackagesResponse
     *
     * @param ListInstancesTrafficPackagesRequest $request
     *
     * @return ListInstancesTrafficPackagesResponse
     */
    public function listInstancesTrafficPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstancesTrafficPackagesWithOptions($request, $runtime);
    }

    /**
     * Queries the AccessKey pairs that are bound to simple application servers in a specific region.
     *
     * @param request - ListKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListKeyPairsResponse
     *
     * @param ListKeyPairsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListKeyPairsResponse
     */
    public function listKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListKeyPairs',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListKeyPairsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the AccessKey pairs that are bound to simple application servers in a specific region.
     *
     * @param request - ListKeyPairsRequest
     * @returns ListKeyPairsResponse
     *
     * @param ListKeyPairsRequest $request
     *
     * @return ListKeyPairsResponse
     */
    public function listKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeyPairsWithOptions($request, $runtime);
    }

    /**
     * Queries all plans provided by Simple Application Server in a region.
     *
     * @remarks
     * You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *
     * @param request - ListPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPlansResponse
     *
     * @param ListPlansRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListPlansResponse
     */
    public function listPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPlansResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPlansResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all plans provided by Simple Application Server in a region.
     *
     * @remarks
     * You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     *
     * @param request - ListPlansRequest
     * @returns ListPlansResponse
     *
     * @param ListPlansRequest $request
     *
     * @return ListPlansResponse
     */
    public function listPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPlansWithOptions($request, $runtime);
    }

    /**
     * Queries all regions in which Simple Application Server is supported.
     *
     * @remarks
     * The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListRegionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all regions in which Simple Application Server is supported.
     *
     * @remarks
     * The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     *
     * @param request - ListRegionsRequest
     * @returns ListRegionsResponse
     *
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about snapshots that are created for a simple application server.
     *
     * @remarks
     * The `InstanceId`, `DiskId`, `SnapshotIds`, and `ResourceGroupId` parameters are optional. However, you can specify them as filter conditions and combine them with the logical AND operator to filter snapshots that you want to query.
     *
     * @param request - ListSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSnapshotsResponse
     *
     * @param ListSnapshotsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->snapshotIds) {
            @$query['SnapshotIds'] = $request->snapshotIds;
        }

        if (null !== $request->sourceDiskType) {
            @$query['SourceDiskType'] = $request->sourceDiskType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSnapshotsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about snapshots that are created for a simple application server.
     *
     * @remarks
     * The `InstanceId`, `DiskId`, `SnapshotIds`, and `ResourceGroupId` parameters are optional. However, you can specify them as filter conditions and combine them with the logical AND operator to filter snapshots that you want to query.
     *
     * @param request - ListSnapshotsRequest
     * @returns ListSnapshotsResponse
     *
     * @param ListSnapshotsRequest $request
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * Queries the tags that are added to simple resources, such as instances, snapshots, disks, images, commands, and firewall rules.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the tags that are added to simple resources, such as instances, snapshots, disks, images, commands, and firewall rules.
     *
     * @param request - ListTagResourcesRequest
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * Logs on to a simple application server on Workbench.
     *
     * @remarks
     * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *
     * @param request - LoginInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns LoginInstanceResponse
     *
     * @param LoginInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LoginInstanceResponse
     */
    public function loginInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return LoginInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return LoginInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Logs on to a simple application server on Workbench.
     *
     * @remarks
     * After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *
     * @param request - LoginInstanceRequest
     * @returns LoginInstanceResponse
     *
     * @param LoginInstanceRequest $request
     *
     * @return LoginInstanceResponse
     */
    public function loginInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->loginInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to modify the description of a Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ModifyDatabaseInstanceDescriptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyDatabaseInstanceDescriptionResponse
     *
     * @param ModifyDatabaseInstanceDescriptionRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDatabaseInstanceDescriptionResponse
     */
    public function modifyDatabaseInstanceDescriptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceDescription) {
            @$query['DatabaseInstanceDescription'] = $request->databaseInstanceDescription;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDatabaseInstanceDescriptionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDatabaseInstanceDescriptionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the description of a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to modify the description of a Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ModifyDatabaseInstanceDescriptionRequest
     * @returns ModifyDatabaseInstanceDescriptionResponse
     *
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
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     *
     * @remarks
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ModifyDatabaseInstanceParameterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyDatabaseInstanceParameterResponse
     *
     * @param ModifyDatabaseInstanceParameterRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyDatabaseInstanceParameterResponse
     */
    public function modifyDatabaseInstanceParameterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->forceRestart) {
            @$query['ForceRestart'] = $request->forceRestart;
        }

        if (null !== $request->parameters) {
            @$query['Parameters'] = $request->parameters;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyDatabaseInstanceParameterResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyDatabaseInstanceParameterResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     *
     * @remarks
     * After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ModifyDatabaseInstanceParameterRequest
     * @returns ModifyDatabaseInstanceParameterResponse
     *
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
     * Modifies the firewall rule of a simple application server.
     *
     * @param request - ModifyFirewallRuleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyFirewallRuleResponse
     *
     * @param ModifyFirewallRuleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyFirewallRuleResponse
     */
    public function modifyFirewallRuleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleProtocol) {
            @$query['RuleProtocol'] = $request->ruleProtocol;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyFirewallRuleResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyFirewallRuleResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the firewall rule of a simple application server.
     *
     * @param request - ModifyFirewallRuleRequest
     * @returns ModifyFirewallRuleResponse
     *
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
     * Modifies the firewall rule in a firewall template. You can apply the new firewall rule to simple application servers.
     *
     * @remarks
     * Modifying a firewall template does not affect the firewall rules that have been applied to simple application servers.
     *
     * @param request - ModifyFirewallTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyFirewallTemplateResponse
     *
     * @param ModifyFirewallTemplateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyFirewallTemplateResponse
     */
    public function modifyFirewallTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->firewallTemplateId) {
            @$query['FirewallTemplateId'] = $request->firewallTemplateId;
        }

        if (null !== $request->firewallTemplateRule) {
            @$query['FirewallTemplateRule'] = $request->firewallTemplateRule;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFirewallTemplate',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyFirewallTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the firewall rule in a firewall template. You can apply the new firewall rule to simple application servers.
     *
     * @remarks
     * Modifying a firewall template does not affect the firewall rules that have been applied to simple application servers.
     *
     * @param request - ModifyFirewallTemplateRequest
     * @returns ModifyFirewallTemplateResponse
     *
     * @param ModifyFirewallTemplateRequest $request
     *
     * @return ModifyFirewallTemplateResponse
     */
    public function modifyFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * Shares or unshares a custom image to Elastic Compute Service (ECS).
     *
     * @remarks
     * Custom images can be shared to ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to deploy your business on ECS instances, you can share your custom image to ECS to transfer your business from Simple Application Server to ECS.
     * >  The region in which the shared image resides in ECS is the same as the region in which the custom image resides in Simple Application Server.
     * You can unshare a custom image based on your business requirements or when you want to delete the custom image. After you unshare a custom image, take note of the following items:
     * *   You cannot query or use the custom image by using the ECS console or API.
     * *   You cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     *
     * @param request - ModifyImageShareStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyImageShareStatusResponse
     *
     * @param ModifyImageShareStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->operation) {
            @$query['Operation'] = $request->operation;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyImageShareStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyImageShareStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Shares or unshares a custom image to Elastic Compute Service (ECS).
     *
     * @remarks
     * Custom images can be shared to ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to deploy your business on ECS instances, you can share your custom image to ECS to transfer your business from Simple Application Server to ECS.
     * >  The region in which the shared image resides in ECS is the same as the region in which the custom image resides in Simple Application Server.
     * You can unshare a custom image based on your business requirements or when you want to delete the custom image. After you unshare a custom image, take note of the following items:
     * *   You cannot query or use the custom image by using the ECS console or API.
     * *   You cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     *
     * @param request - ModifyImageShareStatusRequest
     * @returns ModifyImageShareStatusResponse
     *
     * @param ModifyImageShareStatusRequest $request
     *
     * @return ModifyImageShareStatusResponse
     */
    public function modifyImageShareStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageShareStatusWithOptions($request, $runtime);
    }

    /**
     * Changes the VNC password of a simple application server.
     *
     * @param request - ModifyInstanceVncPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ModifyInstanceVncPasswordResponse
     *
     * @param ModifyInstanceVncPasswordRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyInstanceVncPasswordResponse
     */
    public function modifyInstanceVncPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vncPassword) {
            @$query['VncPassword'] = $request->vncPassword;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ModifyInstanceVncPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ModifyInstanceVncPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Changes the VNC password of a simple application server.
     *
     * @param request - ModifyInstanceVncPasswordRequest
     * @returns ModifyInstanceVncPasswordResponse
     *
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
     * Restarts a simple application server.
     *
     * @remarks
     *   Only simple application servers that are in the Running state can be restarted.
     * *   After you restart a simple application server, it enters the Starting state.
     *
     * @param request - RebootInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RebootInstanceResponse
     *
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebootInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restarts a simple application server.
     *
     * @remarks
     *   Only simple application servers that are in the Running state can be restarted.
     * *   After you restart a simple application server, it enters the Starting state.
     *
     * @param request - RebootInstanceRequest
     * @returns RebootInstanceResponse
     *
     * @param RebootInstanceRequest $request
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * Restarts simple application servers.
     *
     * @param request - RebootInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RebootInstancesResponse
     *
     * @param RebootInstancesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceReboot) {
            @$query['ForceReboot'] = $request->forceReboot;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RebootInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RebootInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Restarts simple application servers.
     *
     * @param request - RebootInstancesRequest
     * @returns RebootInstancesResponse
     *
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
     *
     * @remarks
     * If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ReleasePublicConnectionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ReleasePublicConnectionResponse
     *
     * @param ReleasePublicConnectionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePublicConnectionResponse
     */
    public function releasePublicConnectionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ReleasePublicConnectionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ReleasePublicConnectionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     *
     * @remarks
     * If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ReleasePublicConnectionRequest
     * @returns ReleasePublicConnectionResponse
     *
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
     * Unshares a custom image that is shared across Alibaba Cloud accounts.
     *
     * @param request - RemoveCustomImageShareAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RemoveCustomImageShareAccountResponse
     *
     * @param RemoveCustomImageShareAccountRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return RemoveCustomImageShareAccountResponse
     */
    public function removeCustomImageShareAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->account) {
            @$query['Account'] = $request->account;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveCustomImageShareAccount',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RemoveCustomImageShareAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RemoveCustomImageShareAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unshares a custom image that is shared across Alibaba Cloud accounts.
     *
     * @param request - RemoveCustomImageShareAccountRequest
     * @returns RemoveCustomImageShareAccountResponse
     *
     * @param RemoveCustomImageShareAccountRequest $request
     *
     * @return RemoveCustomImageShareAccountResponse
     */
    public function removeCustomImageShareAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCustomImageShareAccountWithOptions($request, $runtime);
    }

    /**
     * Renews a simple application server.
     *
     * @remarks
     *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   Before you call this operation, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the renewal fails.
     *
     * @param request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RenewInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Renews a simple application server.
     *
     * @remarks
     *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   Before you call this operation, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the renewal fails.
     *
     * @param request - RenewInstanceRequest
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     *
     * @remarks
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ResetDatabaseAccountPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResetDatabaseAccountPasswordResponse
     *
     * @param ResetDatabaseAccountPasswordRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ResetDatabaseAccountPasswordResponse
     */
    public function resetDatabaseAccountPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountPassword) {
            @$query['AccountPassword'] = $request->accountPassword;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetDatabaseAccountPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetDatabaseAccountPasswordResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     *
     * @remarks
     * If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - ResetDatabaseAccountPasswordRequest
     * @returns ResetDatabaseAccountPasswordResponse
     *
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
     * Rolls back a disk based on a snapshot.
     *
     * @remarks
     *   You can call this operation only if the associated simple application server is in the Stopped state.
     * *   If you restore a disk from a snapshot, the incremental data after the snapshot is created is lost. We recommend that you back up the data before you perform this operation.
     * ### [](#)Precautions
     * Resetting the system or changing the image of a simple application server clears the disk data on the server. Snapshots created before the reset or change are retained but cannot be used to restore disks.
     *
     * @param request - ResetDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResetDiskResponse
     *
     * @param ResetDiskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetDiskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetDiskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Rolls back a disk based on a snapshot.
     *
     * @remarks
     *   You can call this operation only if the associated simple application server is in the Stopped state.
     * *   If you restore a disk from a snapshot, the incremental data after the snapshot is created is lost. We recommend that you back up the data before you perform this operation.
     * ### [](#)Precautions
     * Resetting the system or changing the image of a simple application server clears the disk data on the server. Snapshots created before the reset or change are retained but cannot be used to restore disks.
     *
     * @param request - ResetDiskRequest
     * @returns ResetDiskResponse
     *
     * @param ResetDiskRequest $request
     *
     * @return ResetDiskResponse
     */
    public function resetDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * Resets a simple application server.
     *
     * @remarks
     * You can reset a simple application server to re-install its applications or operating system and re-initialize the server. You can reset a simple application server by resetting the current system or changing the image.
     * *   Reset the current system: You can re-install the operating system without changing the image.
     * *   Change the image: You can select another Alibaba Cloud image or a custom image to re-install the operating system.
     * ### [](#)Precautions
     * *   Resetting the system or changing the image of a simple application server clears the disk data on the server. Back up the data as needed.
     * *   After you reset a simple application server, monitoring may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](https://help.aliyun.com/document_detail/183482.html).
     *     *   Use Command Assistant: For more information, see [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html) topic.
     * ### [](#)Limits
     * *   Snapshots that are created before the reset are retained, but the snapshots cannot be used to restore the disks of the server.
     * *   You cannot reset simple application servers that were created from custom images that contain data of data disks.
     * *   If you reset a simple application server by replacing the existing image with a custom image, the following limits apply:
     *     *   The custom image must reside in the same region as the current server.
     *     *   The custom image cannot be created based on the current server. If you want to restore the data on the server, you can use a snapshot of the server to restore disk data.
     *     *   If your simple application server resides in a region outside the Chinese mainland, you cannot switch the operating system of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. Similarly, you cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the operating systems of simple application servers only between Windows Server versions or between Linux distributions.
     *     *   The following limits apply to the disks attached to the simple application server:
     *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server, you cannot use the custom image to reset the simple application server.
     *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your server, you can upgrade the server configuration. For more information, see Upgrade a simple application server.
     *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *
     * @param request - ResetSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ResetSystemResponse
     *
     * @param ResetSystemRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ResetSystemResponse
     */
    public function resetSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->loginCredentials) {
            @$query['LoginCredentials'] = $request->loginCredentials;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ResetSystemResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ResetSystemResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Resets a simple application server.
     *
     * @remarks
     * You can reset a simple application server to re-install its applications or operating system and re-initialize the server. You can reset a simple application server by resetting the current system or changing the image.
     * *   Reset the current system: You can re-install the operating system without changing the image.
     * *   Change the image: You can select another Alibaba Cloud image or a custom image to re-install the operating system.
     * ### [](#)Precautions
     * *   Resetting the system or changing the image of a simple application server clears the disk data on the server. Back up the data as needed.
     * *   After you reset a simple application server, monitoring may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](https://help.aliyun.com/document_detail/183482.html).
     *     *   Use Command Assistant: For more information, see [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html) topic.
     * ### [](#)Limits
     * *   Snapshots that are created before the reset are retained, but the snapshots cannot be used to restore the disks of the server.
     * *   You cannot reset simple application servers that were created from custom images that contain data of data disks.
     * *   If you reset a simple application server by replacing the existing image with a custom image, the following limits apply:
     *     *   The custom image must reside in the same region as the current server.
     *     *   The custom image cannot be created based on the current server. If you want to restore the data on the server, you can use a snapshot of the server to restore disk data.
     *     *   If your simple application server resides in a region outside the Chinese mainland, you cannot switch the operating system of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. Similarly, you cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the operating systems of simple application servers only between Windows Server versions or between Linux distributions.
     *     *   The following limits apply to the disks attached to the simple application server:
     *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server, you cannot use the custom image to reset the simple application server.
     *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your server, you can upgrade the server configuration. For more information, see Upgrade a simple application server.
     *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     *
     * @param request - ResetSystemRequest
     * @returns ResetSystemResponse
     *
     * @param ResetSystemRequest $request
     *
     * @return ResetSystemResponse
     */
    public function resetSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSystemWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     *
     * @remarks
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - RestartDatabaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RestartDatabaseInstanceResponse
     *
     * @param RestartDatabaseInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RestartDatabaseInstanceResponse
     */
    public function restartDatabaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RestartDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RestartDatabaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     *
     * @remarks
     * You can call this operation to restart a Simple Database Service instance that is in the Running state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *
     * @param request - RestartDatabaseInstanceRequest
     * @returns RestartDatabaseInstanceResponse
     *
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
     * Runs commands on a simple application server.
     *
     * @remarks
     * Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     * Before you use Command Assistant, take note of the following items:
     * *   The simple application server must be in the Running state.
     * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](https://help.aliyun.com/document_detail/64921.html).
     *
     * @param tmpReq - RunCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunCommandShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->parameters) {
            $request->parametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->parameters, 'Parameters', 'json');
        }

        $query = [];
        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->enableParameter) {
            @$query['EnableParameter'] = $request->enableParameter;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->parametersShrink) {
            @$query['Parameters'] = $request->parametersShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->windowsPasswordName) {
            @$query['WindowsPasswordName'] = $request->windowsPasswordName;
        }

        if (null !== $request->workingDir) {
            @$query['WorkingDir'] = $request->workingDir;
        }

        if (null !== $request->workingUser) {
            @$query['WorkingUser'] = $request->workingUser;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Runs commands on a simple application server.
     *
     * @remarks
     * Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     * Before you use Command Assistant, take note of the following items:
     * *   The simple application server must be in the Running state.
     * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](https://help.aliyun.com/document_detail/64921.html).
     *
     * @param request - RunCommandRequest
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $request
     *
     * @return RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * Starts a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     *
     * @param request - StartDatabaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartDatabaseInstanceResponse
     *
     * @param StartDatabaseInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return StartDatabaseInstanceResponse
     */
    public function startDatabaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartDatabaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     *
     * @param request - StartDatabaseInstanceRequest
     * @returns StartDatabaseInstanceResponse
     *
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
     * Starts a simple application server.
     *
     * @remarks
     * You can call this operation to start a simple application server that is in the Stopped state.
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts a simple application server.
     *
     * @remarks
     * You can call this operation to start a simple application server that is in the Stopped state.
     *
     * @param request - StartInstanceRequest
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * Starts simple application servers.
     *
     * @param request - StartInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartInstancesResponse
     *
     * @param StartInstancesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StartInstancesResponse
     */
    public function startInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Starts simple application servers.
     *
     * @param request - StartInstancesRequest
     * @returns StartInstancesResponse
     *
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
     * Creates a session for a simple application server.
     *
     * @param request - StartTerminalSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartTerminalSessionResponse
     *
     * @param StartTerminalSessionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StartTerminalSessionResponse
     */
    public function startTerminalSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartTerminalSessionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartTerminalSessionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a session for a simple application server.
     *
     * @param request - StartTerminalSessionRequest
     * @returns StartTerminalSessionResponse
     *
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
     * Stops a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     *
     * @param request - StopDatabaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopDatabaseInstanceResponse
     *
     * @param StopDatabaseInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopDatabaseInstanceResponse
     */
    public function stopDatabaseInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->databaseInstanceId) {
            @$query['DatabaseInstanceId'] = $request->databaseInstanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopDatabaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopDatabaseInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a Simple Database Service instance.
     *
     * @remarks
     * You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     *
     * @param request - StopDatabaseInstanceRequest
     * @returns StopDatabaseInstanceResponse
     *
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
     * Stops a simple application server.
     *
     * @remarks
     * You can stop a simple application server that you do not use for the time being.
     * >  Stopping a simple application server may interrupt your business. We recommend that you perform this operation during off-peak hours.
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops a simple application server.
     *
     * @remarks
     * You can stop a simple application server that you do not use for the time being.
     * >  Stopping a simple application server may interrupt your business. We recommend that you perform this operation during off-peak hours.
     *
     * @param request - StopInstanceRequest
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * Stops simple application servers.
     *
     * @param request - StopInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopInstancesResponse
     *
     * @param StopInstancesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StopInstancesResponse
     */
    public function stopInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopInstancesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Stops simple application servers.
     *
     * @param request - StopInstancesRequest
     * @returns StopInstancesResponse
     *
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
     * Adds tags to simple application servers, snapshots, custom images, commands, firewall rules, and disks to facilitate the viewing and management of the preceding resources.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds tags to simple application servers, snapshots, custom images, commands, firewall rules, and disks to facilitate the viewing and management of the preceding resources.
     *
     * @param request - TagResourcesRequest
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * Unbinds and deletes tags from specified lightweight resources, such as instances, snapshots, disks, images, commands, and firewall rules.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-06-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UntagResourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Unbinds and deletes tags from specified lightweight resources, such as instances, snapshots, disks, images, commands, and firewall rules.
     *
     * @param request - UntagResourcesRequest
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * Modifys the parameter of a command.
     *
     * @param request - UpdateCommandAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCommandAttributeResponse
     *
     * @param UpdateCommandAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateCommandAttributeResponse
     */
    public function updateCommandAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandId) {
            @$query['CommandId'] = $request->commandId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->workingDir) {
            @$query['WorkingDir'] = $request->workingDir;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCommandAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCommandAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifys the parameter of a command.
     *
     * @param request - UpdateCommandAttributeRequest
     * @returns UpdateCommandAttributeResponse
     *
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
     * Modifies the remarks for the data disk that is attached to a simple application server.
     *
     * @param request - UpdateDiskAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateDiskAttributeResponse
     *
     * @param UpdateDiskAttributeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateDiskAttributeResponse
     */
    public function updateDiskAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateDiskAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateDiskAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the remarks for the data disk that is attached to a simple application server.
     *
     * @param request - UpdateDiskAttributeRequest
     * @returns UpdateDiskAttributeResponse
     *
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
     * Modifies the information of a simple application server, including the server name and the password that you use to log on to the server.
     *
     * @remarks
     * ## [](#)Usage notes
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation for the new password to take effect.
     *
     * @param request - UpdateInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateInstanceAttributeResponse
     *
     * @param UpdateInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateInstanceAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the information of a simple application server, including the server name and the password that you use to log on to the server.
     *
     * @remarks
     * ## [](#)Usage notes
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation for the new password to take effect.
     *
     * @param request - UpdateInstanceAttributeRequest
     * @returns UpdateInstanceAttributeResponse
     *
     * @param UpdateInstanceAttributeRequest $request
     *
     * @return UpdateInstanceAttributeResponse
     */
    public function updateInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the remarks of a snapshot of a simple application server.
     *
     * @param request - UpdateSnapshotAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSnapshotAttributeResponse
     *
     * @param UpdateSnapshotAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateSnapshotAttributeResponse
     */
    public function updateSnapshotAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remark) {
            @$query['Remark'] = $request->remark;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSnapshotAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSnapshotAttributeResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the remarks of a snapshot of a simple application server.
     *
     * @param request - UpdateSnapshotAttributeRequest
     * @returns UpdateSnapshotAttributeResponse
     *
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
     * Upgrades the plan for a simple application server.
     *
     * @remarks
     *   The plan of a simple application server can only be upgraded. For more information about plans, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   Before you call this operation, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the upgrade fails.
     *
     * @param request - UpgradeInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpgradeInstanceResponse
     *
     * @param UpgradeInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->planId) {
            @$query['PlanId'] = $request->planId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpgradeInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpgradeInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Upgrades the plan for a simple application server.
     *
     * @remarks
     *   The plan of a simple application server can only be upgraded. For more information about plans, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   Before you call this operation, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the upgrade fails.
     *
     * @param request - UpgradeInstanceRequest
     * @returns UpgradeInstanceResponse
     *
     * @param UpgradeInstanceRequest $request
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceWithOptions($request, $runtime);
    }

    /**
     * Imports a key pair for a simple application server.
     *
     * @param request - UploadInstanceKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadInstanceKeyPairResponse
     *
     * @param UploadInstanceKeyPairRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UploadInstanceKeyPairResponse
     */
    public function uploadInstanceKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->publicKey) {
            @$query['PublicKey'] = $request->publicKey;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadInstanceKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadInstanceKeyPairResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Imports a key pair for a simple application server.
     *
     * @param request - UploadInstanceKeyPairRequest
     * @returns UploadInstanceKeyPairResponse
     *
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
