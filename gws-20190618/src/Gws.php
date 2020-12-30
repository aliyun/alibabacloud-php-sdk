<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateImageRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateImageResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterADDomainRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterADDomainResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterConnectionsRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterConnectionsResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterPolicyRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClusterPolicyResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancePolicyRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancePolicyResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\GetConnectTicketRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\GetConnectTicketResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\IsUserAdminResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\RestartInstanceRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\RestartInstanceResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterADDomainRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterADDomainResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterDnatRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterDnatResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterNameRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterNameResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterPolicyRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetClusterPolicyResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetImageNameRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetImageNameResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstanceNameRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstanceNameResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstancePolicyRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstancePolicyResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstanceUserRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\SetInstanceUserResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Gws\V20190618\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Gws\V20190618\Models\StopInstanceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Gws extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-southeast-3'      => 'gws.ap-northeast-3.aliyuncs.com',
            'cn-hangzhou-finance' => 'ecd.cn-hangzhou-finance.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('gws', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateClusterResponse::fromMap($this->doRPCRequest('CreateCluster', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateImageResponse::fromMap($this->doRPCRequest('CreateImage', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateInstanceResponse::fromMap($this->doRPCRequest('CreateInstance', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return CreateServiceLinkedRoleResponse::fromMap($this->doRPCRequest('CreateServiceLinkedRole', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole()
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteClusterResponse::fromMap($this->doRPCRequest('DeleteCluster', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteImageResponse::fromMap($this->doRPCRequest('DeleteImage', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @param DeleteInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteInstanceResponse::fromMap($this->doRPCRequest('DeleteInstance', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteInstanceRequest $request
     *
     * @return DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return DescribeAvailableResourceResponse::fromMap($this->doRPCRequest('DescribeAvailableResource', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($runtime);
    }

    /**
     * @param DescribeClusterADDomainRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeClusterADDomainResponse
     */
    public function describeClusterADDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterADDomainResponse::fromMap($this->doRPCRequest('DescribeClusterADDomain', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterADDomainRequest $request
     *
     * @return DescribeClusterADDomainResponse
     */
    public function describeClusterADDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterADDomainWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterConnectionsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeClusterConnectionsResponse
     */
    public function describeClusterConnectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterConnectionsResponse::fromMap($this->doRPCRequest('DescribeClusterConnections', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterConnectionsRequest $request
     *
     * @return DescribeClusterConnectionsResponse
     */
    public function describeClusterConnections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterConnectionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterPolicyRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeClusterPolicyResponse
     */
    public function describeClusterPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClusterPolicyResponse::fromMap($this->doRPCRequest('DescribeClusterPolicy', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClusterPolicyRequest $request
     *
     * @return DescribeClusterPolicyResponse
     */
    public function describeClusterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterPolicyWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeClustersResponse::fromMap($this->doRPCRequest('DescribeClusters', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
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
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeImagesResponse::fromMap($this->doRPCRequest('DescribeImages', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param DescribeInstancePolicyRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstancePolicyResponse
     */
    public function describeInstancePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeInstancePolicyResponse::fromMap($this->doRPCRequest('DescribeInstancePolicy', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeInstancePolicyRequest $request
     *
     * @return DescribeInstancePolicyResponse
     */
    public function describeInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancePolicyWithOptions($request, $runtime);
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

        return DescribeInstancesResponse::fromMap($this->doRPCRequest('DescribeInstances', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param GetConnectTicketRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetConnectTicketResponse
     */
    public function getConnectTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetConnectTicketResponse::fromMap($this->doRPCRequest('GetConnectTicket', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetConnectTicketRequest $request
     *
     * @return GetConnectTicketResponse
     */
    public function getConnectTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectTicketWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return IsUserAdminResponse
     */
    public function isUserAdminWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return IsUserAdminResponse::fromMap($this->doRPCRequest('IsUserAdmin', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return IsUserAdminResponse
     */
    public function isUserAdmin()
    {
        $runtime = new RuntimeOptions([]);

        return $this->isUserAdminWithOptions($runtime);
    }

    /**
     * @param RestartInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RestartInstanceResponse
     */
    public function restartInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartInstanceResponse::fromMap($this->doRPCRequest('RestartInstance', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartInstanceRequest $request
     *
     * @return RestartInstanceResponse
     */
    public function restartInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartInstanceWithOptions($request, $runtime);
    }

    /**
     * @param SetClusterADDomainRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SetClusterADDomainResponse
     */
    public function setClusterADDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetClusterADDomainResponse::fromMap($this->doRPCRequest('SetClusterADDomain', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetClusterADDomainRequest $request
     *
     * @return SetClusterADDomainResponse
     */
    public function setClusterADDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClusterADDomainWithOptions($request, $runtime);
    }

    /**
     * @param SetClusterDnatRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetClusterDnatResponse
     */
    public function setClusterDnatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetClusterDnatResponse::fromMap($this->doRPCRequest('SetClusterDnat', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetClusterDnatRequest $request
     *
     * @return SetClusterDnatResponse
     */
    public function setClusterDnat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClusterDnatWithOptions($request, $runtime);
    }

    /**
     * @param SetClusterNameRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetClusterNameResponse
     */
    public function setClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetClusterNameResponse::fromMap($this->doRPCRequest('SetClusterName', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetClusterNameRequest $request
     *
     * @return SetClusterNameResponse
     */
    public function setClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param SetClusterPolicyRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetClusterPolicyResponse
     */
    public function setClusterPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetClusterPolicyResponse::fromMap($this->doRPCRequest('SetClusterPolicy', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetClusterPolicyRequest $request
     *
     * @return SetClusterPolicyResponse
     */
    public function setClusterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setClusterPolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetImageNameRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SetImageNameResponse
     */
    public function setImageNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetImageNameResponse::fromMap($this->doRPCRequest('SetImageName', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetImageNameRequest $request
     *
     * @return SetImageNameResponse
     */
    public function setImageName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setImageNameWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceNameRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetInstanceNameResponse
     */
    public function setInstanceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstanceNameResponse::fromMap($this->doRPCRequest('SetInstanceName', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetInstanceNameRequest $request
     *
     * @return SetInstanceNameResponse
     */
    public function setInstanceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceNameWithOptions($request, $runtime);
    }

    /**
     * @param SetInstancePolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SetInstancePolicyResponse
     */
    public function setInstancePolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstancePolicyResponse::fromMap($this->doRPCRequest('SetInstancePolicy', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetInstancePolicyRequest $request
     *
     * @return SetInstancePolicyResponse
     */
    public function setInstancePolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstancePolicyWithOptions($request, $runtime);
    }

    /**
     * @param SetInstanceUserRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetInstanceUserResponse
     */
    public function setInstanceUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetInstanceUserResponse::fromMap($this->doRPCRequest('SetInstanceUser', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetInstanceUserRequest $request
     *
     * @return SetInstanceUserResponse
     */
    public function setInstanceUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setInstanceUserWithOptions($request, $runtime);
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

        return StartInstanceResponse::fromMap($this->doRPCRequest('StartInstance', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
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
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopInstanceResponse::fromMap($this->doRPCRequest('StopInstance', '2019-06-18', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }
}
