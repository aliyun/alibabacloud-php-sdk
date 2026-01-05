<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Reviews a plan.
     *
     * @param request - ApproveProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveProvisionedProductPlanResponse
     *
     * @param ApproveProvisionedProductPlanRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ApproveProvisionedProductPlanResponse
     */
    public function approveProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->approvalAction) {
            @$body['ApprovalAction'] = $request->approvalAction;
        }

        if (null !== $request->comment) {
            @$body['Comment'] = $request->comment;
        }

        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ApproveProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reviews a plan.
     *
     * @param request - ApproveProvisionedProductPlanRequest
     *
     * @returns ApproveProvisionedProductPlanResponse
     *
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
     * 将产品组合授权给某个RAM实体.
     *
     * @param request - AssociatePrincipalWithPortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociatePrincipalWithPortfolioResponse
     *
     * @param AssociatePrincipalWithPortfolioRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AssociatePrincipalWithPortfolioResponse
     */
    public function associatePrincipalWithPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->principalId) {
            @$body['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociatePrincipalWithPortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociatePrincipalWithPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 将产品组合授权给某个RAM实体.
     *
     * @param request - AssociatePrincipalWithPortfolioRequest
     *
     * @returns AssociatePrincipalWithPortfolioResponse
     *
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
     * Adds a product to a product portfolio.
     *
     * @param request - AssociateProductWithPortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateProductWithPortfolioResponse
     *
     * @param AssociateProductWithPortfolioRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AssociateProductWithPortfolioResponse
     */
    public function associateProductWithPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateProductWithPortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateProductWithPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a product to a product portfolio.
     *
     * @param request - AssociateProductWithPortfolioRequest
     *
     * @returns AssociateProductWithPortfolioResponse
     *
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
     * Associates the tag option with a resource.
     *
     * @param request - AssociateTagOptionWithResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateTagOptionWithResourceResponse
     *
     * @param AssociateTagOptionWithResourceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return AssociateTagOptionWithResourceResponse
     */
    public function associateTagOptionWithResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tagOptionId) {
            @$body['TagOptionId'] = $request->tagOptionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'AssociateTagOptionWithResource',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateTagOptionWithResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates the tag option with a resource.
     *
     * @param request - AssociateTagOptionWithResourceRequest
     *
     * @returns AssociateTagOptionWithResourceResponse
     *
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
     * Cancels a plan.
     *
     * @param request - CancelProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelProvisionedProductPlanResponse
     *
     * @param CancelProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CancelProvisionedProductPlanResponse
     */
    public function cancelProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CancelProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a plan.
     *
     * @param request - CancelProvisionedProductPlanRequest
     *
     * @returns CancelProvisionedProductPlanResponse
     *
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
     * Replicates a product.
     *
     * @param request - CopyProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyProductResponse
     *
     * @param CopyProductRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CopyProductResponse
     */
    public function copyProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->sourceProductArn) {
            @$body['SourceProductArn'] = $request->sourceProductArn;
        }

        if (null !== $request->targetProductName) {
            @$body['TargetProductName'] = $request->targetProductName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CopyProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replicates a product.
     *
     * @param request - CopyProductRequest
     *
     * @returns CopyProductResponse
     *
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
     * Creates a constraint.
     *
     * @param request - CreateConstraintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConstraintResponse
     *
     * @param CreateConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateConstraintResponse
     */
    public function createConstraintWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->constraintType) {
            @$body['ConstraintType'] = $request->constraintType;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateConstraint',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a constraint.
     *
     * @param request - CreateConstraintRequest
     *
     * @returns CreateConstraintResponse
     *
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
     * Creates a product portfolio.
     *
     * @param request - CreatePortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePortfolioResponse
     *
     * @param CreatePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreatePortfolioResponse
     */
    public function createPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->portfolioName) {
            @$body['PortfolioName'] = $request->portfolioName;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreatePortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a product portfolio.
     *
     * @param request - CreatePortfolioRequest
     *
     * @returns CreatePortfolioResponse
     *
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
     * Creates a product.
     *
     * @remarks
     * Before you call the CreateProduct operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *
     * @param tmpReq - CreateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProductResponse
     */
    public function createProductWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateProductShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->productVersionParameters) {
            $request->productVersionParametersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->productVersionParameters, 'ProductVersionParameters', 'json');
        }

        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->productName) {
            @$body['ProductName'] = $request->productName;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->productVersionParametersShrink) {
            @$body['ProductVersionParameters'] = $request->productVersionParametersShrink;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a product.
     *
     * @remarks
     * Before you call the CreateProduct operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *
     * @param request - CreateProductRequest
     *
     * @returns CreateProductResponse
     *
     * @param CreateProductRequest $request
     *
     * @return CreateProductResponse
     */
    public function createProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductWithOptions($request, $runtime);
    }

    /**
     * Creates a product version.
     *
     * @remarks
     * Before you call the CreateProductVersion operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *
     * @param request - CreateProductVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProductVersionResponse
     *
     * @param CreateProductVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateProductVersionResponse
     */
    public function createProductVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->active) {
            @$body['Active'] = $request->active;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->guidance) {
            @$body['Guidance'] = $request->guidance;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionName) {
            @$body['ProductVersionName'] = $request->productVersionName;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        if (null !== $request->templateUrl) {
            @$body['TemplateUrl'] = $request->templateUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProductVersion',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a product version.
     *
     * @remarks
     * Before you call the CreateProductVersion operation, you must call the [CreateTemplate](~~CreateTemplate~~) operation to create a template.
     *
     * @param request - CreateProductVersionRequest
     *
     * @returns CreateProductVersionResponse
     *
     * @param CreateProductVersionRequest $request
     *
     * @return CreateProductVersionResponse
     */
    public function createProductVersion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProductVersionWithOptions($request, $runtime);
    }

    /**
     * Creates a plan.
     *
     * @param request - CreateProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateProvisionedProductPlanResponse
     *
     * @param CreateProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateProvisionedProductPlanResponse
     */
    public function createProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->operationType) {
            @$body['OperationType'] = $request->operationType;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->planName) {
            @$body['PlanName'] = $request->planName;
        }

        if (null !== $request->planType) {
            @$body['PlanType'] = $request->planType;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        if (null !== $request->provisionedProductName) {
            @$body['ProvisionedProductName'] = $request->provisionedProductName;
        }

        if (null !== $request->stackRegionId) {
            @$body['StackRegionId'] = $request->stackRegionId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a plan.
     *
     * @param request - CreateProvisionedProductPlanRequest
     *
     * @returns CreateProvisionedProductPlanResponse
     *
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
     * Creates a tag option.
     *
     * @param request - CreateTagOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTagOptionResponse
     *
     * @param CreateTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateTagOptionResponse
     */
    public function createTagOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->key) {
            @$body['Key'] = $request->key;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTagOption',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a tag option.
     *
     * @param request - CreateTagOptionRequest
     *
     * @returns CreateTagOptionResponse
     *
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
     * Creates a template. Service Catalog saves the template based on the parameters that you specify and returns the URL of the template.
     *
     * @param request - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->templateBody) {
            @$body['TemplateBody'] = $request->templateBody;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        if (null !== $request->terraformVariables) {
            @$body['TerraformVariables'] = $request->terraformVariables;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a template. Service Catalog saves the template based on the parameters that you specify and returns the URL of the template.
     *
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
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
     * Deletes a constraint.
     *
     * @param request - DeleteConstraintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConstraintResponse
     *
     * @param DeleteConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteConstraintResponse
     */
    public function deleteConstraintWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->constraintId) {
            @$body['ConstraintId'] = $request->constraintId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteConstraint',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a constraint.
     *
     * @param request - DeleteConstraintRequest
     *
     * @returns DeleteConstraintResponse
     *
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
     * Deletes a product portfolio.
     *
     * @param request - DeletePortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePortfolioResponse
     *
     * @param DeletePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePortfolioResponse
     */
    public function deletePortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeletePortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a product portfolio.
     *
     * @param request - DeletePortfolioRequest
     *
     * @returns DeletePortfolioResponse
     *
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
     * Deletes a product.
     *
     * @param request - DeleteProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductResponse
     *
     * @param DeleteProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProductResponse
     */
    public function deleteProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a product.
     *
     * @param request - DeleteProductRequest
     *
     * @returns DeleteProductResponse
     *
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
     * Deletes a product version.
     *
     * @param request - DeleteProductVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProductVersionResponse
     *
     * @param DeleteProductVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteProductVersionResponse
     */
    public function deleteProductVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProductVersion',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a product version.
     *
     * @param request - DeleteProductVersionRequest
     *
     * @returns DeleteProductVersionResponse
     *
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
     * Deletes a plan.
     *
     * @param request - DeleteProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteProvisionedProductPlanResponse
     *
     * @param DeleteProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteProvisionedProductPlanResponse
     */
    public function deleteProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a plan.
     *
     * @param request - DeleteProvisionedProductPlanRequest
     *
     * @returns DeleteProvisionedProductPlanResponse
     *
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
     * Deletes a tag option.
     *
     * @param request - DeleteTagOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTagOptionResponse
     *
     * @param DeleteTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTagOptionResponse
     */
    public function deleteTagOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->tagOptionId) {
            @$body['TagOptionId'] = $request->tagOptionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTagOption',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a tag option.
     *
     * @param request - DeleteTagOptionRequest
     *
     * @returns DeleteTagOptionResponse
     *
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
     * Disassociates a tag option from a resource.
     *
     * @param request - DisAssociateTagOptionFromResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisAssociateTagOptionFromResourceResponse
     *
     * @param DisAssociateTagOptionFromResourceRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DisAssociateTagOptionFromResourceResponse
     */
    public function disAssociateTagOptionFromResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->resourceId) {
            @$body['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->tagOptionId) {
            @$body['TagOptionId'] = $request->tagOptionId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisAssociateTagOptionFromResource',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisAssociateTagOptionFromResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a tag option from a resource.
     *
     * @param request - DisAssociateTagOptionFromResourceRequest
     *
     * @returns DisAssociateTagOptionFromResourceResponse
     *
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
     * Revokes the permissions to access a product portfolio.
     *
     * @param request - DisassociatePrincipalFromPortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociatePrincipalFromPortfolioResponse
     *
     * @param DisassociatePrincipalFromPortfolioRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DisassociatePrincipalFromPortfolioResponse
     */
    public function disassociatePrincipalFromPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->principalId) {
            @$body['PrincipalId'] = $request->principalId;
        }

        if (null !== $request->principalType) {
            @$body['PrincipalType'] = $request->principalType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisassociatePrincipalFromPortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociatePrincipalFromPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the permissions to access a product portfolio.
     *
     * @param request - DisassociatePrincipalFromPortfolioRequest
     *
     * @returns DisassociatePrincipalFromPortfolioResponse
     *
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
     * Removes a product from the product portfolio.
     *
     * @param request - DisassociateProductFromPortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateProductFromPortfolioResponse
     *
     * @param DisassociateProductFromPortfolioRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DisassociateProductFromPortfolioResponse
     */
    public function disassociateProductFromPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DisassociateProductFromPortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateProductFromPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a product from the product portfolio.
     *
     * @param request - DisassociateProductFromPortfolioRequest
     *
     * @returns DisassociateProductFromPortfolioResponse
     *
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
     * Runs a plan.
     *
     * @param request - ExecuteProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExecuteProvisionedProductPlanResponse
     *
     * @param ExecuteProvisionedProductPlanRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ExecuteProvisionedProductPlanResponse
     */
    public function executeProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExecuteProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExecuteProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a plan.
     *
     * @param request - ExecuteProvisionedProductPlanRequest
     *
     * @returns ExecuteProvisionedProductPlanResponse
     *
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
     * Queries the information about a constraint.
     *
     * @param request - GetConstraintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConstraintResponse
     *
     * @param GetConstraintRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetConstraintResponse
     */
    public function getConstraintWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->constraintId) {
            @$query['ConstraintId'] = $request->constraintId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConstraint',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a constraint.
     *
     * @param request - GetConstraintRequest
     *
     * @returns GetConstraintResponse
     *
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
     * Queries the information about a product portfolio.
     *
     * @param request - GetPortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetPortfolioResponse
     *
     * @param GetPortfolioRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetPortfolioResponse
     */
    public function getPortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->portfolioId) {
            @$query['PortfolioId'] = $request->portfolioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetPortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetPortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a product portfolio.
     *
     * @param request - GetPortfolioRequest
     *
     * @returns GetPortfolioResponse
     *
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
     * Queries the information about a product as the administrator.
     *
     * @param request - GetProductAsAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductAsAdminResponse
     *
     * @param GetProductAsAdminRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProductAsAdminResponse
     */
    public function getProductAsAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductAsAdmin',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductAsAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a product as the administrator.
     *
     * @param request - GetProductAsAdminRequest
     *
     * @returns GetProductAsAdminResponse
     *
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
     * Queries the information about a product as a user.
     *
     * @remarks
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](https://help.aliyun.com/document_detail/405233.html).
     *
     * @param request - GetProductAsEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductAsEndUserResponse
     *
     * @param GetProductAsEndUserRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetProductAsEndUserResponse
     */
    public function getProductAsEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductAsEndUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductAsEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a product as a user.
     *
     * @remarks
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](https://help.aliyun.com/document_detail/405233.html).
     *
     * @param request - GetProductAsEndUserRequest
     *
     * @returns GetProductAsEndUserResponse
     *
     * @param GetProductAsEndUserRequest $request
     *
     * @return GetProductAsEndUserResponse
     */
    public function getProductAsEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProductAsEndUserWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a product version.
     *
     * @param request - GetProductVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProductVersionResponse
     *
     * @param GetProductVersionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetProductVersionResponse
     */
    public function getProductVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productVersionId) {
            @$query['ProductVersionId'] = $request->productVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProductVersion',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a product version.
     *
     * @param request - GetProductVersionRequest
     *
     * @returns GetProductVersionResponse
     *
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
     * Queries the information about a product instance.
     *
     * @param request - GetProvisionedProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProvisionedProductResponse
     *
     * @param GetProvisionedProductRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetProvisionedProductResponse
     */
    public function getProvisionedProductWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->provisionedProductId) {
            @$query['ProvisionedProductId'] = $request->provisionedProductId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetProvisionedProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a product instance.
     *
     * @param request - GetProvisionedProductRequest
     *
     * @returns GetProvisionedProductResponse
     *
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
     * Queries the details of a plan.
     *
     * @param request - GetProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetProvisionedProductPlanResponse
     *
     * @param GetProvisionedProductPlanRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetProvisionedProductPlanResponse
     */
    public function getProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a plan.
     *
     * @param request - GetProvisionedProductPlanRequest
     *
     * @returns GetProvisionedProductPlanResponse
     *
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
     * Queries the details of a tag option.
     *
     * @param request - GetTagOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTagOptionResponse
     *
     * @param GetTagOptionRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetTagOptionResponse
     */
    public function getTagOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTagOption',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a tag option.
     *
     * @param request - GetTagOptionRequest
     *
     * @returns GetTagOptionResponse
     *
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
     * Queries the information about a task.
     *
     * @param request - GetTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTaskResponse
     *
     * @param GetTaskRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return GetTaskResponse
     */
    public function getTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->taskId) {
            @$body['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetTask',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a task.
     *
     * @param request - GetTaskRequest
     *
     * @returns GetTaskResponse
     *
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
     * Queries the details of a template.
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionId) {
            @$query['ProductVersionId'] = $request->productVersionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetTemplate',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a template.
     *
     * @param request - GetTemplateRequest
     *
     * @returns GetTemplateResponse
     *
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
     * Launches a product.
     *
     * @param request - LaunchProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LaunchProductResponse
     *
     * @param LaunchProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return LaunchProductResponse
     */
    public function launchProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        if (null !== $request->provisionedProductName) {
            @$body['ProvisionedProductName'] = $request->provisionedProductName;
        }

        if (null !== $request->stackRegionId) {
            @$body['StackRegionId'] = $request->stackRegionId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'LaunchProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LaunchProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Launches a product.
     *
     * @param request - LaunchProductRequest
     *
     * @returns LaunchProductResponse
     *
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
     * Queries launch options.
     *
     * @param request - ListLaunchOptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLaunchOptionsResponse
     *
     * @param ListLaunchOptionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListLaunchOptionsResponse
     */
    public function listLaunchOptionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLaunchOptions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLaunchOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries launch options.
     *
     * @param request - ListLaunchOptionsRequest
     *
     * @returns ListLaunchOptionsResponse
     *
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
     * The number of entries returned per page.
     *
     * @param request - ListPortfoliosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPortfoliosResponse
     *
     * @param ListPortfoliosRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPortfoliosResponse
     */
    public function listPortfoliosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPortfolios',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPortfoliosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The number of entries returned per page.
     *
     * @param request - ListPortfoliosRequest
     *
     * @returns ListPortfoliosResponse
     *
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
     * Queries the Resource Access Management (RAM) users and RAM roles that are granted the permissions to access a product portfolio.
     *
     * @param request - ListPrincipalsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPrincipalsResponse
     *
     * @param ListPrincipalsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPrincipalsResponse
     */
    public function listPrincipalsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->portfolioId) {
            @$query['PortfolioId'] = $request->portfolioId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPrincipals',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPrincipalsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Resource Access Management (RAM) users and RAM roles that are granted the permissions to access a product portfolio.
     *
     * @param request - ListPrincipalsRequest
     *
     * @returns ListPrincipalsResponse
     *
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
     * Queries the versions of a product.
     *
     * @param request - ListProductVersionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductVersionsResponse
     *
     * @param ListProductVersionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductVersionsResponse
     */
    public function listProductVersionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductVersions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductVersionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the versions of a product.
     *
     * @param request - ListProductVersionsRequest
     *
     * @returns ListProductVersionsResponse
     *
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
     * Queries products as an administrator.
     *
     * @param request - ListProductsAsAdminRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsAsAdminResponse
     *
     * @param ListProductsAsAdminRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListProductsAsAdminResponse
     */
    public function listProductsAsAdminWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->portfolioId) {
            @$query['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductsAsAdmin',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductsAsAdminResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries products as an administrator.
     *
     * @param request - ListProductsAsAdminRequest
     *
     * @returns ListProductsAsAdminResponse
     *
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
     * Queries products as a user.
     *
     * @remarks
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](https://help.aliyun.com/document_detail/405233.html).
     *
     * @param request - ListProductsAsEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductsAsEndUserResponse
     *
     * @param ListProductsAsEndUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListProductsAsEndUserResponse
     */
    public function listProductsAsEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProductsAsEndUser',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductsAsEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries products as a user.
     *
     * @remarks
     * Make sure that you are granted the permissions to manage relevant products as a user by an administrator. For more information, see [Manage access permissions](https://help.aliyun.com/document_detail/405233.html).
     *
     * @param request - ListProductsAsEndUserRequest
     *
     * @returns ListProductsAsEndUserResponse
     *
     * @param ListProductsAsEndUserRequest $request
     *
     * @return ListProductsAsEndUserResponse
     */
    public function listProductsAsEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductsAsEndUserWithOptions($request, $runtime);
    }

    /**
     * Queries a list of plan reviewers.
     *
     * @param request - ListProvisionedProductPlanApproversRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProvisionedProductPlanApproversResponse
     *
     * @param ListProvisionedProductPlanApproversRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return ListProvisionedProductPlanApproversResponse
     */
    public function listProvisionedProductPlanApproversWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProvisionedProductPlanApprovers',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProvisionedProductPlanApproversResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of plan reviewers.
     *
     * @param request - ListProvisionedProductPlanApproversRequest
     *
     * @returns ListProvisionedProductPlanApproversResponse
     *
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
     * Queries a list of plans. You can query plans from the end user dimension or from the review dimension.
     *
     * @param request - ListProvisionedProductPlansRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProvisionedProductPlansResponse
     *
     * @param ListProvisionedProductPlansRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListProvisionedProductPlansResponse
     */
    public function listProvisionedProductPlansWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLevelFilter) {
            @$query['AccessLevelFilter'] = $request->accessLevelFilter;
        }

        if (null !== $request->approvalFilter) {
            @$query['ApprovalFilter'] = $request->approvalFilter;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->provisionedProductId) {
            @$query['ProvisionedProductId'] = $request->provisionedProductId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProvisionedProductPlans',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProvisionedProductPlansResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of plans. You can query plans from the end user dimension or from the review dimension.
     *
     * @param request - ListProvisionedProductPlansRequest
     *
     * @returns ListProvisionedProductPlansResponse
     *
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
     * Queries product instances.
     *
     * @param request - ListProvisionedProductsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProvisionedProductsResponse
     *
     * @param ListProvisionedProductsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListProvisionedProductsResponse
     */
    public function listProvisionedProductsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessLevelFilter) {
            @$query['AccessLevelFilter'] = $request->accessLevelFilter;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListProvisionedProducts',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProvisionedProductsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries product instances.
     *
     * @param request - ListProvisionedProductsRequest
     *
     * @returns ListProvisionedProductsResponse
     *
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
     * Queries regions.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries regions.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * Queries the resources that are associated with a tag option.
     *
     * @param request - ListResourcesForTagOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListResourcesForTagOptionResponse
     *
     * @param ListResourcesForTagOptionRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListResourcesForTagOptionResponse
     */
    public function listResourcesForTagOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListResourcesForTagOption',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListResourcesForTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources that are associated with a tag option.
     *
     * @param request - ListResourcesForTagOptionRequest
     *
     * @returns ListResourcesForTagOptionResponse
     *
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
     * Queries a list of tag options.
     *
     * @param tmpReq - ListTagOptionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagOptionsResponse
     *
     * @param ListTagOptionsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return ListTagOptionsResponse
     */
    public function listTagOptionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListTagOptionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->filters) {
            $request->filtersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->filters, 'Filters', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagOptions',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagOptionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of tag options.
     *
     * @param request - ListTagOptionsRequest
     *
     * @returns ListTagOptionsResponse
     *
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
     * The page number of the returned page.
     *
     * @param request - ListTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTasksResponse
     *
     * @param ListTasksRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListTasksResponse
     */
    public function listTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->provisionedProductId) {
            @$query['ProvisionedProductId'] = $request->provisionedProductId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTasks',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The page number of the returned page.
     *
     * @param request - ListTasksRequest
     *
     * @returns ListTasksResponse
     *
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
     * Terminates a product instance.
     *
     * @remarks
     * After a product instance is terminated, the product instance is deleted from the product instance list. End users cannot manage the product instance throughout its lifecycle. Proceed with caution.
     *
     * @param request - TerminateProvisionedProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TerminateProvisionedProductResponse
     *
     * @param TerminateProvisionedProductRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return TerminateProvisionedProductResponse
     */
    public function terminateProvisionedProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->provisionedProductId) {
            @$body['ProvisionedProductId'] = $request->provisionedProductId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'TerminateProvisionedProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TerminateProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Terminates a product instance.
     *
     * @remarks
     * After a product instance is terminated, the product instance is deleted from the product instance list. End users cannot manage the product instance throughout its lifecycle. Proceed with caution.
     *
     * @param request - TerminateProvisionedProductRequest
     *
     * @returns TerminateProvisionedProductResponse
     *
     * @param TerminateProvisionedProductRequest $request
     *
     * @return TerminateProvisionedProductResponse
     */
    public function terminateProvisionedProduct($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateProvisionedProductWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a constraint.
     *
     * @param request - UpdateConstraintRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateConstraintResponse
     *
     * @param UpdateConstraintRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateConstraintResponse
     */
    public function updateConstraintWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        if (null !== $request->constraintId) {
            @$body['ConstraintId'] = $request->constraintId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateConstraint',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateConstraintResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a constraint.
     *
     * @param request - UpdateConstraintRequest
     *
     * @returns UpdateConstraintResponse
     *
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
     * The ID of the product portfolio.
     *
     * @param request - UpdatePortfolioRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdatePortfolioResponse
     *
     * @param UpdatePortfolioRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdatePortfolioResponse
     */
    public function updatePortfolioWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->portfolioName) {
            @$body['PortfolioName'] = $request->portfolioName;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdatePortfolio',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdatePortfolioResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the product portfolio.
     *
     * @param request - UpdatePortfolioRequest
     *
     * @returns UpdatePortfolioResponse
     *
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
     * The ID of the product.
     *
     * @param request - UpdateProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductResponse
     *
     * @param UpdateProductRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProductResponse
     */
    public function updateProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productName) {
            @$body['ProductName'] = $request->productName;
        }

        if (null !== $request->providerName) {
            @$body['ProviderName'] = $request->providerName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the product.
     *
     * @param request - UpdateProductRequest
     *
     * @returns UpdateProductResponse
     *
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
     * Updates the information about a product version.
     *
     * @param request - UpdateProductVersionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProductVersionResponse
     *
     * @param UpdateProductVersionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateProductVersionResponse
     */
    public function updateProductVersionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->active) {
            @$body['Active'] = $request->active;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->guidance) {
            @$body['Guidance'] = $request->guidance;
        }

        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        if (null !== $request->productVersionName) {
            @$body['ProductVersionName'] = $request->productVersionName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProductVersion',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProductVersionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a product version.
     *
     * @param request - UpdateProductVersionRequest
     *
     * @returns UpdateProductVersionResponse
     *
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
     * Updates the information about a product instance.
     *
     * @param request - UpdateProvisionedProductRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProvisionedProductResponse
     *
     * @param UpdateProvisionedProductRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateProvisionedProductResponse
     */
    public function updateProvisionedProductWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        if (null !== $request->provisionedProductId) {
            @$body['ProvisionedProductId'] = $request->provisionedProductId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProvisionedProduct',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProvisionedProductResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the information about a product instance.
     *
     * @param request - UpdateProvisionedProductRequest
     *
     * @returns UpdateProvisionedProductResponse
     *
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
     * Updates a plan.
     *
     * @param request - UpdateProvisionedProductPlanRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateProvisionedProductPlanResponse
     *
     * @param UpdateProvisionedProductPlanRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateProvisionedProductPlanResponse
     */
    public function updateProvisionedProductPlanWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->planId) {
            @$body['PlanId'] = $request->planId;
        }

        if (null !== $request->portfolioId) {
            @$body['PortfolioId'] = $request->portfolioId;
        }

        if (null !== $request->productId) {
            @$body['ProductId'] = $request->productId;
        }

        if (null !== $request->productVersionId) {
            @$body['ProductVersionId'] = $request->productVersionId;
        }

        if (null !== $request->tags) {
            @$body['Tags'] = $request->tags;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateProvisionedProductPlan',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateProvisionedProductPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a plan.
     *
     * @param request - UpdateProvisionedProductPlanRequest
     *
     * @returns UpdateProvisionedProductPlanResponse
     *
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
     * Updates the tag option.
     *
     * @param request - UpdateTagOptionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateTagOptionResponse
     *
     * @param UpdateTagOptionRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateTagOptionResponse
     */
    public function updateTagOptionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->active) {
            @$body['Active'] = $request->active;
        }

        if (null !== $request->tagOptionId) {
            @$body['TagOptionId'] = $request->tagOptionId;
        }

        if (null !== $request->value) {
            @$body['Value'] = $request->value;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateTagOption',
            'version' => '2021-09-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateTagOptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the tag option.
     *
     * @param request - UpdateTagOptionRequest
     *
     * @returns UpdateTagOptionResponse
     *
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
