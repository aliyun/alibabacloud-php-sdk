<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\BatchEnrollAccountsResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\CreateAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\CreateAccountFactoryBaselineResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\DeleteAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\DeleteAccountFactoryBaselineResponse;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\EnrollAccountResponse;
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
use AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineRequest;
use AlibabaCloud\SDK\Governance\V20210120\Models\UpdateAccountFactoryBaselineResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\GatewayPop\Client;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Governance extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_productId    = 'governance';
        $gatewayClient       = new Client();
        $this->_spi          = $gatewayClient;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 账号工厂批量注册账号
     *  *
     * @param BatchEnrollAccountsRequest $request BatchEnrollAccountsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchEnrollAccountsResponse BatchEnrollAccountsResponse
     */
    public function batchEnrollAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accounts)) {
            $query['Accounts'] = $request->accounts;
        }
        if (!Utils::isUnset($request->baselineId)) {
            $query['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->baselineItems)) {
            $query['BaselineItems'] = $request->baselineItems;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchEnrollAccounts',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchEnrollAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchEnrollAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 账号工厂批量注册账号
     *  *
     * @param BatchEnrollAccountsRequest $request BatchEnrollAccountsRequest
     *
     * @return BatchEnrollAccountsResponse BatchEnrollAccountsResponse
     */
    public function batchEnrollAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEnrollAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 创建账号工厂基线
     *  *
     * @param CreateAccountFactoryBaselineRequest $request CreateAccountFactoryBaselineRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAccountFactoryBaselineResponse CreateAccountFactoryBaselineResponse
     */
    public function createAccountFactoryBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineItems)) {
            $query['BaselineItems'] = $request->baselineItems;
        }
        if (!Utils::isUnset($request->baselineName)) {
            $query['BaselineName'] = $request->baselineName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAccountFactoryBaseline',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAccountFactoryBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建账号工厂基线
     *  *
     * @param CreateAccountFactoryBaselineRequest $request CreateAccountFactoryBaselineRequest
     *
     * @return CreateAccountFactoryBaselineResponse CreateAccountFactoryBaselineResponse
     */
    public function createAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary 删除账号工厂基线
     *  *
     * @param DeleteAccountFactoryBaselineRequest $request DeleteAccountFactoryBaselineRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAccountFactoryBaselineResponse DeleteAccountFactoryBaselineResponse
     */
    public function deleteAccountFactoryBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineId)) {
            $query['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAccountFactoryBaseline',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAccountFactoryBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除账号工厂基线
     *  *
     * @param DeleteAccountFactoryBaselineRequest $request DeleteAccountFactoryBaselineRequest
     *
     * @return DeleteAccountFactoryBaselineResponse DeleteAccountFactoryBaselineResponse
     */
    public function deleteAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Enrolls an account. You can create a new account or manage an existing account in the account factory.
     *  *
     * @description You can call this API operation to create a new account or manage an existing account and apply the account baseline to the account.
     * Accounts are created in asynchronous mode. After you create an account, you can apply the account baseline to the account. You can call the [GetEnrolledAccount API](~~GetEnrolledAccount~~) operation to view the details about the account to obtain the result of applying the account baseline to the account.
     *  *
     * @param EnrollAccountRequest $request EnrollAccountRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return EnrollAccountResponse EnrollAccountResponse
     */
    public function enrollAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountNamePrefix)) {
            $query['AccountNamePrefix'] = $request->accountNamePrefix;
        }
        if (!Utils::isUnset($request->accountUid)) {
            $query['AccountUid'] = $request->accountUid;
        }
        if (!Utils::isUnset($request->baselineId)) {
            $query['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->baselineItems)) {
            $query['BaselineItems'] = $request->baselineItems;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->folderId)) {
            $query['FolderId'] = $request->folderId;
        }
        if (!Utils::isUnset($request->payerAccountUid)) {
            $query['PayerAccountUid'] = $request->payerAccountUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resellAccountType)) {
            $query['ResellAccountType'] = $request->resellAccountType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnrollAccount',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return EnrollAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return EnrollAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enrolls an account. You can create a new account or manage an existing account in the account factory.
     *  *
     * @description You can call this API operation to create a new account or manage an existing account and apply the account baseline to the account.
     * Accounts are created in asynchronous mode. After you create an account, you can apply the account baseline to the account. You can call the [GetEnrolledAccount API](~~GetEnrolledAccount~~) operation to view the details about the account to obtain the result of applying the account baseline to the account.
     *  *
     * @param EnrollAccountRequest $request EnrollAccountRequest
     *
     * @return EnrollAccountResponse EnrollAccountResponse
     */
    public function enrollAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enrollAccountWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of an account factory baseline.
     *  *
     * @param GetAccountFactoryBaselineRequest $request GetAccountFactoryBaselineRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAccountFactoryBaselineResponse GetAccountFactoryBaselineResponse
     */
    public function getAccountFactoryBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineId)) {
            $query['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAccountFactoryBaseline',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAccountFactoryBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of an account factory baseline.
     *  *
     * @param GetAccountFactoryBaselineRequest $request GetAccountFactoryBaselineRequest
     *
     * @return GetAccountFactoryBaselineResponse GetAccountFactoryBaselineResponse
     */
    public function getAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountFactoryBaselineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details about an account that is enrolled in the account factory.
     *  *
     * @param GetEnrolledAccountRequest $request GetEnrolledAccountRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEnrolledAccountResponse GetEnrolledAccountResponse
     */
    public function getEnrolledAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountUid)) {
            $query['AccountUid'] = $request->accountUid;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEnrolledAccount',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEnrolledAccountResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEnrolledAccountResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details about an account that is enrolled in the account factory.
     *  *
     * @param GetEnrolledAccountRequest $request GetEnrolledAccountRequest
     *
     * @return GetEnrolledAccountResponse GetEnrolledAccountResponse
     */
    public function getEnrolledAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEnrolledAccountWithOptions($request, $runtime);
    }

    /**
     * @summary 获取账号工厂基线元素列表
     *  *
     * @param ListAccountFactoryBaselineItemsRequest $request ListAccountFactoryBaselineItemsRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountFactoryBaselineItemsResponse ListAccountFactoryBaselineItemsResponse
     */
    public function listAccountFactoryBaselineItemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->names)) {
            $query['Names'] = $request->names;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['Versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccountFactoryBaselineItems',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAccountFactoryBaselineItemsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAccountFactoryBaselineItemsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取账号工厂基线元素列表
     *  *
     * @param ListAccountFactoryBaselineItemsRequest $request ListAccountFactoryBaselineItemsRequest
     *
     * @return ListAccountFactoryBaselineItemsResponse ListAccountFactoryBaselineItemsResponse
     */
    public function listAccountFactoryBaselineItems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountFactoryBaselineItemsWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains a list of baselines in the account factory.
     *  *
     * @param ListAccountFactoryBaselinesRequest $request ListAccountFactoryBaselinesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAccountFactoryBaselinesResponse ListAccountFactoryBaselinesResponse
     */
    public function listAccountFactoryBaselinesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAccountFactoryBaselines',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAccountFactoryBaselinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAccountFactoryBaselinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains a list of baselines in the account factory.
     *  *
     * @param ListAccountFactoryBaselinesRequest $request ListAccountFactoryBaselinesRequest
     *
     * @return ListAccountFactoryBaselinesResponse ListAccountFactoryBaselinesResponse
     */
    public function listAccountFactoryBaselines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAccountFactoryBaselinesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of accounts that are enrolled in the account factory.
     *  *
     * @param ListEnrolledAccountsRequest $request ListEnrolledAccountsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEnrolledAccountsResponse ListEnrolledAccountsResponse
     */
    public function listEnrolledAccountsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEnrolledAccounts',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEnrolledAccountsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEnrolledAccountsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of accounts that are enrolled in the account factory.
     *  *
     * @param ListEnrolledAccountsRequest $request ListEnrolledAccountsRequest
     *
     * @return ListEnrolledAccountsResponse ListEnrolledAccountsResponse
     */
    public function listEnrolledAccounts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEnrolledAccountsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看治理检测定义
     *  *
     * @param ListEvaluationMetadataRequest $request ListEvaluationMetadataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEvaluationMetadataResponse ListEvaluationMetadataResponse
     */
    public function listEvaluationMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvaluationMetadata',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEvaluationMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEvaluationMetadataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看治理检测定义
     *  *
     * @param ListEvaluationMetadataRequest $request ListEvaluationMetadataRequest
     *
     * @return ListEvaluationMetadataResponse ListEvaluationMetadataResponse
     */
    public function listEvaluationMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationMetadataWithOptions($request, $runtime);
    }

    /**
     * @summary 获取云治理中心治理检测项结果详情
     *  *
     * @param ListEvaluationMetricDetailsRequest $request ListEvaluationMetricDetailsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEvaluationMetricDetailsResponse ListEvaluationMetricDetailsResponse
     */
    public function listEvaluationMetricDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvaluationMetricDetails',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEvaluationMetricDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEvaluationMetricDetailsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取云治理中心治理检测项结果详情
     *  *
     * @param ListEvaluationMetricDetailsRequest $request ListEvaluationMetricDetailsRequest
     *
     * @return ListEvaluationMetricDetailsResponse ListEvaluationMetricDetailsResponse
     */
    public function listEvaluationMetricDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationMetricDetailsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result and status of a governance maturity check.
     *  *
     * @param ListEvaluationResultsRequest $request ListEvaluationResultsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEvaluationResultsResponse ListEvaluationResultsResponse
     */
    public function listEvaluationResultsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvaluationResults',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEvaluationResultsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEvaluationResultsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the result and status of a governance maturity check.
     *  *
     * @param ListEvaluationResultsRequest $request ListEvaluationResultsRequest
     *
     * @return ListEvaluationResultsResponse ListEvaluationResultsResponse
     */
    public function listEvaluationResults($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationResultsWithOptions($request, $runtime);
    }

    /**
     * @summary 查看治理检测定义
     *  *
     * @param ListEvaluationScoreHistoryRequest $request ListEvaluationScoreHistoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEvaluationScoreHistoryResponse ListEvaluationScoreHistoryResponse
     */
    public function listEvaluationScoreHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEvaluationScoreHistory',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEvaluationScoreHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEvaluationScoreHistoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查看治理检测定义
     *  *
     * @param ListEvaluationScoreHistoryRequest $request ListEvaluationScoreHistoryRequest
     *
     * @return ListEvaluationScoreHistoryResponse ListEvaluationScoreHistoryResponse
     */
    public function listEvaluationScoreHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEvaluationScoreHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary 运行云治理中心治理检测
     *  *
     * @param RunEvaluationRequest $request RunEvaluationRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RunEvaluationResponse RunEvaluationResponse
     */
    public function runEvaluationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountId)) {
            $query['AccountId'] = $request->accountId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunEvaluation',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RunEvaluationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RunEvaluationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 运行云治理中心治理检测
     *  *
     * @param RunEvaluationRequest $request RunEvaluationRequest
     *
     * @return RunEvaluationResponse RunEvaluationResponse
     */
    public function runEvaluation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runEvaluationWithOptions($request, $runtime);
    }

    /**
     * @summary 更新账号工厂基线
     *  *
     * @param UpdateAccountFactoryBaselineRequest $request UpdateAccountFactoryBaselineRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAccountFactoryBaselineResponse UpdateAccountFactoryBaselineResponse
     */
    public function updateAccountFactoryBaselineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baselineId)) {
            $query['BaselineId'] = $request->baselineId;
        }
        if (!Utils::isUnset($request->baselineItems)) {
            $query['BaselineItems'] = $request->baselineItems;
        }
        if (!Utils::isUnset($request->baselineName)) {
            $query['BaselineName'] = $request->baselineName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAccountFactoryBaseline',
            'version'     => '2021-01-20',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAccountFactoryBaselineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAccountFactoryBaselineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 更新账号工厂基线
     *  *
     * @param UpdateAccountFactoryBaselineRequest $request UpdateAccountFactoryBaselineRequest
     *
     * @return UpdateAccountFactoryBaselineResponse UpdateAccountFactoryBaselineResponse
     */
    public function updateAccountFactoryBaseline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountFactoryBaselineWithOptions($request, $runtime);
    }
}
