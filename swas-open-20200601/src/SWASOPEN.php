<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
     * @summary Shares a custom image with other Alibaba Cloud accounts in the same region to quickly deploy the same environment configurations for multiple simple application servers at a time. This improves deployment efficiency.
     *  *
     * @description *   Before you share a custom image, make sure that all sensitive data and files are removed from the image.
     * *   The IDs of the Alibaba Cloud accounts with which you want to share the image is obtained. Move the pointer over the profile in the upper-right corner of the Simple Application Server console. In the card that appears, if Main Account is displayed, the showed account ID is the Alibaba Cloud account ID.
     *  *
     * @param AddCustomImageShareAccountRequest $request AddCustomImageShareAccountRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCustomImageShareAccountResponse AddCustomImageShareAccountResponse
     */
    public function addCustomImageShareAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
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

        return AddCustomImageShareAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Shares a custom image with other Alibaba Cloud accounts in the same region to quickly deploy the same environment configurations for multiple simple application servers at a time. This improves deployment efficiency.
     *  *
     * @description *   Before you share a custom image, make sure that all sensitive data and files are removed from the image.
     * *   The IDs of the Alibaba Cloud accounts with which you want to share the image is obtained. Move the pointer over the profile in the upper-right corner of the Simple Application Server console. In the card that appears, if Main Account is displayed, the showed account ID is the Alibaba Cloud account ID.
     *  *
     * @param AddCustomImageShareAccountRequest $request AddCustomImageShareAccountRequest
     *
     * @return AddCustomImageShareAccountResponse AddCustomImageShareAccountResponse
     */
    public function addCustomImageShareAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCustomImageShareAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for a public endpoint for a Simple Database Service instance.
     *  *
     * @description By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Applies for a public endpoint for a Simple Database Service instance.
     *  *
     * @description By default, no public endpoints are assigned to Simple Database Service instances. If you want to access the databases of a Simple Database Service instance over the Internet by using Simple Container Service or Data Management (DMS), you must apply for a public endpoint for the Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Uses a firewall template to apply firewall rules to multiple simple application servers at a time. This improves your efficiency of setting firewall rules.
     *  *
     * @description If the port range, protocol, and source IP address of a firewall rule in a firewall template are the same as the port range, protocol, and source IP address of an existing rule, the new rule overwrites the existing rule regardless of whether the existing rule is enabled or disabled.
     *  *
     * @param ApplyFirewallTemplateRequest $request ApplyFirewallTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyFirewallTemplateResponse ApplyFirewallTemplateResponse
     */
    public function applyFirewallTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
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

        return ApplyFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Uses a firewall template to apply firewall rules to multiple simple application servers at a time. This improves your efficiency of setting firewall rules.
     *  *
     * @description If the port range, protocol, and source IP address of a firewall rule in a firewall template are the same as the port range, protocol, and source IP address of an existing rule, the new rule overwrites the existing rule regardless of whether the existing rule is enabled or disabled.
     *  *
     * @param ApplyFirewallTemplateRequest $request ApplyFirewallTemplateRequest
     *
     * @return ApplyFirewallTemplateResponse ApplyFirewallTemplateResponse
     */
    public function applyFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a key pair to simple application servers.
     *  *
     * @description You can bind only one key pair to a simple application server in the Simple Application Server console. If a simple application server has a key pair bound, the new key pair overwrites the original key pair.
     *  *
     * @param AttachKeyPairRequest $request AttachKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachKeyPairResponse AttachKeyPairResponse
     */
    public function attachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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

        return AttachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Binds a key pair to simple application servers.
     *  *
     * @description You can bind only one key pair to a simple application server in the Simple Application Server console. If a simple application server has a key pair bound, the new key pair overwrites the original key pair.
     *  *
     * @param AttachKeyPairRequest $request AttachKeyPairRequest
     *
     * @return AttachKeyPairResponse AttachKeyPairResponse
     */
    public function attachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Cloud Assistant command.
     *  *
     * @param CreateCommandRequest $request CreateCommandRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCommandResponse CreateCommandResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a Cloud Assistant command.
     *  *
     * @param CreateCommandRequest $request CreateCommandRequest
     *
     * @return CreateCommandResponse CreateCommandResponse
     */
    public function createCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom image based on a snapshot of a simple application server.
     *  *
     * @description A custom image is created based on a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](https://help.aliyun.com/document_detail/199375.html).
     * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * > If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     * Before you create a custom image, take note of the following items:
     * *   The custom image and the corresponding simple application server must reside in the same region.
     * *   The maximum number of custom images that can be maintained in an Alibaba Cloud account is triple the number of simple application servers in the account. The value cannot be greater than 15.
     * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on a snapshot of the server are also released.
     * *   If you reset a simple application server by changing the application system or OS of the server or replacing the image of the server, the disk data on the server is cleared. Back up the disk data as needed.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->systemSnapshotId)) {
            $query['SystemSnapshotId'] = $request->systemSnapshotId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a custom image based on a snapshot of a simple application server.
     *  *
     * @description A custom image is created based on a snapshot of a simple application server. You can use a custom image to create multiple simple application servers that have the same configurations. You can also share custom images to ECS and use the shared images to create ECS instances or replace the OSs of existing ECS instances. For more information about custom images, see [Overview of custom images](https://help.aliyun.com/document_detail/199375.html).
     * You must create a system disk snapshot of a simple application server before you create a custom image based on the snapshot. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * > If you need the data on the data disk of a simple application server when you create a custom image, create a snapshot for the data disk first.
     * Before you create a custom image, take note of the following items:
     * *   The custom image and the corresponding simple application server must reside in the same region.
     * *   The maximum number of custom images that can be maintained in an Alibaba Cloud account is triple the number of simple application servers in the account. The value cannot be greater than 15.
     * *   You can directly create a custom image only based on the system disk snapshot of a simple application server. If you want a custom image to contain the data on the data disk of the simple application server, you must select a data disk snapshot when you create the custom image.
     * *   If a simple application server is released due to expiration or refunds, the custom images that are created based on a snapshot of the server are also released.
     * *   If you reset a simple application server by changing the application system or OS of the server or replacing the image of the server, the disk data on the server is cleared. Back up the disk data as needed.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Creates a firewall rule for a simple application server.
     *  *
     * @description Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     * ### QPS limits
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Creates a firewall rule for a simple application server.
     *  *
     * @description Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     * ### QPS limits
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Creates multiple firewall rules for a simple application server at a time.
     *  *
     * @description Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates multiple firewall rules for a simple application server at a time.
     *  *
     * @description Firewalls serve to control network access to simple application servers and isolate security domains in the cloud. By default, SSH port 22, HTTP port 80, and HTTPS port 443 are enabled for simple application servers. Other ports are disabled. You can add firewall rules to enable more ports.
     *  *
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
     * @summary Creates a firewall template.
     *  *
     * @description Simple Application Server supports the firewall template feature that provides multiple firewall rules. You can use a template to add a group of firewall rules to one or more simple application servers at a time. This improves the efficiency of setting firewall rules.
     *  *
     * @param CreateFirewallTemplateRequest $request CreateFirewallTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFirewallTemplateResponse CreateFirewallTemplateResponse
     */
    public function createFirewallTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->firewallRule)) {
            $query['FirewallRule'] = $request->firewallRule;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a firewall template.
     *  *
     * @description Simple Application Server supports the firewall template feature that provides multiple firewall rules. You can use a template to add a group of firewall rules to one or more simple application servers at a time. This improves the efficiency of setting firewall rules.
     *  *
     * @param CreateFirewallTemplateRequest $request CreateFirewallTemplateRequest
     *
     * @return CreateFirewallTemplateResponse CreateFirewallTemplateResponse
     */
    public function createFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Adds firewall rules to a firewall template based on your business requirements.
     *  *
     * @description Adding firewall rules to a firewall template does not affect the firewall rules that have been applied to simple application servers..
     *  *
     * @param CreateFirewallTemplateRulesRequest $request CreateFirewallTemplateRulesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFirewallTemplateRulesResponse CreateFirewallTemplateRulesResponse
     */
    public function createFirewallTemplateRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallRule)) {
            $query['FirewallRule'] = $request->firewallRule;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return CreateFirewallTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds firewall rules to a firewall template based on your business requirements.
     *  *
     * @description Adding firewall rules to a firewall template does not affect the firewall rules that have been applied to simple application servers..
     *  *
     * @param CreateFirewallTemplateRulesRequest $request CreateFirewallTemplateRulesRequest
     *
     * @return CreateFirewallTemplateRulesResponse CreateFirewallTemplateRulesResponse
     */
    public function createFirewallTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFirewallTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a key pair for a simple application server.
     *  *
     * @param CreateInstanceKeyPairRequest $request CreateInstanceKeyPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceKeyPairResponse CreateInstanceKeyPairResponse
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
     * @summary Creates a key pair for a simple application server.
     *  *
     * @param CreateInstanceKeyPairRequest $request CreateInstanceKeyPairRequest
     *
     * @return CreateInstanceKeyPairResponse CreateInstanceKeyPairResponse
     */
    public function createInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Creates subscription simple application servers.
     *  *
     * @description *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   A maximum of 20 simple application servers can be maintained in an Alibaba Cloud account.
     * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Creates subscription simple application servers.
     *  *
     * @description *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   A maximum of 20 simple application servers can be maintained in an Alibaba Cloud account.
     * *   When you call this operation to create simple application servers, make sure that the balance in your account is sufficient to pay for the servers. If the balance in your account is insufficient, the servers cannot be created.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Creates a key pair.
     *  *
     * @description Alibaba Cloud SSH key pairs offer a secure and efficient logon authentication mechanism, facilitating both verification and encrypted communication within the SSH protocol framework. An SSH key pair is essentially constituted by a public key and a private key. Tailored for Linux-based simple application servers, this security measure enhances security and convenience, effectively addressing your heightened security requirements.
     * *   The key pair logon method is only valid for Linux-based simple application servers.
     * *   A maximum of 10 key pairs can be created in a region for an Alibaba Cloud account.
     * *   Only RSA 2048-bit key pairs can be created in the Simple Application Server console.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
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

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a key pair.
     *  *
     * @description Alibaba Cloud SSH key pairs offer a secure and efficient logon authentication mechanism, facilitating both verification and encrypted communication within the SSH protocol framework. An SSH key pair is essentially constituted by a public key and a private key. Tailored for Linux-based simple application servers, this security measure enhances security and convenience, effectively addressing your heightened security requirements.
     * *   The key pair logon method is only valid for Linux-based simple application servers.
     * *   A maximum of 10 key pairs can be created in a region for an Alibaba Cloud account.
     * *   Only RSA 2048-bit key pairs can be created in the Simple Application Server console.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a snapshot for a disk.
     *  *
     * @description A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental operations on instances, recover data after network attacks, and create custom images.
     * > You are not charged for creating snapshots for disks of simple application servers.
     * ### Precautions
     * *   You can create up to three snapshots for disks of each simple application server.
     * *   The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple the number of simple application servers that you maintain. The value cannot be greater than 15.
     * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     * *   If you reset the simple application server after you create a snapshot for a server, the snapshot is retained but cannot be used to roll back the disks of the server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a snapshot for a disk.
     *  *
     * @description A snapshot is a point-in-time backup of a disk. Snapshots can be used to back up data, recover data after accidental operations on instances, recover data after network attacks, and create custom images.
     * > You are not charged for creating snapshots for disks of simple application servers.
     * ### Precautions
     * *   You can create up to three snapshots for disks of each simple application server.
     * *   The maximum number of snapshots that can be retained in an Alibaba Cloud account is triple the number of simple application servers that you maintain. The value cannot be greater than 15.
     * *   If a simple application server is automatically released due to expiration, the snapshots created for the server are deleted.
     * *   If you reset the simple application server after you create a snapshot for a server, the snapshot is retained but cannot be used to roll back the disks of the server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes a Command Assistant command.
     *  *
     * @description You cannot delete commands that are being run.
     *  *
     * @param DeleteCommandRequest $request DeleteCommandRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCommandResponse DeleteCommandResponse
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
     * @summary Deletes a Command Assistant command.
     *  *
     * @description You cannot delete commands that are being run.
     *  *
     * @param DeleteCommandRequest $request DeleteCommandRequest
     *
     * @return DeleteCommandResponse DeleteCommandResponse
     */
    public function deleteCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom image.
     *  *
     * @description You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     * > If a custom image is shared to Elastic Compute Service (ECS), you must unshare the image before you can delete it. After you unshare the custom image, you cannot query the custom image by using the ECS console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](https://help.aliyun.com/document_detail/199378.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes a custom image.
     *  *
     * @description You can delete a custom image that you no longer need. After the custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     * > If a custom image is shared to Elastic Compute Service (ECS), you must unshare the image before you can delete it. After you unshare the custom image, you cannot query the custom image by using the ECS console or by calling ECS API operations. If you need to use the custom image in ECS, we recommend that you copy the image before you delete it. For more information, see [Copy a shared image of a simple application server in the ECS console](https://help.aliyun.com/document_detail/199378.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes custom images. If you no longer require a custom image, you can call this operation to delete the custom image. You can also call this operation to delete multiple custom images at the same time. After a custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *  *
     * @description If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling an ECS API operation. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see the "Copy custom images" topic.
     *  *
     * @param DeleteCustomImagesRequest $request DeleteCustomImagesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomImagesResponse DeleteCustomImagesResponse
     */
    public function deleteCustomImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageIds)) {
            $query['ImageIds'] = $request->imageIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteCustomImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes custom images. If you no longer require a custom image, you can call this operation to delete the custom image. You can also call this operation to delete multiple custom images at the same time. After a custom image is deleted, you cannot use the custom image to reset the simple application servers that were created based on the custom image.
     *  *
     * @description If a custom image is shared, you must unshare the image before you can delete it. After a custom image is unshared, you cannot query the custom image by using the Elastic Compute Service (ECS) console or by calling an ECS API operation. If you want to use a custom image to create ECS instances, we recommend that you copy the custom image before you delete it. For more information, see the "Copy custom images" topic.
     *  *
     * @param DeleteCustomImagesRequest $request DeleteCustomImagesRequest
     *
     * @return DeleteCustomImagesResponse DeleteCustomImagesResponse
     */
    public function deleteCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a firewall rule of a simple application server.
     *  *
     * @description After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes a firewall rule of a simple application server.
     *  *
     * @description After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes multiple firewall rules of a simple application server.
     *  *
     * @description After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *  *
     * @param DeleteFirewallRulesRequest $tmpReq  DeleteFirewallRulesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFirewallRulesResponse DeleteFirewallRulesResponse
     */
    public function deleteFirewallRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteFirewallRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ruleIds)) {
            $request->ruleIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ruleIds, 'RuleIds', 'simple');
        }
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
        if (!Utils::isUnset($request->ruleIdsShrink)) {
            $query['RuleIds'] = $request->ruleIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteFirewallRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple firewall rules of a simple application server.
     *  *
     * @description After a firewall rule is deleted, your business deployed on the simple application server may become inaccessible. Before you delete a firewall rule, make sure that the firewall rule is no longer needed by the simple application server.
     *  *
     * @param DeleteFirewallRulesRequest $request DeleteFirewallRulesRequest
     *
     * @return DeleteFirewallRulesResponse DeleteFirewallRulesResponse
     */
    public function deleteFirewallRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes firewall rules from a firewall template based on your requirements.
     *  *
     * @description Deletion of firewall rules does not affect the firewall rules that have been applied to simple application servers.
     *  *
     * @param DeleteFirewallTemplateRulesRequest $request DeleteFirewallTemplateRulesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFirewallTemplateRulesResponse DeleteFirewallTemplateRulesResponse
     */
    public function deleteFirewallTemplateRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
        }
        if (!Utils::isUnset($request->firewallTemplateRuleId)) {
            $query['FirewallTemplateRuleId'] = $request->firewallTemplateRuleId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteFirewallTemplateRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes firewall rules from a firewall template based on your requirements.
     *  *
     * @description Deletion of firewall rules does not affect the firewall rules that have been applied to simple application servers.
     *  *
     * @param DeleteFirewallTemplateRulesRequest $request DeleteFirewallTemplateRulesRequest
     *
     * @return DeleteFirewallTemplateRulesResponse DeleteFirewallTemplateRulesResponse
     */
    public function deleteFirewallTemplateRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallTemplateRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes firewall templates from a simple application server.
     *  *
     * @description Deleting a firewall template does not affect the firewall rules that have been applied to simple application servers. You can delete firewall templates that you no longer need.
     *  *
     * @param DeleteFirewallTemplatesRequest $request DeleteFirewallTemplatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFirewallTemplatesResponse DeleteFirewallTemplatesResponse
     */
    public function deleteFirewallTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteFirewallTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes firewall templates from a simple application server.
     *  *
     * @description Deleting a firewall template does not affect the firewall rules that have been applied to simple application servers. You can delete firewall templates that you no longer need.
     *  *
     * @param DeleteFirewallTemplatesRequest $request DeleteFirewallTemplatesRequest
     *
     * @return DeleteFirewallTemplatesResponse DeleteFirewallTemplatesResponse
     */
    public function deleteFirewallTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFirewallTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the key pair of a simple application server.
     *  *
     * @param DeleteInstanceKeyPairRequest $request DeleteInstanceKeyPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceKeyPairResponse DeleteInstanceKeyPairResponse
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
     * @summary Deletes the key pair of a simple application server.
     *  *
     * @param DeleteInstanceKeyPairRequest $request DeleteInstanceKeyPairRequest
     *
     * @return DeleteInstanceKeyPairResponse DeleteInstanceKeyPairResponse
     */
    public function deleteInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the SSH key pairs of simple application servers.
     *  *
     * @description You must unbind SSH key pairs that you no longer use from simple application servers before you delete the SSH key pairs.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->keyPairNames)) {
            $query['KeyPairNames'] = $request->keyPairNames;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the SSH key pairs of simple application servers.
     *  *
     * @description You must unbind SSH key pairs that you no longer use from simple application servers before you delete the SSH key pairs.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a snapshot of a simple application server.
     *  *
     * @description You can delete a snapshot if you no longer need it.
     * > If a custom image was created based on the snapshot, delete the custom image before you delete the snapshot.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes a snapshot of a simple application server.
     *  *
     * @description You can delete a snapshot if you no longer need it.
     * > If a custom image was created based on the snapshot, delete the custom image before you delete the snapshot.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Deletes snapshots of a simple application server.
     *  *
     * @param DeleteSnapshotsRequest $request DeleteSnapshotsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotsResponse DeleteSnapshotsResponse
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
     * @summary Deletes snapshots of a simple application server.
     *  *
     * @param DeleteSnapshotsRequest $request DeleteSnapshotsRequest
     *
     * @return DeleteSnapshotsResponse DeleteSnapshotsResponse
     */
    public function deleteSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Command Assistant information of simple application servers.
     *  *
     * @param DescribeCloudAssistantAttributesRequest $tmpReq  DescribeCloudAssistantAttributesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudAssistantAttributesResponse DescribeCloudAssistantAttributesResponse
     */
    public function describeCloudAssistantAttributesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeCloudAssistantAttributesShrinkRequest([]);
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

        return DescribeCloudAssistantAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Command Assistant information of simple application servers.
     *  *
     * @param DescribeCloudAssistantAttributesRequest $request DescribeCloudAssistantAttributesRequest
     *
     * @return DescribeCloudAssistantAttributesResponse DescribeCloudAssistantAttributesResponse
     */
    public function describeCloudAssistantAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudAssistantAttributesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether the Cloud Assistant client is installed on simple application servers.
     *  *
     * @description By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *  *
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
     * @summary Queries whether the Cloud Assistant client is installed on simple application servers.
     *  *
     * @description By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall the client. Otherwise, you cannot run commands on the servers.
     *  *
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
     * @summary Queries the status of the CloudMonitor agent on simple application servers.
     *  *
     * @param DescribeCloudMonitorAgentStatusesRequest $request DescribeCloudMonitorAgentStatusesRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudMonitorAgentStatusesResponse DescribeCloudMonitorAgentStatusesResponse
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
     * @summary Queries the status of the CloudMonitor agent on simple application servers.
     *  *
     * @param DescribeCloudMonitorAgentStatusesRequest $request DescribeCloudMonitorAgentStatusesRequest
     *
     * @return DescribeCloudMonitorAgentStatusesResponse DescribeCloudMonitorAgentStatusesResponse
     */
    public function describeCloudMonitorAgentStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudMonitorAgentStatusesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the executions and execution status of a Cloud Assistant command.
     *  *
     * @param DescribeCommandInvocationsRequest $request DescribeCommandInvocationsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCommandInvocationsResponse DescribeCommandInvocationsResponse
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
     * @summary Queries the executions and execution status of a Cloud Assistant command.
     *  *
     * @param DescribeCommandInvocationsRequest $request DescribeCommandInvocationsRequest
     *
     * @return DescribeCommandInvocationsResponse DescribeCommandInvocationsResponse
     */
    public function describeCommandInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandInvocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the commands that you created or the common commands that Alibaba Cloud provides.
     *  *
     * @param DescribeCommandsRequest $request DescribeCommandsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCommandsResponse DescribeCommandsResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the commands that you created or the common commands that Alibaba Cloud provides.
     *  *
     * @param DescribeCommandsRequest $request DescribeCommandsRequest
     *
     * @return DescribeCommandsResponse DescribeCommandsResponse
     */
    public function describeCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCommandsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries error logs of databases in a Simple Database Service instance.
     *  *
     * @description You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     * \\### QPS limit You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries error logs of databases in a Simple Database Service instance.
     *  *
     * @description You can call this operation to query the error logs of databases in a Simple Database Service instance and locate faults based on the error logs.
     * \\### QPS limit You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the monitoring information about a Simple Database Service instance.
     *  *
     * @description After you create a Simple Database Service instance, you can query the details about the vCPU, memory, disk size, storage IOPS (input/output operations per second), and total current connection number of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the monitoring information about a Simple Database Service instance.
     *  *
     * @description After you create a Simple Database Service instance, you can query the details about the vCPU, memory, disk size, storage IOPS (input/output operations per second), and total current connection number of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the parameters of a Simple Database Service instance.
     *  *
     * @description You can call this operation to query the information about parameters of a Simple Database Service instance.
     *  *
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
     * @summary Queries the parameters of a Simple Database Service instance.
     *  *
     * @description You can call this operation to query the information about parameters of a Simple Database Service instance.
     *  *
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
     * @summary Queries the information about Simple Database Service instances.
     *  *
     * @description You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoint, internal endpoint, creation time, and expiration time of the instances.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the information about Simple Database Service instances.
     *  *
     * @description You can call this operation to query the details of Simple Database Service instances in a region, including the IDs, names, plans, database versions, public endpoint, internal endpoint, creation time, and expiration time of the instances.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the slow query log details of a Simple Database Service instance.
     *  *
     * @description You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     * > Slow query log details are retained for 7 days.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
     * @param DescribeDatabaseSlowLogRecordsRequest $request DescribeDatabaseSlowLogRecordsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDatabaseSlowLogRecordsResponse DescribeDatabaseSlowLogRecordsResponse
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
     * @summary Queries the slow query log details of a Simple Database Service instance.
     *  *
     * @description You can query the slow query log details of a Simple Database Service instance and locate faults based on the log details.
     * > Slow query log details are retained for 7 days.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the result of applying a firewall template to simple application servers.
     *  *
     * @param DescribeFirewallTemplateApplyResultsRequest $request DescribeFirewallTemplateApplyResultsRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFirewallTemplateApplyResultsResponse DescribeFirewallTemplateApplyResultsResponse
     */
    public function describeFirewallTemplateApplyResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeFirewallTemplateApplyResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the result of applying a firewall template to simple application servers.
     *  *
     * @param DescribeFirewallTemplateApplyResultsRequest $request DescribeFirewallTemplateApplyResultsRequest
     *
     * @return DescribeFirewallTemplateApplyResultsResponse DescribeFirewallTemplateApplyResultsResponse
     */
    public function describeFirewallTemplateApplyResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplateApplyResultsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result of applying a firewall template rule to simple application servers.
     *  *
     * @param DescribeFirewallTemplateRulesApplyResultRequest $request DescribeFirewallTemplateRulesApplyResultRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFirewallTemplateRulesApplyResultResponse DescribeFirewallTemplateRulesApplyResultResponse
     */
    public function describeFirewallTemplateRulesApplyResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeFirewallTemplateRulesApplyResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the result of applying a firewall template rule to simple application servers.
     *  *
     * @param DescribeFirewallTemplateRulesApplyResultRequest $request DescribeFirewallTemplateRulesApplyResultRequest
     *
     * @return DescribeFirewallTemplateRulesApplyResultResponse DescribeFirewallTemplateRulesApplyResultResponse
     */
    public function describeFirewallTemplateRulesApplyResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplateRulesApplyResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details about firewall templates.
     *  *
     * @param DescribeFirewallTemplatesRequest $request DescribeFirewallTemplatesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFirewallTemplatesResponse DescribeFirewallTemplatesResponse
     */
    public function describeFirewallTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return DescribeFirewallTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries details about firewall templates.
     *  *
     * @param DescribeFirewallTemplatesRequest $request DescribeFirewallTemplatesRequest
     *
     * @return DescribeFirewallTemplatesResponse DescribeFirewallTemplatesResponse
     */
    public function describeFirewallTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFirewallTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about the key pair of a simple application server.
     *  *
     * @param DescribeInstanceKeyPairRequest $request DescribeInstanceKeyPairRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceKeyPairResponse DescribeInstanceKeyPairResponse
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
     * @summary Queries information about the key pair of a simple application server.
     *  *
     * @param DescribeInstanceKeyPairRequest $request DescribeInstanceKeyPairRequest
     *
     * @return DescribeInstanceKeyPairResponse DescribeInstanceKeyPairResponse
     */
    public function describeInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether a password is set for a simple application server.
     *  *
     * @param DescribeInstancePasswordsSettingRequest $request DescribeInstancePasswordsSettingRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancePasswordsSettingResponse DescribeInstancePasswordsSettingResponse
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
     * @summary Checks whether a password is set for a simple application server.
     *  *
     * @param DescribeInstancePasswordsSettingRequest $request DescribeInstancePasswordsSettingRequest
     *
     * @return DescribeInstancePasswordsSettingResponse DescribeInstancePasswordsSettingResponse
     */
    public function describeInstancePasswordsSetting($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePasswordsSettingWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the VNC connection address of a simple application server.
     *  *
     * @param DescribeInstanceVncUrlRequest $request DescribeInstanceVncUrlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceVncUrlResponse DescribeInstanceVncUrlResponse
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
     * @summary Queries the VNC connection address of a simple application server.
     *  *
     * @param DescribeInstanceVncUrlRequest $request DescribeInstanceVncUrlRequest
     *
     * @return DescribeInstanceVncUrlResponse DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the execution result of a command.
     *  *
     * @description *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *  *
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
     * @summary Queries the execution result of a command.
     *  *
     * @description *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the execution result of a command.
     * *   You can query the execution results that were generated within the last two weeks. A maximum of 100,000 entries of execution results can be retained.
     *  *
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
     * @summary Queries details about command execution.
     *  *
     * @description *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *  *
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
     * @summary Queries details about command execution.
     *  *
     * @description *   After you execute a command, the command may not succeed or return the expected results. You can call this operation to query the actual execution results.
     * *   You can query the execution results that were generated within the last two weeks. Up to 100,000 entries of execution results can be retained.
     *  *
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
     * @summary Queries the monitoring information about vCPUs, memory, disk IOPS, and traffic of a simple application server.
     *  *
     * @param DescribeMonitorDataRequest $request DescribeMonitorDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMonitorDataResponse DescribeMonitorDataResponse
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
     * @summary Queries the monitoring information about vCPUs, memory, disk IOPS, and traffic of a simple application server.
     *  *
     * @param DescribeMonitorDataRequest $request DescribeMonitorDataRequest
     *
     * @return DescribeMonitorDataResponse DescribeMonitorDataResponse
     */
    public function describeMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status of the Security Center agent on a simple application server.
     *  *
     * @param DescribeSecurityAgentStatusRequest $request DescribeSecurityAgentStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityAgentStatusResponse DescribeSecurityAgentStatusResponse
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
     * @summary Queries the status of the Security Center agent on a simple application server.
     *  *
     * @param DescribeSecurityAgentStatusRequest $request DescribeSecurityAgentStatusRequest
     *
     * @return DescribeSecurityAgentStatusResponse DescribeSecurityAgentStatusResponse
     */
    public function describeSecurityAgentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityAgentStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds key pairs from simple application servers.
     *  *
     * @description If you want to change the SSH key pairs that are bound to your simple application servers or your end user no longer needs to access a specific simple application server, you can unbind the SSH key pairs from simple application servers to improve the security of the simple application servers or restrict access to the specific simple application server.
     *  *
     * @param DetachKeyPairRequest $request DetachKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachKeyPairResponse DetachKeyPairResponse
     */
    public function detachKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
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

        return DetachKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unbinds key pairs from simple application servers.
     *  *
     * @description If you want to change the SSH key pairs that are bound to your simple application servers or your end user no longer needs to access a specific simple application server, you can unbind the SSH key pairs from simple application servers to improve the security of the simple application servers or restrict access to the specific simple application server.
     *  *
     * @param DetachKeyPairRequest $request DetachKeyPairRequest
     *
     * @return DetachKeyPairResponse DetachKeyPairResponse
     */
    public function detachKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a firewall rule of a simple application server.
     *  *
     * @param DisableFirewallRuleRequest $request DisableFirewallRuleRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableFirewallRuleResponse DisableFirewallRuleResponse
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
     * @summary Disables a firewall rule of a simple application server.
     *  *
     * @param DisableFirewallRuleRequest $request DisableFirewallRuleRequest
     *
     * @return DisableFirewallRuleResponse DisableFirewallRuleResponse
     */
    public function disableFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a firewall rule for a simple application server.
     *  *
     * @param EnableFirewallRuleRequest $request EnableFirewallRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableFirewallRuleResponse EnableFirewallRuleResponse
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
     * @summary Enables a firewall rule for a simple application server.
     *  *
     * @param EnableFirewallRuleRequest $request EnableFirewallRuleRequest
     *
     * @return EnableFirewallRuleResponse EnableFirewallRuleResponse
     */
    public function enableFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Imports an existing key pair to the Simple Application Server console.
     *  *
     * @description You can call this operation to import an existing key pair to the Simple Application Server console. This way, you can use the key pair to log on to simple application servers. The existing key pair that you want to import must use a supported encryption method. For more information, see [Q2: Which encryption methods must be used by key pairs when I import existing key pairs to the Simple Application Server console?](https://help.aliyun.com/document_detail/59085.html)
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->publicKeyBody)) {
            $query['PublicKeyBody'] = $request->publicKeyBody;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Imports an existing key pair to the Simple Application Server console.
     *  *
     * @description You can call this operation to import an existing key pair to the Simple Application Server console. This way, you can use the key pair to log on to simple application servers. The existing key pair that you want to import must use a supported encryption method. For more information, see [Q2: Which encryption methods must be used by key pairs when I import existing key pairs to the Simple Application Server console?](https://help.aliyun.com/document_detail/59085.html)
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Installs the Cloud Assistant client on simple application servers at a time.
     *  *
     * @description To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](https://help.aliyun.com/document_detail/439512.html) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to restart the servers to allow the client to take effect.
     *  *
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
     * @summary Installs the Cloud Assistant client on simple application servers at a time.
     *  *
     * @description To run commands on your simple application servers, you must install the Cloud Assistant client on your servers. You can call the [DescribeCloudAssistantStatus](https://help.aliyun.com/document_detail/439512.html) operation to check whether the Cloud Assistant client is installed on your simple application servers. If you have not installed the Cloud Assistant client, you can call the InstallCloudAssistant operation to install the client. Then, you can call the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to restart the servers to allow the client to take effect.
     *  *
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
     * @summary Installs the CloudMonitor agent for a simple application server.
     *  *
     * @param InstallCloudMonitorAgentRequest $request InstallCloudMonitorAgentRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallCloudMonitorAgentResponse InstallCloudMonitorAgentResponse
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
     * @summary Installs the CloudMonitor agent for a simple application server.
     *  *
     * @param InstallCloudMonitorAgentRequest $request InstallCloudMonitorAgentRequest
     *
     * @return InstallCloudMonitorAgentResponse InstallCloudMonitorAgentResponse
     */
    public function installCloudMonitorAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudMonitorAgentWithOptions($request, $runtime);
    }

    /**
     * @summary Runs a Command Assistant command for one or more simple application servers.
     *  *
     * @description *   The simple application servers for which you want to call the operation must meet the following conditions. If a simple application server cannot meet the conditions, you must call this operation again.
     *     *   The simple application servers are in the `Running` state. You can call the [ListInstances](https://help.aliyun.com/document_detail/2361065.html) operation to query the status of simple application servers.
     *     *   Cloud Assistant Agent is installed on the simple application servers. For more information, see [InstallCloudAssistant](https://help.aliyun.com/document_detail/2361030.html).
     *     *   If you run a PowerShell command, make sure that the PowerShell module is configured for the simple application servers.
     * *   The command may fail to be run due to the abnormal states of simple application servers, network exceptions, or exceptions in Cloud Assistant Agent. If the command fails to be run, no execution information is generated.
     * *   If you enable the custom parameter feature when you create a command, you must set the `Parameters` parameter to specify custom parameters when you run the command.
     * *   When you call this operation, you can select only one common command or a custom command that you have created.
     *  *
     * @param InvokeCommandRequest $tmpReq  InvokeCommandRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return InvokeCommandResponse InvokeCommandResponse
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
     * @summary Runs a Command Assistant command for one or more simple application servers.
     *  *
     * @description *   The simple application servers for which you want to call the operation must meet the following conditions. If a simple application server cannot meet the conditions, you must call this operation again.
     *     *   The simple application servers are in the `Running` state. You can call the [ListInstances](https://help.aliyun.com/document_detail/2361065.html) operation to query the status of simple application servers.
     *     *   Cloud Assistant Agent is installed on the simple application servers. For more information, see [InstallCloudAssistant](https://help.aliyun.com/document_detail/2361030.html).
     *     *   If you run a PowerShell command, make sure that the PowerShell module is configured for the simple application servers.
     * *   The command may fail to be run due to the abnormal states of simple application servers, network exceptions, or exceptions in Cloud Assistant Agent. If the command fails to be run, no execution information is generated.
     * *   If you enable the custom parameter feature when you create a command, you must set the `Parameters` parameter to specify custom parameters when you run the command.
     * *   When you call this operation, you can select only one common command or a custom command that you have created.
     *  *
     * @param InvokeCommandRequest $request InvokeCommandRequest
     *
     * @return InvokeCommandResponse InvokeCommandResponse
     */
    public function invokeCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about custom images that are shared across Alibaba Cloud accounts in a region.
     *  *
     * @param ListCustomImageShareAccountsRequest $request ListCustomImageShareAccountsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomImageShareAccountsResponse ListCustomImageShareAccountsResponse
     */
    public function listCustomImageShareAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
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

        return ListCustomImageShareAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about custom images that are shared across Alibaba Cloud accounts in a region.
     *  *
     * @param ListCustomImageShareAccountsRequest $request ListCustomImageShareAccountsRequest
     *
     * @return ListCustomImageShareAccountsResponse ListCustomImageShareAccountsResponse
     */
    public function listCustomImageShareAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImageShareAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about custom images in a region.
     *  *
     * @param ListCustomImagesRequest $request ListCustomImagesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomImagesResponse ListCustomImagesResponse
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->share)) {
            $query['Share'] = $request->share;
        }
        if (!Utils::isUnset($request->systemSnapshotId)) {
            $query['SystemSnapshotId'] = $request->systemSnapshotId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the information about custom images in a region.
     *  *
     * @param ListCustomImagesRequest $request ListCustomImagesRequest
     *
     * @return ListCustomImagesResponse ListCustomImagesResponse
     */
    public function listCustomImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about disks in a region.
     *  *
     * @description You can specify multiple request parameters that you want to query, such as `InstanceId`, `DiskIds`, and `ResourceGroupId`. Specified request parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the information about disks in a region.
     *  *
     * @description You can specify multiple request parameters that you want to query, such as `InstanceId`, `DiskIds`, and `ResourceGroupId`. Specified request parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the firewall rules of a simple application server.
     *  *
     * @description You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
     * @param ListFirewallRulesRequest $request ListFirewallRulesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFirewallRulesResponse ListFirewallRulesResponse
     */
    public function listFirewallRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->firewallRuleId)) {
            $query['FirewallRuleId'] = $request->firewallRuleId;
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the firewall rules of a simple application server.
     *  *
     * @description You can call the ListFirewallRules operation to query the firewall rule details of a simple application server, including the port range, firewall rule ID, and transport layer protocol.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the information about images in a region.
     *  *
     * @description You can query information about images in a region, including the IDs, names, and types of the images.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
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
     * @summary Queries the information about images in a region.
     *  *
     * @description You can query information about images in a region, including the IDs, names, and types of the images.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
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
     * @summary Queries the plans to which you can upgrade your simple application server.
     *  *
     * @description If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans to which you can upgrade your simple application server. Then, you can call the [UpgradeInstance](https://help.aliyun.com/document_detail/190445.html) operation to upgrade the server.
     * > We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the server. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * For the precautions about plan upgrade, see [Upgrade a simple application server](https://help.aliyun.com/document_detail/61433.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the plans to which you can upgrade your simple application server.
     *  *
     * @description If the plan of your simple application server does not meet your business requirements, you can call the ListInstancePlansModification operation to obtain a list of plans to which you can upgrade your simple application server. Then, you can call the [UpgradeInstance](https://help.aliyun.com/document_detail/190445.html) operation to upgrade the server.
     * > We recommend that you create snapshots for the disks of your simple application server to back up data before you upgrade the server. For more information, see [CreateSnapshot](https://help.aliyun.com/document_detail/190452.html).
     * For the precautions about plan upgrade, see [Upgrade a simple application server](https://help.aliyun.com/document_detail/61433.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the status of simple application servers.
     *  *
     * @param ListInstanceStatusRequest $request ListInstanceStatusRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListInstanceStatusResponse ListInstanceStatusResponse
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
     * @summary Queries the status of simple application servers.
     *  *
     * @param ListInstanceStatusRequest $request ListInstanceStatusRequest
     *
     * @return ListInstanceStatusResponse ListInstanceStatusResponse
     */
    public function listInstanceStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listInstanceStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about simple application servers in a region.
     *  *
     * @description You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the information about simple application servers in a region.
     *  *
     * @description You can call this operation to query the details of simple application servers in a specified region, including the names, public IP addresses, internal IP addresses, creation time, and expiration time of the servers.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the details about data transfer plans of simple application servers.
     *  *
     * @description You can query the details of data transfer plans of simple application servers, including the data transfer quota, used amount and unused amount of the data transfer quota, and excess data transfers beyond the quota in the current month.
     * Simple Application Server provides data transfer quotas in plans. Plan prices include prices of data transfer quotas. You are charged for data transfers that exceed the quotas. Take note of the following items:
     * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     * For more information, see [Quotas and billing of data transfers](https://help.aliyun.com/document_detail/86281.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the details about data transfer plans of simple application servers.
     *  *
     * @description You can query the details of data transfer plans of simple application servers, including the data transfer quota, used amount and unused amount of the data transfer quota, and excess data transfers beyond the quota in the current month.
     * Simple Application Server provides data transfer quotas in plans. Plan prices include prices of data transfer quotas. You are charged for data transfers that exceed the quotas. Take note of the following items:
     * *   Only outbound data transfers of simple application servers over the Internet are calculated. Outbound data transfers include the data transfer quota and the excess data transfers beyond the quota. Inbound data transfers of simple application servers over the Internet are not calculated.
     * *   Outbound data transfers from simple application servers to other Alibaba Cloud services over the Internet first consume data transfer quotas. If the quotas are exhausted, you are charged for excess data transfers.
     * *   You are not charged for data transfers between simple application servers within the same virtual private cloud (VPC).
     * For more information, see [Quotas and billing of data transfers](https://help.aliyun.com/document_detail/86281.html).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries the AccessKey pairs that are bound to simple application servers in a specific region.
     *  *
     * @param ListKeyPairsRequest $request ListKeyPairsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListKeyPairsResponse ListKeyPairsResponse
     */
    public function listKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the AccessKey pairs that are bound to simple application servers in a specific region.
     *  *
     * @param ListKeyPairsRequest $request ListKeyPairsRequest
     *
     * @return ListKeyPairsResponse ListKeyPairsResponse
     */
    public function listKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all plans provided by Simple Application Server in a region.
     *  *
     * @description You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries all plans provided by Simple Application Server in a region.
     *  *
     * @description You can query the details of all plans provided by Simple Application Server in a region, including the IDs, prices, disk sizes, and disk categories of the plans.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Queries all regions in which Simple Application Server is supported.
     *  *
     * @description The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $runtime)
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
     * @summary Queries all regions in which Simple Application Server is supported.
     *  *
     * @description The query results include all the Alibaba Cloud regions where Simple Application Server is supported on the international site (alibabacloud.com) and the China site (aliyun.com).
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
     * @param ListRegionsRequest $request ListRegionsRequest
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about snapshots that are created for a simple application server.
     *  *
     * @description You can specify multiple request parameters that you want to query, such as `InstanceId`, `DiskId`, `SnapshotIds`, and `ResourceGroupId`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        if (!Utils::isUnset($request->sourceDiskType)) {
            $query['SourceDiskType'] = $request->sourceDiskType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries the information about snapshots that are created for a simple application server.
     *  *
     * @description You can specify multiple request parameters that you want to query, such as `InstanceId`, `DiskId`, `SnapshotIds`, and `ResourceGroupId`. Specified parameters have logical AND relations. Only the specified parameters are included in the filter conditions.
     * ### [](#qps-)QPS limits
     * You can call this operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary 云产品查标签接口
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 云产品查标签接口
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Logs on to a simple application server on Workbench.
     *  *
     * @description After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *  *
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
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
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
     * @summary Logs on to a simple application server on Workbench.
     *  *
     * @description After you create a simple application server, you can log on to the simple application server to build environments and applications on the server.
     *  *
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
     * @summary Modifies the description of a Simple Database Service instance.
     *  *
     * @description You can call this operation to modify the description of a Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the description of a Simple Database Service instance.
     *  *
     * @description You can call this operation to modify the description of a Simple Database Service instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the parameters of a Simple Database Service instance.
     *  *
     * @description After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the parameters of a Simple Database Service instance.
     *  *
     * @description After you create a Simple Database Service instance, you can view the parameters of the instance or modify the parameters of the instance based on your business requirements.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the firewall rule of a simple application server.
     *  *
     * @param ModifyFirewallRuleRequest $request ModifyFirewallRuleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFirewallRuleResponse ModifyFirewallRuleResponse
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
     * @summary Modifies the firewall rule of a simple application server.
     *  *
     * @param ModifyFirewallRuleRequest $request ModifyFirewallRuleRequest
     *
     * @return ModifyFirewallRuleResponse ModifyFirewallRuleResponse
     */
    public function modifyFirewallRule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallRuleWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the firewall rule in a firewall template. You can apply the new firewall rule to simple application servers.
     *  *
     * @description Modifying a firewall template does not affect the firewall rules that have been applied to simple application servers.
     *  *
     * @param ModifyFirewallTemplateRequest $request ModifyFirewallTemplateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFirewallTemplateResponse ModifyFirewallTemplateResponse
     */
    public function modifyFirewallTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->firewallTemplateId)) {
            $query['FirewallTemplateId'] = $request->firewallTemplateId;
        }
        if (!Utils::isUnset($request->firewallTemplateRule)) {
            $query['FirewallTemplateRule'] = $request->firewallTemplateRule;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return ModifyFirewallTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the firewall rule in a firewall template. You can apply the new firewall rule to simple application servers.
     *  *
     * @description Modifying a firewall template does not affect the firewall rules that have been applied to simple application servers.
     *  *
     * @param ModifyFirewallTemplateRequest $request ModifyFirewallTemplateRequest
     *
     * @return ModifyFirewallTemplateResponse ModifyFirewallTemplateResponse
     */
    public function modifyFirewallTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFirewallTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Shares or unshares a custom image to Elastic Compute Service (ECS).
     *  *
     * @description You can share a custom image with ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image with ECS to transfer your business from Simple Application Server to ECS.
     * > The shared image in ECS resides in the same region as the custom image in Simple Application Server.
     * You can unshare a custom image based on your business requirements or when you want to delete the custom image. Take note of the following items:
     * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     * *   After you unshare a custom image, you cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Shares or unshares a custom image to Elastic Compute Service (ECS).
     *  *
     * @description You can share a custom image with ECS. If the configurations of your simple application server cannot meet your business requirements, or you want to use ECS instances to deploy your business, you can share your custom image with ECS to transfer your business from Simple Application Server to ECS.
     * > The shared image in ECS resides in the same region as the custom image in Simple Application Server.
     * You can unshare a custom image based on your business requirements or when you want to delete the custom image. Take note of the following items:
     * *   After you unshare a custom image, you cannot query or use the custom image in the ECS console or by calling ECS API operations.
     * *   After you unshare a custom image, you cannot re-initialize the disks of the ECS instances that were created based on the shared image.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Changes the VNC password of a simple application server.
     *  *
     * @param ModifyInstanceVncPasswordRequest $request ModifyInstanceVncPasswordRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceVncPasswordResponse ModifyInstanceVncPasswordResponse
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
     * @summary Changes the VNC password of a simple application server.
     *  *
     * @param ModifyInstanceVncPasswordRequest $request ModifyInstanceVncPasswordRequest
     *
     * @return ModifyInstanceVncPasswordResponse ModifyInstanceVncPasswordResponse
     */
    public function modifyInstanceVncPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceVncPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts a simple application server.
     *  *
     * @description *   Only simple application servers that are in the Running state can be restarted.
     * *   After you restart a simple application server, it enters the Starting state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Restarts a simple application server.
     *  *
     * @description *   Only simple application servers that are in the Running state can be restarted.
     * *   After you restart a simple application server, it enters the Starting state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Restarts simple application servers.
     *  *
     * @param RebootInstancesRequest $request RebootInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootInstancesResponse RebootInstancesResponse
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
     * @summary Restarts simple application servers.
     *  *
     * @param RebootInstancesRequest $request RebootInstancesRequest
     *
     * @return RebootInstancesResponse RebootInstancesResponse
     */
    public function rebootInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Releases the public endpoint of a Simple Database Service instance.
     *  *
     * @description If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Releases the public endpoint of a Simple Database Service instance.
     *  *
     * @description If you no longer need to use a public endpoint to access a Simple Database Service instance, you can release the public endpoint.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Unshares a custom image that is shared across Alibaba Cloud accounts.
     *  *
     * @param RemoveCustomImageShareAccountRequest $request RemoveCustomImageShareAccountRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveCustomImageShareAccountResponse RemoveCustomImageShareAccountResponse
     */
    public function removeCustomImageShareAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->account)) {
            $query['Account'] = $request->account;
        }
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

        return RemoveCustomImageShareAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unshares a custom image that is shared across Alibaba Cloud accounts.
     *  *
     * @param RemoveCustomImageShareAccountRequest $request RemoveCustomImageShareAccountRequest
     *
     * @return RemoveCustomImageShareAccountResponse RemoveCustomImageShareAccountResponse
     */
    public function removeCustomImageShareAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeCustomImageShareAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a simple application server.
     *  *
     * @description *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   When you call this operation to renew a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be renewed.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Renews a simple application server.
     *  *
     * @description *   Before you call this operation, we recommend that you understand the billing of Simple Application Server. For more information, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   When you call this operation to renew a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be renewed.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Resets the password of the administrator account of a Simple Database Service instance.
     *  *
     * @description If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Resets the password of the administrator account of a Simple Database Service instance.
     *  *
     * @description If the password of your Simple Database Service instance is not strong, you can call this operation to change the password of the administrator account of the instance. To ensure security of the instance, we recommend that you regularly change the password of the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Rolls back a disk based on a snapshot.
     *  *
     * @description *   You can call this operation to roll back a disk only if the associated simple application server is in the Stopped state.
     * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     * ### Precautions
     * After you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting operation are retained but cannot be used to roll back the disks of the server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Rolls back a disk based on a snapshot.
     *  *
     * @description *   You can call this operation to roll back a disk only if the associated simple application server is in the Stopped state.
     * *   After a disk is rolled back, all data changes that are made from when the snapshot was created to when the disk is rolled back are lost. Back up disk data based on your needs before you roll back the disk.
     * ### Precautions
     * After you reset a simple application server, the disk data on the server is deleted. Snapshots created before the resetting operation are retained but cannot be used to roll back the disks of the server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Resets a simple application server.
     *  *
     * @description You can reset a simple application server to re-install its application system or OS and re-initialize the server. You can reset a simple application server by resetting the current system or replacing the image.
     * You can use one of the following methods to reset a simple application server:
     * *   Reset the current system. You can re-install the operating system without replacing the image.
     * *   Replace the image. You can select an Alibaba Cloud image or a custom image that is different from the existing image of the server to reinstall the OS of the server.
     * ### Precautions
     * *   After you reset a simple application server, the disk data on the server is cleared. Back up the data as needed.
     * *   After you reset a simple application server, the monitoring operations that are performed on the server may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](https://help.aliyun.com/document_detail/183482.html).
     *     *   Use Command Assistant: For more information, see [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html) topic.
     * ### Limits
     * *   Snapshots that are created before a server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     * *   You cannot reset simple application servers that were created based on custom images that contain data of data disks.
     * *   Before you reset a simple application server by replacing the existing image with a custom image, take note of the following items:
     *     *   The custom image must reside in the same region as the current server.
     *     *   The custom image cannot be created based on the current server. If you want to recover the data on the server, you can use a snapshot of the server to roll back the disks of the server.
     *     *   If your simple application server resides outside the Chinese mainland, you cannot switch the OS of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. You also cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the OSs of simple application servers only between Windows Server OSs or between Linux distributions.
     *     *   The following limits apply to the disks attached to the simple application server:
     *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server and no data disk is attached, you cannot use the custom image to reset the simple application server.
     *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your simple application server, you can upgrade the server. For more information, see Upgrade a simple application server.
     *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Resets a simple application server.
     *  *
     * @description You can reset a simple application server to re-install its application system or OS and re-initialize the server. You can reset a simple application server by resetting the current system or replacing the image.
     * You can use one of the following methods to reset a simple application server:
     * *   Reset the current system. You can re-install the operating system without replacing the image.
     * *   Replace the image. You can select an Alibaba Cloud image or a custom image that is different from the existing image of the server to reinstall the OS of the server.
     * ### Precautions
     * *   After you reset a simple application server, the disk data on the server is cleared. Back up the data as needed.
     * *   After you reset a simple application server, the monitoring operations that are performed on the server may fail. In this case, you can use one of the following methods to install the CloudMonitor agent on the server:
     *     *   Connect to the server: For more information, see [Manually install the CloudMonitor agent for C++ on an ECS instance](https://help.aliyun.com/document_detail/183482.html).
     *     *   Use Command Assistant: For more information, see [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html). You can obtain the command that can be used to install CloudMonitor from the "Common commands" section of the [Use Command Assistant](https://help.aliyun.com/document_detail/438681.html) topic.
     * ### Limits
     * *   Snapshots that are created before a server is reset are retained, but the snapshots cannot be used to roll back the disks of the server.
     * *   You cannot reset simple application servers that were created based on custom images that contain data of data disks.
     * *   Before you reset a simple application server by replacing the existing image with a custom image, take note of the following items:
     *     *   The custom image must reside in the same region as the current server.
     *     *   The custom image cannot be created based on the current server. If you want to recover the data on the server, you can use a snapshot of the server to roll back the disks of the server.
     *     *   If your simple application server resides outside the Chinese mainland, you cannot switch the OS of the server between Windows Server and Linux. You cannot use a Windows Server custom image to reset a Linux simple application server. You also cannot use a Linux custom image to reset a Windows Server simple application server. You can switch the OSs of simple application servers only between Windows Server OSs or between Linux distributions.
     *     *   The following limits apply to the disks attached to the simple application server:
     *         *   If the custom image contains a system disk and a data disk but only a system disk is attached to the simple application server and no data disk is attached, you cannot use the custom image to reset the simple application server.
     *         *   If the system disk size of the custom image is greater than the system disk size of the simple application server, you cannot directly use the custom image to reset the simple application server.
     *         *   Only if the system disk size of the simple application server is greater than or equal to the system disk size of the custom image, you can use the custom image to reset the simple application server. To increase the system disk size of your simple application server, you can upgrade the server. For more information, see Upgrade a simple application server.
     *         *   If the data disk size of the custom image is greater than the data disk size of the simple application server, you cannot use the custom image to reset the simple application server.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Restarts a Simple Database Service instance.
     *  *
     * @description You can call this operation to restart a Simple Database Service instance that is in the Running state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Restarts a Simple Database Service instance.
     *  *
     * @description You can call this operation to restart a Simple Database Service instance that is in the Running state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Runs commands on a simple application server.
     *  *
     * @description Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     * Before you use Command Assistant, take note of the following items:
     * *   The simple application server must be in the Running state.
     * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](https://help.aliyun.com/document_detail/64921.html).
     *  *
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
     * @summary Runs commands on a simple application server.
     *  *
     * @description Command Assistant is an automated O\\&M tool for Simple Application Server. You can maintain simple application servers by running shell, PowerShell, and batch commands in the Simple Application Server console without remotely logging on to the servers.
     * Before you use Command Assistant, take note of the following items:
     * *   The simple application server must be in the Running state.
     * *   The Cloud Assistant client is installed on the server. By default, the Cloud Assistant client is installed on simple application servers. If you have manually uninstalled the client, you must reinstall it. For more information, see [Install the Cloud Assistant Agent](https://help.aliyun.com/document_detail/64921.html).
     *  *
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
     * @summary Starts a Simple Database Service instance.
     *  *
     * @description You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Starts a Simple Database Service instance.
     *  *
     * @description You can call this operation to start a Simple Database Service instance that is in the Stopped state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Starts a simple application server.
     *  *
     * @description You can call this operation to start a simple application server that is in the Stopped state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Starts a simple application server.
     *  *
     * @description You can call this operation to start a simple application server that is in the Stopped state.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Starts simple application servers.
     *  *
     * @param StartInstancesRequest $request StartInstancesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstancesResponse StartInstancesResponse
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
     * @summary Starts simple application servers.
     *  *
     * @param StartInstancesRequest $request StartInstancesRequest
     *
     * @return StartInstancesResponse StartInstancesResponse
     */
    public function startInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a session for a simple application server.
     *  *
     * @param StartTerminalSessionRequest $request StartTerminalSessionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTerminalSessionResponse StartTerminalSessionResponse
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
     * @summary Creates a session for a simple application server.
     *  *
     * @param StartTerminalSessionRequest $request StartTerminalSessionRequest
     *
     * @return StartTerminalSessionResponse StartTerminalSessionResponse
     */
    public function startTerminalSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTerminalSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a Simple Database Service instance.
     *  *
     * @description You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Stops a Simple Database Service instance.
     *  *
     * @description You can call this operation to stop a Simple Database Service instance that is in the Running state. After the instance is stopped, you cannot log on to or access the instance.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Stops a simple application server.
     *  *
     * @description You can stop a simple application server that you do not use for the time being.
     * >  Stopping a simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Stops a simple application server.
     *  *
     * @description You can stop a simple application server that you do not use for the time being.
     * >  Stopping a simple application server may interrupt your business. We recommend that you perform the stop operation during off-peak hours.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Stops simple application servers.
     *  *
     * @param StopInstancesRequest $request StopInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstancesResponse StopInstancesResponse
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
     * @summary Stops simple application servers.
     *  *
     * @param StopInstancesRequest $request StopInstancesRequest
     *
     * @return StopInstancesResponse StopInstancesResponse
     */
    public function stopInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary 删标签接口
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删标签接口
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifys the parameter of a command.
     *  *
     * @param UpdateCommandAttributeRequest $request UpdateCommandAttributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCommandAttributeResponse UpdateCommandAttributeResponse
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
     * @summary Modifys the parameter of a command.
     *  *
     * @param UpdateCommandAttributeRequest $request UpdateCommandAttributeRequest
     *
     * @return UpdateCommandAttributeResponse UpdateCommandAttributeResponse
     */
    public function updateCommandAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCommandAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the remarks for the data disk that is attached to a simple application server.
     *  *
     * @param UpdateDiskAttributeRequest $request UpdateDiskAttributeRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateDiskAttributeResponse UpdateDiskAttributeResponse
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
     * @summary Modifies the remarks for the data disk that is attached to a simple application server.
     *  *
     * @param UpdateDiskAttributeRequest $request UpdateDiskAttributeRequest
     *
     * @return UpdateDiskAttributeResponse UpdateDiskAttributeResponse
     */
    public function updateDiskAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDiskAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information of a simple application server, including the server name and the password that you use to log on to the server.
     *  *
     * @description ## Usage notes
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to allow the new password to take effect.
     * ### QPS limits
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the information of a simple application server, including the server name and the password that you use to log on to the server.
     *  *
     * @description ## Usage notes
     * After you change the password of a simple application server, you must restart the server by calling the [RebootInstance](https://help.aliyun.com/document_detail/190443.html) operation to allow the new password to take effect.
     * ### QPS limits
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Modifies the remarks of a snapshot of a simple application server.
     *  *
     * @param UpdateSnapshotAttributeRequest $request UpdateSnapshotAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSnapshotAttributeResponse UpdateSnapshotAttributeResponse
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
     * @summary Modifies the remarks of a snapshot of a simple application server.
     *  *
     * @param UpdateSnapshotAttributeRequest $request UpdateSnapshotAttributeRequest
     *
     * @return UpdateSnapshotAttributeResponse UpdateSnapshotAttributeResponse
     */
    public function updateSnapshotAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades the plan for a simple application server.
     *  *
     * @description *   The plan of a simple application server cannot be downgraded, but can only be upgraded. For more information about plans, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Upgrades the plan for a simple application server.
     *  *
     * @description *   The plan of a simple application server cannot be downgraded, but can only be upgraded. For more information about plans, see [Billable items](https://help.aliyun.com/document_detail/58623.html).
     * *   When you call this operation to upgrade a server, make sure that the balance in your account is sufficient. If the balance in your account is insufficient, the server cannot be upgraded.
     * ### QPS limit
     * You can call this API operation up to 10 times per minute per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/347607.html).
     *  *
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
     * @summary Imports a key pair for a simple application server.
     *  *
     * @param UploadInstanceKeyPairRequest $request UploadInstanceKeyPairRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadInstanceKeyPairResponse UploadInstanceKeyPairResponse
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
     * @summary Imports a key pair for a simple application server.
     *  *
     * @param UploadInstanceKeyPairRequest $request UploadInstanceKeyPairRequest
     *
     * @return UploadInstanceKeyPairResponse UploadInstanceKeyPairResponse
     */
    public function uploadInstanceKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadInstanceKeyPairWithOptions($request, $runtime);
    }
}
