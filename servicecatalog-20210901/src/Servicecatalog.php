<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ApproveProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ApproveProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociatePrincipalWithPortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociatePrincipalWithPortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociateProductWithPortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociateProductWithPortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociateTagOptionWithResourceRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\AssociateTagOptionWithResourceResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CancelProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CancelProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CopyProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CopyProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateConstraintRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateConstraintResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreatePortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreatePortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductShrinkRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductVersionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProductVersionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTagOptionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTagOptionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteConstraintRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteConstraintResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeletePortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeletePortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProductVersionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProductVersionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteTagOptionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DeleteTagOptionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisassociatePrincipalFromPortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisassociatePrincipalFromPortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisassociateProductFromPortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisassociateProductFromPortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisAssociateTagOptionFromResourceRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\DisAssociateTagOptionFromResourceResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ExecuteProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ExecuteProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetConstraintResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetPortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetPortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsAdminResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsEndUserRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductAsEndUserResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductVersionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProductVersionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetProvisionedProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTagOptionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTagOptionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTemplateRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTemplateResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\LaunchProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\LaunchProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListLaunchOptionsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPortfoliosRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPortfoliosResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsAdminRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsAdminResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsEndUserRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsEndUserResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductVersionsRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductVersionsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductsRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListResourcesForTagOptionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListResourcesForTagOptionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTagOptionsRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTagOptionsResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTagOptionsShrinkRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTasksResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\TerminateProvisionedProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\TerminateProvisionedProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateConstraintRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateConstraintResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdatePortfolioRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdatePortfolioResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProductVersionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProductVersionResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductPlanRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductPlanResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateProvisionedProductResponse;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateTagOptionRequest;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\UpdateTagOptionResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Servicecatalog extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('servicecatalog', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ApproveProvisionedProductPlanRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ApproveProvisionedProductPlanResponse
     */
    public function approveProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->approvalAction)) {
            $body['ApprovalAction'] = $request->approvalAction;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveProvisionedProductPlanRequest $request
     *
     * @return ApproveProvisionedProductPlanResponse
     */
    public function approveProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param AssociatePrincipalWithPortfolioRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AssociatePrincipalWithPortfolioResponse
     */
    public function associatePrincipalWithPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $body['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $body['PrincipalType'] = $request->principalType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociatePrincipalWithPortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociatePrincipalWithPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociatePrincipalWithPortfolioRequest $request
     *
     * @return AssociatePrincipalWithPortfolioResponse
     */
    public function associatePrincipalWithPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associatePrincipalWithPortfolioWithOptions($request, $runtime);
    }

    /**
     * @param AssociateProductWithPortfolioRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssociateProductWithPortfolioResponse
     */
    public function associateProductWithPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateProductWithPortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateProductWithPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateProductWithPortfolioRequest $request
     *
     * @return AssociateProductWithPortfolioResponse
     */
    public function associateProductWithPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateProductWithPortfolioWithOptions($request, $runtime);
    }

    /**
     * @param AssociateTagOptionWithResourceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return AssociateTagOptionWithResourceResponse
     */
    public function associateTagOptionWithResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tagOptionId)) {
            $body['TagOptionId'] = $request->tagOptionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AssociateTagOptionWithResource',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateTagOptionWithResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateTagOptionWithResourceRequest $request
     *
     * @return AssociateTagOptionWithResourceResponse
     */
    public function associateTagOptionWithResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateTagOptionWithResourceWithOptions($request, $runtime);
    }

    /**
     * @param CancelProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelProvisionedProductPlanResponse
     */
    public function cancelProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelProvisionedProductPlanRequest $request
     *
     * @return CancelProvisionedProductPlanResponse
     */
    public function cancelProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param CopyProductRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CopyProductResponse
     */
    public function copyProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->sourceProductArn)) {
            $body['SourceProductArn'] = $request->sourceProductArn;
        }
        if (!Utils::isUnset($request->targetProductName)) {
            $body['TargetProductName'] = $request->targetProductName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CopyProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyProductRequest $request
     *
     * @return CopyProductResponse
     */
    public function copyProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyProductWithOptions($request, $runtime);
    }

    /**
     * @param CreateConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConstraintResponse
     */
    public function createConstraintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->constraintType)) {
            $body['ConstraintType'] = $request->constraintType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateConstraint',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateConstraintRequest $request
     *
     * @return CreateConstraintResponse
     */
    public function createConstraint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConstraintWithOptions($request, $runtime);
    }

    /**
     * @param CreatePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePortfolioResponse
     */
    public function createPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->portfolioName)) {
            $body['PortfolioName'] = $request->portfolioName;
        }
        if (!Utils::isUnset($request->providerName)) {
            $body['ProviderName'] = $request->providerName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreatePortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePortfolioRequest $request
     *
     * @return CreatePortfolioResponse
     */
    public function createPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPortfolioWithOptions($request, $runtime);
    }

    /**
     * Before you call the CreateProduct operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *   *
     * @param CreateProductRequest $tmpReq  CreateProductRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProductResponse CreateProductResponse
     */
    public function createProductWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateProductShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->productVersionParameters)) {
            $request->productVersionParametersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->productVersionParameters, 'ProductVersionParameters', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->productName)) {
            $body['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->productVersionParametersShrink)) {
            $body['ProductVersionParameters'] = $request->productVersionParametersShrink;
        }
        if (!Utils::isUnset($request->providerName)) {
            $body['ProviderName'] = $request->providerName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the CreateProduct operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *   *
     * @param CreateProductRequest $request CreateProductRequest
     *
     * @return CreateProductResponse CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * Before you call the CreateProductVersion operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *   *
     * @param CreateProductVersionRequest $request CreateProductVersionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProductVersionResponse CreateProductVersionResponse
     */
    public function createProductVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->guidance)) {
            $body['Guidance'] = $request->guidance;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionName)) {
            $body['ProductVersionName'] = $request->productVersionName;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->templateUrl)) {
            $body['TemplateUrl'] = $request->templateUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProductVersion',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call the CreateProductVersion operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *   *
     * @param CreateProductVersionRequest $request CreateProductVersionRequest
     *
     * @return CreateProductVersionResponse CreateProductVersionResponse
     */
    public function createProductVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductVersionWithOptions($request, $runtime);
    }

    /**
     * @param CreateProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateProvisionedProductPlanResponse
     */
    public function createProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->operationType)) {
            $body['OperationType'] = $request->operationType;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->planName)) {
            $body['PlanName'] = $request->planName;
        }
        if (!Utils::isUnset($request->planType)) {
            $body['PlanType'] = $request->planType;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        if (!Utils::isUnset($request->provisionedProductName)) {
            $body['ProvisionedProductName'] = $request->provisionedProductName;
        }
        if (!Utils::isUnset($request->stackRegionId)) {
            $body['StackRegionId'] = $request->stackRegionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateProvisionedProductPlanRequest $request
     *
     * @return CreateProvisionedProductPlanResponse
     */
    public function createProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param CreateTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTagOptionResponse
     */
    public function createTagOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->key)) {
            $body['Key'] = $request->key;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTagOption',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTagOptionRequest $request
     *
     * @return CreateTagOptionResponse
     */
    public function createTagOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTagOptionWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateBody)) {
            $body['TemplateBody'] = $request->templateBody;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->terraformVariables)) {
            $body['TerraformVariables'] = $request->terraformVariables;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConstraintResponse
     */
    public function deleteConstraintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->constraintId)) {
            $body['ConstraintId'] = $request->constraintId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteConstraint',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteConstraintRequest $request
     *
     * @return DeleteConstraintResponse
     */
    public function deleteConstraint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConstraintWithOptions($request, $runtime);
    }

    /**
     * @param DeletePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePortfolioResponse
     */
    public function deletePortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeletePortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePortfolioRequest $request
     *
     * @return DeletePortfolioResponse
     */
    public function deletePortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePortfolioWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProductRequest $request
     *
     * @return DeleteProductResponse
     */
    public function deleteProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProductVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProductVersionResponse
     */
    public function deleteProductVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProductVersion',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProductVersionRequest $request
     *
     * @return DeleteProductVersionResponse
     */
    public function deleteProductVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProductVersionWithOptions($request, $runtime);
    }

    /**
     * @param DeleteProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteProvisionedProductPlanResponse
     */
    public function deleteProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteProvisionedProductPlanRequest $request
     *
     * @return DeleteProvisionedProductPlanResponse
     */
    public function deleteProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTagOptionResponse
     */
    public function deleteTagOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->tagOptionId)) {
            $body['TagOptionId'] = $request->tagOptionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTagOption',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTagOptionRequest $request
     *
     * @return DeleteTagOptionResponse
     */
    public function deleteTagOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTagOptionWithOptions($request, $runtime);
    }

    /**
     * @param DisAssociateTagOptionFromResourceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DisAssociateTagOptionFromResourceResponse
     */
    public function disAssociateTagOptionFromResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->tagOptionId)) {
            $body['TagOptionId'] = $request->tagOptionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisAssociateTagOptionFromResource',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisAssociateTagOptionFromResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisAssociateTagOptionFromResourceRequest $request
     *
     * @return DisAssociateTagOptionFromResourceResponse
     */
    public function disAssociateTagOptionFromResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disAssociateTagOptionFromResourceWithOptions($request, $runtime);
    }

    /**
     * @param DisassociatePrincipalFromPortfolioRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DisassociatePrincipalFromPortfolioResponse
     */
    public function disassociatePrincipalFromPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->principalId)) {
            $body['PrincipalId'] = $request->principalId;
        }
        if (!Utils::isUnset($request->principalType)) {
            $body['PrincipalType'] = $request->principalType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisassociatePrincipalFromPortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociatePrincipalFromPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociatePrincipalFromPortfolioRequest $request
     *
     * @return DisassociatePrincipalFromPortfolioResponse
     */
    public function disassociatePrincipalFromPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociatePrincipalFromPortfolioWithOptions($request, $runtime);
    }

    /**
     * @param DisassociateProductFromPortfolioRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisassociateProductFromPortfolioResponse
     */
    public function disassociateProductFromPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DisassociateProductFromPortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisassociateProductFromPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisassociateProductFromPortfolioRequest $request
     *
     * @return DisassociateProductFromPortfolioResponse
     */
    public function disassociateProductFromPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateProductFromPortfolioWithOptions($request, $runtime);
    }

    /**
     * @param ExecuteProvisionedProductPlanRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ExecuteProvisionedProductPlanResponse
     */
    public function executeProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ExecuteProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExecuteProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExecuteProvisionedProductPlanRequest $request
     *
     * @return ExecuteProvisionedProductPlanResponse
     */
    public function executeProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->executeProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetConstraintRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConstraintResponse
     */
    public function getConstraintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->constraintId)) {
            $query['ConstraintId'] = $request->constraintId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConstraint',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConstraintRequest $request
     *
     * @return GetConstraintResponse
     */
    public function getConstraint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConstraintWithOptions($request, $runtime);
    }

    /**
     * @param GetPortfolioRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPortfolioResponse
     */
    public function getPortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $query['PortfolioId'] = $request->portfolioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetPortfolioRequest $request
     *
     * @return GetPortfolioResponse
     */
    public function getPortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPortfolioWithOptions($request, $runtime);
    }

    /**
     * @param GetProductAsAdminRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProductAsAdminResponse
     */
    public function getProductAsAdminWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductAsAdmin',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductAsAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProductAsAdminRequest $request
     *
     * @return GetProductAsAdminResponse
     */
    public function getProductAsAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductAsAdminWithOptions($request, $runtime);
    }

    /**
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](~~405233~~).
     *   *
     * @param GetProductAsEndUserRequest $request GetProductAsEndUserRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProductAsEndUserResponse GetProductAsEndUserResponse
     */
    public function getProductAsEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductAsEndUser',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductAsEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](~~405233~~).
     *   *
     * @param GetProductAsEndUserRequest $request GetProductAsEndUserRequest
     *
     * @return GetProductAsEndUserResponse GetProductAsEndUserResponse
     */
    public function getProductAsEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductAsEndUserWithOptions($request, $runtime);
    }

    /**
     * @param GetProductVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProductVersionResponse
     */
    public function getProductVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productVersionId)) {
            $query['ProductVersionId'] = $request->productVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProductVersion',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProductVersionRequest $request
     *
     * @return GetProductVersionResponse
     */
    public function getProductVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductVersionWithOptions($request, $runtime);
    }

    /**
     * @param GetProvisionedProductRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetProvisionedProductResponse
     */
    public function getProvisionedProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->provisionedProductId)) {
            $query['ProvisionedProductId'] = $request->provisionedProductId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProvisionedProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProvisionedProductRequest $request
     *
     * @return GetProvisionedProductResponse
     */
    public function getProvisionedProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProvisionedProductWithOptions($request, $runtime);
    }

    /**
     * @param GetProvisionedProductPlanRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetProvisionedProductPlanResponse
     */
    public function getProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetProvisionedProductPlanRequest $request
     *
     * @return GetProvisionedProductPlanResponse
     */
    public function getProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param GetTagOptionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTagOptionResponse
     */
    public function getTagOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTagOption',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTagOptionRequest $request
     *
     * @return GetTagOptionResponse
     */
    public function getTagOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTagOptionWithOptions($request, $runtime);
    }

    /**
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTaskRequest $request
     *
     * @return GetTaskResponse
     */
    public function getTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTaskWithOptions($request, $runtime);
    }

    /**
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $query['ProductVersionId'] = $request->productVersionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateRequest $request
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @param LaunchProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LaunchProductResponse
     */
    public function launchProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        if (!Utils::isUnset($request->provisionedProductName)) {
            $body['ProvisionedProductName'] = $request->provisionedProductName;
        }
        if (!Utils::isUnset($request->stackRegionId)) {
            $body['StackRegionId'] = $request->stackRegionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LaunchProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LaunchProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LaunchProductRequest $request
     *
     * @return LaunchProductResponse
     */
    public function launchProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->launchProductWithOptions($request, $runtime);
    }

    /**
     * @param ListLaunchOptionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLaunchOptionsResponse
     */
    public function listLaunchOptionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLaunchOptions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLaunchOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLaunchOptionsRequest $request
     *
     * @return ListLaunchOptionsResponse
     */
    public function listLaunchOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLaunchOptionsWithOptions($request, $runtime);
    }

    /**
     * @param ListPortfoliosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPortfoliosResponse
     */
    public function listPortfoliosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPortfolios',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPortfoliosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPortfoliosRequest $request
     *
     * @return ListPortfoliosResponse
     */
    public function listPortfolios($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPortfoliosWithOptions($request, $runtime);
    }

    /**
     * @param ListPrincipalsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPrincipalsResponse
     */
    public function listPrincipalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->portfolioId)) {
            $query['PortfolioId'] = $request->portfolioId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrincipals',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPrincipalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPrincipalsRequest $request
     *
     * @return ListPrincipalsResponse
     */
    public function listPrincipals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPrincipalsWithOptions($request, $runtime);
    }

    /**
     * @param ListProductVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductVersionsResponse
     */
    public function listProductVersionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->productId)) {
            $query['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductVersions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductVersionsRequest $request
     *
     * @return ListProductVersionsResponse
     */
    public function listProductVersions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductVersionsWithOptions($request, $runtime);
    }

    /**
     * @param ListProductsAsAdminRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductsAsAdminResponse
     */
    public function listProductsAsAdminWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $query['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductsAsAdmin',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductsAsAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProductsAsAdminRequest $request
     *
     * @return ListProductsAsAdminResponse
     */
    public function listProductsAsAdmin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsAsAdminWithOptions($request, $runtime);
    }

    /**
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](~~405233~~).
     *   *
     * @param ListProductsAsEndUserRequest $request ListProductsAsEndUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProductsAsEndUserResponse ListProductsAsEndUserResponse
     */
    public function listProductsAsEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProductsAsEndUser',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProductsAsEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](~~405233~~).
     *   *
     * @param ListProductsAsEndUserRequest $request ListProductsAsEndUserRequest
     *
     * @return ListProductsAsEndUserResponse ListProductsAsEndUserResponse
     */
    public function listProductsAsEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsAsEndUserWithOptions($request, $runtime);
    }

    /**
     * @param ListProvisionedProductPlanApproversRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListProvisionedProductPlanApproversResponse
     */
    public function listProvisionedProductPlanApproversWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProvisionedProductPlanApprovers',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProvisionedProductPlanApproversResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProvisionedProductPlanApproversRequest $request
     *
     * @return ListProvisionedProductPlanApproversResponse
     */
    public function listProvisionedProductPlanApprovers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProvisionedProductPlanApproversWithOptions($request, $runtime);
    }

    /**
     * @param ListProvisionedProductPlansRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProvisionedProductPlansResponse
     */
    public function listProvisionedProductPlansWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLevelFilter)) {
            $query['AccessLevelFilter'] = $request->accessLevelFilter;
        }
        if (!Utils::isUnset($request->approvalFilter)) {
            $query['ApprovalFilter'] = $request->approvalFilter;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provisionedProductId)) {
            $query['ProvisionedProductId'] = $request->provisionedProductId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProvisionedProductPlans',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProvisionedProductPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProvisionedProductPlansRequest $request
     *
     * @return ListProvisionedProductPlansResponse
     */
    public function listProvisionedProductPlans($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProvisionedProductPlansWithOptions($request, $runtime);
    }

    /**
     * @param ListProvisionedProductsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProvisionedProductsResponse
     */
    public function listProvisionedProductsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessLevelFilter)) {
            $query['AccessLevelFilter'] = $request->accessLevelFilter;
        }
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListProvisionedProducts',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListProvisionedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListProvisionedProductsRequest $request
     *
     * @return ListProvisionedProductsResponse
     */
    public function listProvisionedProducts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProvisionedProductsWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-09-01',
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
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ListResourcesForTagOptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListResourcesForTagOptionResponse
     */
    public function listResourcesForTagOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListResourcesForTagOption',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListResourcesForTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListResourcesForTagOptionRequest $request
     *
     * @return ListResourcesForTagOptionResponse
     */
    public function listResourcesForTagOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listResourcesForTagOptionWithOptions($request, $runtime);
    }

    /**
     * @param ListTagOptionsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListTagOptionsResponse
     */
    public function listTagOptionsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListTagOptionsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->filters)) {
            $request->filtersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagOptions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagOptionsRequest $request
     *
     * @return ListTagOptionsResponse
     */
    public function listTagOptions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagOptionsWithOptions($request, $runtime);
    }

    /**
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->provisionedProductId)) {
            $query['ProvisionedProductId'] = $request->provisionedProductId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $query['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTasks',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTasksRequest $request
     *
     * @return ListTasksResponse
     */
    public function listTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTasksWithOptions($request, $runtime);
    }

    /**
     * After a product instance is terminated, the product instance is deleted from the product instance list. End users cannot manage the product instance throughout its lifecycle. Proceed with caution.
     *   *
     * @param TerminateProvisionedProductRequest $request TerminateProvisionedProductRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return TerminateProvisionedProductResponse TerminateProvisionedProductResponse
     */
    public function terminateProvisionedProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->provisionedProductId)) {
            $body['ProvisionedProductId'] = $request->provisionedProductId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TerminateProvisionedProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After a product instance is terminated, the product instance is deleted from the product instance list. End users cannot manage the product instance throughout its lifecycle. Proceed with caution.
     *   *
     * @param TerminateProvisionedProductRequest $request TerminateProvisionedProductRequest
     *
     * @return TerminateProvisionedProductResponse TerminateProvisionedProductResponse
     */
    public function terminateProvisionedProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateProvisionedProductWithOptions($request, $runtime);
    }

    /**
     * @param UpdateConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConstraintResponse
     */
    public function updateConstraintWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->constraintId)) {
            $body['ConstraintId'] = $request->constraintId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateConstraint',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateConstraintRequest $request
     *
     * @return UpdateConstraintResponse
     */
    public function updateConstraint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateConstraintWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePortfolioResponse
     */
    public function updatePortfolioWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->portfolioName)) {
            $body['PortfolioName'] = $request->portfolioName;
        }
        if (!Utils::isUnset($request->providerName)) {
            $body['ProviderName'] = $request->providerName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdatePortfolio',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePortfolioRequest $request
     *
     * @return UpdatePortfolioResponse
     */
    public function updatePortfolio($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePortfolioWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productName)) {
            $body['ProductName'] = $request->productName;
        }
        if (!Utils::isUnset($request->providerName)) {
            $body['ProviderName'] = $request->providerName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProductRequest $request
     *
     * @return UpdateProductResponse
     */
    public function updateProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProductVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProductVersionResponse
     */
    public function updateProductVersionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->guidance)) {
            $body['Guidance'] = $request->guidance;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        if (!Utils::isUnset($request->productVersionName)) {
            $body['ProductVersionName'] = $request->productVersionName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProductVersion',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProductVersionRequest $request
     *
     * @return UpdateProductVersionResponse
     */
    public function updateProductVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProductVersionWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProvisionedProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProvisionedProductResponse
     */
    public function updateProvisionedProductWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        if (!Utils::isUnset($request->provisionedProductId)) {
            $body['ProvisionedProductId'] = $request->provisionedProductId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProvisionedProduct',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProvisionedProductRequest $request
     *
     * @return UpdateProvisionedProductResponse
     */
    public function updateProvisionedProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProvisionedProductWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateProvisionedProductPlanResponse
     */
    public function updateProvisionedProductPlanWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->planId)) {
            $body['PlanId'] = $request->planId;
        }
        if (!Utils::isUnset($request->portfolioId)) {
            $body['PortfolioId'] = $request->portfolioId;
        }
        if (!Utils::isUnset($request->productId)) {
            $body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->productVersionId)) {
            $body['ProductVersionId'] = $request->productVersionId;
        }
        if (!Utils::isUnset($request->tags)) {
            $body['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProvisionedProductPlan',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateProvisionedProductPlanRequest $request
     *
     * @return UpdateProvisionedProductPlanResponse
     */
    public function updateProvisionedProductPlan($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProvisionedProductPlanWithOptions($request, $runtime);
    }

    /**
     * @param UpdateTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTagOptionResponse
     */
    public function updateTagOptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->active)) {
            $body['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->tagOptionId)) {
            $body['TagOptionId'] = $request->tagOptionId;
        }
        if (!Utils::isUnset($request->value)) {
            $body['Value'] = $request->value;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTagOption',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTagOptionRequest $request
     *
     * @return UpdateTagOptionResponse
     */
    public function updateTagOption($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTagOptionWithOptions($request, $runtime);
    }
}
