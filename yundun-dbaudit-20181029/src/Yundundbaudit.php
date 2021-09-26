<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20181029;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ClearInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ClearInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ConfigInstanceWhiteListRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ConfigInstanceWhiteListResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeAuditLogsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeAuditLogsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttribueRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttribueResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeRenewStatusRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeRenewStatusResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeSessionLogsRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DescribeSessionLogsResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DisableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\DisableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\EnableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\EnableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GenerateUploadAuthRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GenerateUploadAuthResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GrantServiceRoleRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\GrantServiceRoleResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ModifyInstanceStorageRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\ModifyInstanceStorageResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\RefundInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\RefundInstanceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundundbaudit\V20181029\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Yundundbaudit extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-dbaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ClearInstanceStorageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ClearInstanceStorageResponse
     */
    public function clearInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearInstanceStorageResponse::fromMap($this->doRPCRequest('ClearInstanceStorage', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearInstanceStorageRequest $request
     *
     * @return ClearInstanceStorageResponse
     */
    public function clearInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param ConfigInstanceWhiteListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigInstanceWhiteListResponse::fromMap($this->doRPCRequest('ConfigInstanceWhiteList', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigInstanceWhiteListRequest $request
     *
     * @return ConfigInstanceWhiteListResponse
     */
    public function configInstanceWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAuditLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAuditLogsResponse::fromMap($this->doRPCRequest('DescribeAuditLogs', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAuditLogsRequest $request
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttribueRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeInstanceAttribueResponse
     */
    public function describeInstanceAttribueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttribueResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribue', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttribueRequest $request
     *
     * @return DescribeInstanceAttribueResponse
     */
    public function describeInstanceAttribue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttribueWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceAttributeRequest $request
     *
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstancesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInstanceStorageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeInstanceStorageResponse
     */
    public function describeInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstanceStorageResponse::fromMap($this->doRPCRequest('DescribeInstanceStorage', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstanceStorageRequest $request
     *
     * @return DescribeInstanceStorageResponse
     */
    public function describeInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRenewStatusRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRenewStatusResponse
     */
    public function describeRenewStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRenewStatusResponse::fromMap($this->doRPCRequest('DescribeRenewStatus', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRenewStatusRequest $request
     *
     * @return DescribeRenewStatusResponse
     */
    public function describeRenewStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSessionLogsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeSessionLogsResponse
     */
    public function describeSessionLogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSessionLogsResponse::fromMap($this->doRPCRequest('DescribeSessionLogs', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSessionLogsRequest $request
     *
     * @return DescribeSessionLogsResponse
     */
    public function describeSessionLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSessionLogsWithOptions($request, $runtime);
    }

    /**
     * @param DisableInstancePublicAccessRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DisableInstancePublicAccessResponse::fromMap($this->doRPCRequest('DisableInstancePublicAccess', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DisableInstancePublicAccessRequest $request
     *
     * @return DisableInstancePublicAccessResponse
     */
    public function disableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @param EnableInstancePublicAccessRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return EnableInstancePublicAccessResponse::fromMap($this->doRPCRequest('EnableInstancePublicAccess', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param EnableInstancePublicAccessRequest $request
     *
     * @return EnableInstancePublicAccessResponse
     */
    public function enableInstancePublicAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableInstancePublicAccessWithOptions($request, $runtime);
    }

    /**
     * @param GenerateUploadAuthRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GenerateUploadAuthResponse
     */
    public function generateUploadAuthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GenerateUploadAuthResponse::fromMap($this->doRPCRequest('GenerateUploadAuth', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GenerateUploadAuthRequest $request
     *
     * @return GenerateUploadAuthResponse
     */
    public function generateUploadAuth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateUploadAuthWithOptions($request, $runtime);
    }

    /**
     * @param GrantServiceRoleRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GrantServiceRoleResponse
     */
    public function grantServiceRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GrantServiceRoleResponse::fromMap($this->doRPCRequest('GrantServiceRole', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GrantServiceRoleRequest $request
     *
     * @return GrantServiceRoleResponse
     */
    public function grantServiceRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->grantServiceRoleWithOptions($request, $runtime);
    }

    /**
     * @param ListTagKeysRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListTagKeysRequest $request
     *
     * @return ListTagKeysResponse
     */
    public function listTagKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagKeysWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyInstanceStorageRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyInstanceStorageResponse
     */
    public function modifyInstanceStorageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyInstanceStorageResponse::fromMap($this->doRPCRequest('ModifyInstanceStorage', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyInstanceStorageRequest $request
     *
     * @return ModifyInstanceStorageResponse
     */
    public function modifyInstanceStorage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceStorageWithOptions($request, $runtime);
    }

    /**
     * @param MoveResourceGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param MoveResourceGroupRequest $request
     *
     * @return MoveResourceGroupResponse
     */
    public function moveResourceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveResourceGroupWithOptions($request, $runtime);
    }

    /**
     * @param RefundInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RefundInstanceResponse
     */
    public function refundInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RefundInstanceResponse::fromMap($this->doRPCRequest('RefundInstance', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RefundInstanceRequest $request
     *
     * @return RefundInstanceResponse
     */
    public function refundInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refundInstanceWithOptions($request, $runtime);
    }

    /**
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
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
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2018-10-29', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
