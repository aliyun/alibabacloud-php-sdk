<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\CreateAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\CreateAccountFactoryBaselineResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\DeleteAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\DeleteAccountFactoryBaselineResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountShrinkRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetAccountFactoryBaselineResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\GetEnrolledAccountResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselineItemsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselinesRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListAccountFactoryBaselinesResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEnrolledAccountsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationScoreHistoryResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\RunEvaluationRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\RunEvaluationResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\RunEvaluationShrinkRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Governance extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('governance', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Applies an account baseline to multiple existing resource accounts at a time.
     *
     * @remarks
     * You can call this operation to apply an account baseline to existing resource accounts.
     * Accounts are enrolled in the account factory in asynchronous mode. After a resource account is created, an account baseline is applied to the account. You can call the [GetEnrolledAccount](https://help.aliyun.com/document_detail/609062.html) operation to query the details of the account enrolled in the account factory and check whether the account baseline is applied to the account.
     *
     * @param request - BatchEnrollAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchEnrollAccountsResponse
     *
     * @param BatchEnrollAccountsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchEnrollAccountsResponse
     */
    public function batchEnrollAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accounts) {
            @$query['Accounts'] = $request->accounts;
        }

        if (null !== $request->baselineId) {
            @$query['BaselineId'] = $request->baselineId;
        }

        if (null !== $request->baselineItems) {
            @$query['BaselineItems'] = $request->baselineItems;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchEnrollAccounts',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchEnrollAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies an account baseline to multiple existing resource accounts at a time.
     *
     * @remarks
     * You can call this operation to apply an account baseline to existing resource accounts.
     * Accounts are enrolled in the account factory in asynchronous mode. After a resource account is created, an account baseline is applied to the account. You can call the [GetEnrolledAccount](https://help.aliyun.com/document_detail/609062.html) operation to query the details of the account enrolled in the account factory and check whether the account baseline is applied to the account.
     *
     * @param request - BatchEnrollAccountsRequest
     *
     * @returns BatchEnrollAccountsResponse
     *
     * @param BatchEnrollAccountsRequest $request
     *
     * @return BatchEnrollAccountsResponse
     */
    public function batchEnrollAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEnrollAccountsWithOptions($request, $runtime);
    }

    /**
     * Creates a baseline of the account factory.
     *
     * @param request - CreateAccountFactoryBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAccountFactoryBaselineResponse
     *
     * @param CreateAccountFactoryBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return CreateAccountFactoryBaselineResponse
     */
    public function createAccountFactoryBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baselineItems) {
            @$query['BaselineItems'] = $request->baselineItems;
        }

        if (null !== $request->baselineName) {
            @$query['BaselineName'] = $request->baselineName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAccountFactoryBaseline',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a baseline of the account factory.
     *
     * @param request - CreateAccountFactoryBaselineRequest
     *
     * @returns CreateAccountFactoryBaselineResponse
     *
     * @param CreateAccountFactoryBaselineRequest $request
     *
     * @return CreateAccountFactoryBaselineResponse
     */
    public function createAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * Deletes an account factory baseline.
     *
     * @param request - DeleteAccountFactoryBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAccountFactoryBaselineResponse
     *
     * @param DeleteAccountFactoryBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteAccountFactoryBaselineResponse
     */
    public function deleteAccountFactoryBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baselineId) {
            @$query['BaselineId'] = $request->baselineId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAccountFactoryBaseline',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an account factory baseline.
     *
     * @param request - DeleteAccountFactoryBaselineRequest
     *
     * @returns DeleteAccountFactoryBaselineResponse
     *
     * @param DeleteAccountFactoryBaselineRequest $request
     *
     * @return DeleteAccountFactoryBaselineResponse
     */
    public function deleteAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * Enrolls an account. You can create a new account or manage an existing account in the account factory.
     *
     * @remarks
     * You can call this API operation to create a new account or manage an existing account and apply the account baseline to the account.
     * Accounts are created in asynchronous mode. After you create an account, you can apply the account baseline to the account. You can call the [GetEnrolledAccount API](~~GetEnrolledAccount~~) operation to view the details about the account to obtain the result of applying the account baseline to the account.
     *
     * @param tmpReq - EnrollAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EnrollAccountResponse
     *
     * @param EnrollAccountRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return EnrollAccountResponse
     */
    public function enrollAccountWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new EnrollAccountShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->tag) {
            $request->tagShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }

        $query = [];
        if (null !== $request->accountNamePrefix) {
            @$query['AccountNamePrefix'] = $request->accountNamePrefix;
        }

        if (null !== $request->accountUid) {
            @$query['AccountUid'] = $request->accountUid;
        }

        if (null !== $request->baselineId) {
            @$query['BaselineId'] = $request->baselineId;
        }

        if (null !== $request->baselineItems) {
            @$query['BaselineItems'] = $request->baselineItems;
        }

        if (null !== $request->displayName) {
            @$query['DisplayName'] = $request->displayName;
        }

        if (null !== $request->folderId) {
            @$query['FolderId'] = $request->folderId;
        }

        if (null !== $request->payerAccountUid) {
            @$query['PayerAccountUid'] = $request->payerAccountUid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellAccountType) {
            @$query['ResellAccountType'] = $request->resellAccountType;
        }

        if (null !== $request->tagShrink) {
            @$query['Tag'] = $request->tagShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EnrollAccount',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EnrollAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enrolls an account. You can create a new account or manage an existing account in the account factory.
     *
     * @remarks
     * You can call this API operation to create a new account or manage an existing account and apply the account baseline to the account.
     * Accounts are created in asynchronous mode. After you create an account, you can apply the account baseline to the account. You can call the [GetEnrolledAccount API](~~GetEnrolledAccount~~) operation to view the details about the account to obtain the result of applying the account baseline to the account.
     *
     * @param request - EnrollAccountRequest
     *
     * @returns EnrollAccountResponse
     *
     * @param EnrollAccountRequest $request
     *
     * @return EnrollAccountResponse
     */
    public function enrollAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enrollAccountWithOptions($request, $runtime);
    }

    /**
     * Obtains the details of an account factory baseline.
     *
     * @param request - GetAccountFactoryBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAccountFactoryBaselineResponse
     *
     * @param GetAccountFactoryBaselineRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetAccountFactoryBaselineResponse
     */
    public function getAccountFactoryBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baselineId) {
            @$query['BaselineId'] = $request->baselineId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAccountFactoryBaseline',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the details of an account factory baseline.
     *
     * @param request - GetAccountFactoryBaselineRequest
     *
     * @returns GetAccountFactoryBaselineResponse
     *
     * @param GetAccountFactoryBaselineRequest $request
     *
     * @return GetAccountFactoryBaselineResponse
     */
    public function getAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * Queries the details about an account that is enrolled in the account factory.
     *
     * @param request - GetEnrolledAccountRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetEnrolledAccountResponse
     *
     * @param GetEnrolledAccountRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetEnrolledAccountResponse
     */
    public function getEnrolledAccountWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountUid) {
            @$query['AccountUid'] = $request->accountUid;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetEnrolledAccount',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetEnrolledAccountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details about an account that is enrolled in the account factory.
     *
     * @param request - GetEnrolledAccountRequest
     *
     * @returns GetEnrolledAccountResponse
     *
     * @param GetEnrolledAccountRequest $request
     *
     * @return GetEnrolledAccountResponse
     */
    public function getEnrolledAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnrolledAccountWithOptions($request, $runtime);
    }

    /**
     * Queries a list of baseline items that are supported by the account factory of Cloud Governance Center (CGC).
     *
     * @param request - ListAccountFactoryBaselineItemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountFactoryBaselineItemsResponse
     *
     * @param ListAccountFactoryBaselineItemsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ListAccountFactoryBaselineItemsResponse
     */
    public function listAccountFactoryBaselineItemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->names) {
            @$query['Names'] = $request->names;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->versions) {
            @$query['Versions'] = $request->versions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccountFactoryBaselineItems',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountFactoryBaselineItemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of baseline items that are supported by the account factory of Cloud Governance Center (CGC).
     *
     * @param request - ListAccountFactoryBaselineItemsRequest
     *
     * @returns ListAccountFactoryBaselineItemsResponse
     *
     * @param ListAccountFactoryBaselineItemsRequest $request
     *
     * @return ListAccountFactoryBaselineItemsResponse
     */
    public function listAccountFactoryBaselineItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountFactoryBaselineItemsWithOptions($request, $runtime);
    }

    /**
     * Obtains a list of baselines in the account factory.
     *
     * @param request - ListAccountFactoryBaselinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAccountFactoryBaselinesResponse
     *
     * @param ListAccountFactoryBaselinesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListAccountFactoryBaselinesResponse
     */
    public function listAccountFactoryBaselinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAccountFactoryBaselines',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAccountFactoryBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains a list of baselines in the account factory.
     *
     * @param request - ListAccountFactoryBaselinesRequest
     *
     * @returns ListAccountFactoryBaselinesResponse
     *
     * @param ListAccountFactoryBaselinesRequest $request
     *
     * @return ListAccountFactoryBaselinesResponse
     */
    public function listAccountFactoryBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountFactoryBaselinesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of accounts that are enrolled in the account factory.
     *
     * @param request - ListEnrolledAccountsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEnrolledAccountsResponse
     *
     * @param ListEnrolledAccountsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListEnrolledAccountsResponse
     */
    public function listEnrolledAccountsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEnrolledAccounts',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEnrolledAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of accounts that are enrolled in the account factory.
     *
     * @param request - ListEnrolledAccountsRequest
     *
     * @returns ListEnrolledAccountsResponse
     *
     * @param ListEnrolledAccountsRequest $request
     *
     * @return ListEnrolledAccountsResponse
     */
    public function listEnrolledAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnrolledAccountsWithOptions($request, $runtime);
    }

    /**
     * Queries all available information about check items in a governance maturity check, including the name, ID, description, stage, resource metadata, and fixing guide.
     *
     * @param request - ListEvaluationMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationMetadataResponse
     *
     * @param ListEvaluationMetadataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListEvaluationMetadataResponse
     */
    public function listEvaluationMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->lensCode) {
            @$query['LensCode'] = $request->lensCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->topicCode) {
            @$query['TopicCode'] = $request->topicCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationMetadata',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEvaluationMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all available information about check items in a governance maturity check, including the name, ID, description, stage, resource metadata, and fixing guide.
     *
     * @param request - ListEvaluationMetadataRequest
     *
     * @returns ListEvaluationMetadataResponse
     *
     * @param ListEvaluationMetadataRequest $request
     *
     * @return ListEvaluationMetadataResponse
     */
    public function listEvaluationMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationMetadataWithOptions($request, $runtime);
    }

    /**
     * Queries the non-compliant resource information of a check item, including the name, ID, category, type, region, and related metadata of non-compliant resources.
     *
     * @param request - ListEvaluationMetricDetailsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationMetricDetailsResponse
     *
     * @param ListEvaluationMetricDetailsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListEvaluationMetricDetailsResponse
     */
    public function listEvaluationMetricDetailsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationMetricDetails',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEvaluationMetricDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the non-compliant resource information of a check item, including the name, ID, category, type, region, and related metadata of non-compliant resources.
     *
     * @param request - ListEvaluationMetricDetailsRequest
     *
     * @returns ListEvaluationMetricDetailsResponse
     *
     * @param ListEvaluationMetricDetailsRequest $request
     *
     * @return ListEvaluationMetricDetailsResponse
     */
    public function listEvaluationMetricDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationMetricDetailsWithOptions($request, $runtime);
    }

    /**
     * Queries the result and status of a governance check.
     *
     * @param request - ListEvaluationResultsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationResultsResponse
     *
     * @param ListEvaluationResultsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListEvaluationResultsResponse
     */
    public function listEvaluationResultsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->filters) {
            @$query['Filters'] = $request->filters;
        }

        if (null !== $request->lensCode) {
            @$query['LensCode'] = $request->lensCode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->topicCode) {
            @$query['TopicCode'] = $request->topicCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationResults',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the result and status of a governance check.
     *
     * @param request - ListEvaluationResultsRequest
     *
     * @returns ListEvaluationResultsResponse
     *
     * @param ListEvaluationResultsRequest $request
     *
     * @return ListEvaluationResultsResponse
     */
    public function listEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * Queries the historical scores of a governance maturity check.
     *
     * @param request - ListEvaluationScoreHistoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListEvaluationScoreHistoryResponse
     *
     * @param ListEvaluationScoreHistoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListEvaluationScoreHistoryResponse
     */
    public function listEvaluationScoreHistoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListEvaluationScoreHistory',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListEvaluationScoreHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the historical scores of a governance maturity check.
     *
     * @param request - ListEvaluationScoreHistoryRequest
     *
     * @returns ListEvaluationScoreHistoryResponse
     *
     * @param ListEvaluationScoreHistoryRequest $request
     *
     * @return ListEvaluationScoreHistoryResponse
     */
    public function listEvaluationScoreHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationScoreHistoryWithOptions($request, $runtime);
    }

    /**
     * Performs a governance maturity check.
     *
     * @param tmpReq - RunEvaluationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunEvaluationResponse
     *
     * @param RunEvaluationRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return RunEvaluationResponse
     */
    public function runEvaluationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunEvaluationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->metricIds) {
            $request->metricIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->metricIds, 'MetricIds', 'json');
        }

        $query = [];
        if (null !== $request->accountId) {
            @$query['AccountId'] = $request->accountId;
        }

        if (null !== $request->metricIdsShrink) {
            @$query['MetricIds'] = $request->metricIdsShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunEvaluation',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a governance maturity check.
     *
     * @param request - RunEvaluationRequest
     *
     * @returns RunEvaluationResponse
     *
     * @param RunEvaluationRequest $request
     *
     * @return RunEvaluationResponse
     */
    public function runEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runEvaluationWithOptions($request, $runtime);
    }

    /**
     * Updates a baseline of the account factory.
     *
     * @param request - UpdateAccountFactoryBaselineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAccountFactoryBaselineResponse
     *
     * @param UpdateAccountFactoryBaselineRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateAccountFactoryBaselineResponse
     */
    public function updateAccountFactoryBaselineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baselineId) {
            @$query['BaselineId'] = $request->baselineId;
        }

        if (null !== $request->baselineItems) {
            @$query['BaselineItems'] = $request->baselineItems;
        }

        if (null !== $request->baselineName) {
            @$query['BaselineName'] = $request->baselineName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateAccountFactoryBaseline',
            'version' => '2021-01-20',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates a baseline of the account factory.
     *
     * @param request - UpdateAccountFactoryBaselineRequest
     *
     * @returns UpdateAccountFactoryBaselineResponse
     *
     * @param UpdateAccountFactoryBaselineRequest $request
     *
     * @return UpdateAccountFactoryBaselineResponse
     */
    public function updateAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountFactoryBaselineWithOptions($request, $runtime);
    }
}
