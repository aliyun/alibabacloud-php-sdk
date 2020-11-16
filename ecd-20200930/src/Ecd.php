<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteImagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteImagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeletePolicyGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeletePolicyGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopPolicysRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopPolicysResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoCheckResourceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoCheckResourceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoLogicalDeleteResourceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoLogicalDeleteResourceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoPhysicalDeleteResourceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DoPhysicalDeleteResourceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopPolicysRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopPolicysResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\PayOrderCallbackRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\PayOrderCallbackResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ecd extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ModifyPolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyPolicyGroupResponse::fromMap($this->doRequest('ModifyPolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyPolicyGroupRequest $request
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param PayOrderCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return PayOrderCallbackResponse
     */
    public function payOrderCallbackWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return PayOrderCallbackResponse::fromMap($this->doRequest('PayOrderCallback', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param PayOrderCallbackRequest $request
     *
     * @return PayOrderCallbackResponse
     */
    public function payOrderCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->payOrderCallbackWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDesktopTypesResponse
     */
    public function describeDesktopTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopTypesResponse::fromMap($this->doRequest('DescribeDesktopTypes', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopTypesRequest $request
     *
     * @return DescribeDesktopTypesResponse
     */
    public function describeDesktopTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDirectoriesResponse::fromMap($this->doRequest('DescribeDirectories', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectoriesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDirectoriesResponse::fromMap($this->doRequest('DeleteDirectories', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDirectoriesRequest $request
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param ListDirectoryUsersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDirectoryUsersResponse
     */
    public function listDirectoryUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDirectoryUsersResponse::fromMap($this->doRequest('ListDirectoryUsers', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDirectoryUsersRequest $request
     *
     * @return ListDirectoryUsersResponse
     */
    public function listDirectoryUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoryUsersWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateImageResponse::fromMap($this->doRequest('CreateImage', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateImageRequest $request
     *
     * @return CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateRAMDirectoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRAMDirectoryResponse
     */
    public function createRAMDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRAMDirectoryResponse::fromMap($this->doRequest('CreateRAMDirectory', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRAMDirectoryRequest $request
     *
     * @return CreateRAMDirectoryResponse
     */
    public function createRAMDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRAMDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletePolicyGroupsResponse
     */
    public function deletePolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyGroupsResponse::fromMap($this->doRequest('DeletePolicyGroups', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeletePolicyGroupsRequest $request
     *
     * @return DeletePolicyGroupsResponse
     */
    public function deletePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePolicyGroupsResponse
     */
    public function describePolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePolicyGroupsResponse::fromMap($this->doRequest('DescribePolicyGroups', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePolicyGroupsRequest $request
     *
     * @return DescribePolicyGroupsResponse
     */
    public function describePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDesktopsResponse
     */
    public function deleteDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDesktopsResponse::fromMap($this->doRequest('DeleteDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDesktopsRequest $request
     *
     * @return DeleteDesktopsResponse
     */
    public function deleteDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageAttributeResponse::fromMap($this->doRequest('ModifyImageAttribute', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyImageAttributeRequest $request
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param DoLogicalDeleteResourceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DoLogicalDeleteResourceResponse
     */
    public function doLogicalDeleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DoLogicalDeleteResourceResponse::fromMap($this->doRequest('DoLogicalDeleteResource', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DoLogicalDeleteResourceRequest $request
     *
     * @return DoLogicalDeleteResourceResponse
     */
    public function doLogicalDeleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doLogicalDeleteResourceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEntitlementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEntitlementResponse
     */
    public function modifyEntitlementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyEntitlementResponse::fromMap($this->doRequest('ModifyEntitlement', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyEntitlementRequest $request
     *
     * @return ModifyEntitlementResponse
     */
    public function modifyEntitlement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEntitlementWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBundlesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBundlesResponse
     */
    public function deleteBundlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBundlesResponse::fromMap($this->doRequest('DeleteBundles', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteBundlesRequest $request
     *
     * @return DeleteBundlesResponse
     */
    public function deleteBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBundlesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopsResponse::fromMap($this->doRequest('DescribeDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopsRequest $request
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RebootDesktopsResponse::fromMap($this->doRequest('RebootDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RebootDesktopsRequest $request
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param CreateBundleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBundleResponse
     */
    public function createBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBundleResponse::fromMap($this->doRequest('CreateBundle', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBundleRequest $request
     *
     * @return CreateBundleResponse
     */
    public function createBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBundleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopsPolicyGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopsPolicyGroupResponse::fromMap($this->doRequest('ModifyDesktopsPolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopsPolicyGroupRequest $request
     *
     * @return ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopsPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreatePolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyGroupResponse::fromMap($this->doRequest('CreatePolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreatePolicyGroupRequest $request
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param DoPhysicalDeleteResourceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DoPhysicalDeleteResourceResponse
     */
    public function doPhysicalDeleteResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DoPhysicalDeleteResourceResponse::fromMap($this->doRequest('DoPhysicalDeleteResource', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DoPhysicalDeleteResourceRequest $request
     *
     * @return DoPhysicalDeleteResourceResponse
     */
    public function doPhysicalDeleteResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doPhysicalDeleteResourceWithOptions($request, $runtime);
    }

    /**
     * @param CreateADConnectorDirectoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateADConnectorDirectoryResponse::fromMap($this->doRequest('CreateADConnectorDirectory', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateADConnectorDirectoryRequest $request
     *
     * @return CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createADConnectorDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetConnectionTicketResponse::fromMap($this->doRequest('GetConnectionTicket', 'HTTP', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopPolicysRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDesktopPolicysResponse
     */
    public function modifyDesktopPolicysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopPolicysResponse::fromMap($this->doRequest('ModifyDesktopPolicys', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopPolicysRequest $request
     *
     * @return ModifyDesktopPolicysResponse
     */
    public function modifyDesktopPolicys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopPolicysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBundlesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBundlesResponse
     */
    public function describeBundlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBundlesResponse::fromMap($this->doRequest('DescribeBundles', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeBundlesRequest $request
     *
     * @return DescribeBundlesResponse
     */
    public function describeBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBundlesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImagesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteImagesResponse
     */
    public function deleteImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteImagesResponse::fromMap($this->doRequest('DeleteImages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteImagesRequest $request
     *
     * @return DeleteImagesResponse
     */
    public function deleteImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesWithOptions($request, $runtime);
    }

    /**
     * @param DoCheckResourceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DoCheckResourceResponse
     */
    public function doCheckResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DoCheckResourceResponse::fromMap($this->doRequest('DoCheckResource', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DoCheckResourceRequest $request
     *
     * @return DoCheckResourceResponse
     */
    public function doCheckResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->doCheckResourceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopPolicysRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDesktopPolicysResponse
     */
    public function describeDesktopPolicysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopPolicysResponse::fromMap($this->doRequest('DescribeDesktopPolicys', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopPolicysRequest $request
     *
     * @return DescribeDesktopPolicysResponse
     */
    public function describeDesktopPolicys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopPolicysWithOptions($request, $runtime);
    }

    /**
     * @param CreateDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDesktopsResponse
     */
    public function createDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDesktopsResponse::fromMap($this->doRequest('CreateDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDesktopsRequest $request
     *
     * @return CreateDesktopsResponse
     */
    public function createDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImagesResponse::fromMap($this->doRequest('DescribeImages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeImagesRequest $request
     *
     * @return DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
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
}
