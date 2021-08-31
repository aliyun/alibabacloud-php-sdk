<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CancelServiceRegistrationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CancelServiceRegistrationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\DeleteServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetSupplierInformationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\InvokeServiceInstanceOperationAPIRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\InvokeServiceInstanceOperationAPIResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\LaunchServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListPoliciesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListPoliciesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\RegisterServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateSupplierInformationResponse;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\WithdrawServiceRequest;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\WithdrawServiceResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class ComputeNestSupplier extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('computenestsupplier', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param InvokeServiceInstanceOperationAPIRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return InvokeServiceInstanceOperationAPIResponse
     */
    public function invokeServiceInstanceOperationAPIWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return InvokeServiceInstanceOperationAPIResponse::fromMap($this->doRPCRequest('InvokeServiceInstanceOperationAPI', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param InvokeServiceInstanceOperationAPIRequest $request
     *
     * @return InvokeServiceInstanceOperationAPIResponse
     */
    public function invokeServiceInstanceOperationAPI($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->invokeServiceInstanceOperationAPIWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceInstanceResponse::fromMap($this->doRPCRequest('GetServiceInstance', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceInstanceRequest $request
     *
     * @return GetServiceInstanceResponse
     */
    public function getServiceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteServiceResponse
     */
    public function deleteServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteServiceResponse::fromMap($this->doRPCRequest('DeleteService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteServiceRequest $request
     *
     * @return DeleteServiceResponse
     */
    public function deleteService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListServicesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListServicesResponse
     */
    public function listServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServicesResponse::fromMap($this->doRPCRequest('ListServices', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServicesRequest $request
     *
     * @return ListServicesResponse
     */
    public function listServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServicesWithOptions($request, $runtime);
    }

    /**
     * @param CancelServiceRegistrationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelServiceRegistrationResponse
     */
    public function cancelServiceRegistrationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CancelServiceRegistrationResponse::fromMap($this->doRPCRequest('CancelServiceRegistration', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CancelServiceRegistrationRequest $request
     *
     * @return CancelServiceRegistrationResponse
     */
    public function cancelServiceRegistration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelServiceRegistrationWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceRegistrationsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListServiceRegistrationsResponse
     */
    public function listServiceRegistrationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceRegistrationsResponse::fromMap($this->doRPCRequest('ListServiceRegistrations', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceRegistrationsRequest $request
     *
     * @return ListServiceRegistrationsResponse
     */
    public function listServiceRegistrations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceRegistrationsWithOptions($request, $runtime);
    }

    /**
     * @param GetSupplierInformationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetSupplierInformationResponse
     */
    public function getSupplierInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetSupplierInformationResponse::fromMap($this->doRPCRequest('GetSupplierInformation', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetSupplierInformationRequest $request
     *
     * @return GetSupplierInformationResponse
     */
    public function getSupplierInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSupplierInformationWithOptions($request, $runtime);
    }

    /**
     * @param ListServiceInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListServiceInstancesResponse::fromMap($this->doRPCRequest('ListServiceInstances', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListServiceInstancesRequest $request
     *
     * @return ListServiceInstancesResponse
     */
    public function listServiceInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listServiceInstancesWithOptions($request, $runtime);
    }

    /**
     * @param RegisterServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RegisterServiceResponse
     */
    public function registerServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RegisterServiceResponse::fromMap($this->doRPCRequest('RegisterService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RegisterServiceRequest $request
     *
     * @return RegisterServiceResponse
     */
    public function registerService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateServiceResponse
     */
    public function createServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateServiceResponse::fromMap($this->doRPCRequest('CreateService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateServiceRequest $request
     *
     * @return CreateServiceResponse
     */
    public function createService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceWithOptions($request, $runtime);
    }

    /**
     * @param ListPoliciesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListPoliciesResponse
     */
    public function listPoliciesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListPoliciesResponse::fromMap($this->doRPCRequest('ListPolicies', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListPoliciesRequest $request
     *
     * @return ListPoliciesResponse
     */
    public function listPolicies($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPoliciesWithOptions($request, $runtime);
    }

    /**
     * @param UpdateServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateServiceResponse
     */
    public function updateServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateServiceResponse::fromMap($this->doRPCRequest('UpdateService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateServiceRequest $request
     *
     * @return UpdateServiceResponse
     */
    public function updateService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateServiceWithOptions($request, $runtime);
    }

    /**
     * @param LaunchServiceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LaunchServiceResponse
     */
    public function launchServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return LaunchServiceResponse::fromMap($this->doRPCRequest('LaunchService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param LaunchServiceRequest $request
     *
     * @return LaunchServiceResponse
     */
    public function launchService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchServiceWithOptions($request, $runtime);
    }

    /**
     * @param WithdrawServiceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return WithdrawServiceResponse
     */
    public function withdrawServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return WithdrawServiceResponse::fromMap($this->doRPCRequest('WithdrawService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param WithdrawServiceRequest $request
     *
     * @return WithdrawServiceResponse
     */
    public function withdrawService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->withdrawServiceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateSupplierInformationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateSupplierInformationResponse
     */
    public function updateSupplierInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateSupplierInformationResponse::fromMap($this->doRPCRequest('UpdateSupplierInformation', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateSupplierInformationRequest $request
     *
     * @return UpdateSupplierInformationResponse
     */
    public function updateSupplierInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSupplierInformationWithOptions($request, $runtime);
    }

    /**
     * @param GetServiceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetServiceResponse
     */
    public function getServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetServiceResponse::fromMap($this->doRPCRequest('GetService', '2021-05-21', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetServiceRequest $request
     *
     * @return GetServiceResponse
     */
    public function getService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getServiceWithOptions($request, $runtime);
    }
}
