<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceSecurityGroupsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ConfigInstanceWhiteListResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DisableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\EnableInstancePublicAccessResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagKeysResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\MoveResourceGroupResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Yundunbastionhost extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('yundun-bastionhost', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ConfigInstanceSecurityGroupsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ConfigInstanceSecurityGroupsResponse::fromMap($this->doRPCRequest('ConfigInstanceSecurityGroups', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ConfigInstanceSecurityGroupsRequest $request
     *
     * @return ConfigInstanceSecurityGroupsResponse
     */
    public function configInstanceSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configInstanceSecurityGroupsWithOptions($request, $runtime);
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

        return ConfigInstanceWhiteListResponse::fromMap($this->doRPCRequest('ConfigInstanceWhiteList', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeInstanceAttributeResponse::fromMap($this->doRPCRequest('DescribeInstanceAttribute', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return DisableInstancePublicAccessResponse::fromMap($this->doRPCRequest('DisableInstancePublicAccess', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return EnableInstancePublicAccessResponse::fromMap($this->doRPCRequest('EnableInstancePublicAccess', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagKeysResponse::fromMap($this->doRPCRequest('ListTagKeys', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ListTagResourcesResponse::fromMap($this->doRPCRequest('ListTagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return ModifyInstanceAttributeResponse::fromMap($this->doRPCRequest('ModifyInstanceAttribute', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return MoveResourceGroupResponse::fromMap($this->doRPCRequest('MoveResourceGroup', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return TagResourcesResponse::fromMap($this->doRPCRequest('TagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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

        return UntagResourcesResponse::fromMap($this->doRPCRequest('UntagResources', '2019-12-09', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
