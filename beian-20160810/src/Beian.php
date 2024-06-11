<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Beian\V20160810\Models\DeleteUnbeianIpCheckTypeRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\DeleteUnbeianIpCheckTypeResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\GetMainDomainRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\GetMainDomainResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\InsertUnbeianIpCheckTypeRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\InsertUnbeianIpCheckTypeResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\ListUnbeianIpCheckTypeRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\ListUnbeianIpCheckTypeResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorDomainRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorDomainResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorDomainWhiteListRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorDomainWhiteListResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorIpRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\ManageAccessorIpResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainListRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainListResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainsStatusRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainsStatusResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainStatusRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainStatusResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainWhiteListRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorDomainWhiteListResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorIpRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\QueryAccessorIpResponse;
use AlibabaCloud\SDK\Beian\V20160810\Models\SubmitAccessorFullDomainsOssListRequest;
use AlibabaCloud\SDK\Beian\V20160810\Models\SubmitAccessorFullDomainsOssListResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Beian extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('beian', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DeleteUnbeianIpCheckTypeRequest $request DeleteUnbeianIpCheckTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUnbeianIpCheckTypeResponse DeleteUnbeianIpCheckTypeResponse
     */
    public function deleteUnbeianIpCheckTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteUnbeianIpCheckType',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUnbeianIpCheckTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteUnbeianIpCheckTypeRequest $request DeleteUnbeianIpCheckTypeRequest
     *
     * @return DeleteUnbeianIpCheckTypeResponse DeleteUnbeianIpCheckTypeResponse
     */
    public function deleteUnbeianIpCheckType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUnbeianIpCheckTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取主域名接口
     *  *
     * @param GetMainDomainRequest $request GetMainDomainRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMainDomainResponse GetMainDomainResponse
     */
    public function getMainDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMainDomain',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMainDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取主域名接口
     *  *
     * @param GetMainDomainRequest $request GetMainDomainRequest
     *
     * @return GetMainDomainResponse GetMainDomainResponse
     */
    public function getMainDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMainDomainWithOptions($request, $runtime);
    }

    /**
     * @param InsertUnbeianIpCheckTypeRequest $request InsertUnbeianIpCheckTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertUnbeianIpCheckTypeResponse InsertUnbeianIpCheckTypeResponse
     */
    public function insertUnbeianIpCheckTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertUnbeianIpCheckType',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertUnbeianIpCheckTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertUnbeianIpCheckTypeRequest $request InsertUnbeianIpCheckTypeRequest
     *
     * @return InsertUnbeianIpCheckTypeResponse InsertUnbeianIpCheckTypeResponse
     */
    public function insertUnbeianIpCheckType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertUnbeianIpCheckTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListUnbeianIpCheckTypeRequest $request ListUnbeianIpCheckTypeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUnbeianIpCheckTypeResponse ListUnbeianIpCheckTypeResponse
     */
    public function listUnbeianIpCheckTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->checkType)) {
            $query['CheckType'] = $request->checkType;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->page)) {
            $query['Page'] = $request->page;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUnbeianIpCheckType',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUnbeianIpCheckTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListUnbeianIpCheckTypeRequest $request ListUnbeianIpCheckTypeRequest
     *
     * @return ListUnbeianIpCheckTypeResponse ListUnbeianIpCheckTypeResponse
     */
    public function listUnbeianIpCheckType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUnbeianIpCheckTypeWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方服务域名上报接口
     *  *
     * @param ManageAccessorDomainRequest $request ManageAccessorDomainRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageAccessorDomainResponse ManageAccessorDomainResponse
     */
    public function manageAccessorDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageAccessorDomain',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageAccessorDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方服务域名上报接口
     *  *
     * @param ManageAccessorDomainRequest $request ManageAccessorDomainRequest
     *
     * @return ManageAccessorDomainResponse ManageAccessorDomainResponse
     */
    public function manageAccessorDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageAccessorDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方域名白名单上报接口
     *  *
     * @param ManageAccessorDomainWhiteListRequest $request ManageAccessorDomainWhiteListRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageAccessorDomainWhiteListResponse ManageAccessorDomainWhiteListResponse
     */
    public function manageAccessorDomainWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageAccessorDomainWhiteList',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageAccessorDomainWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方域名白名单上报接口
     *  *
     * @param ManageAccessorDomainWhiteListRequest $request ManageAccessorDomainWhiteListRequest
     *
     * @return ManageAccessorDomainWhiteListResponse ManageAccessorDomainWhiteListResponse
     */
    public function manageAccessorDomainWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageAccessorDomainWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方管控IP上报接口
     *  *
     * @param ManageAccessorIpRequest $request ManageAccessorIpRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageAccessorIpResponse ManageAccessorIpResponse
     */
    public function manageAccessorIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->ipVersion)) {
            $query['IpVersion'] = $request->ipVersion;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->remark)) {
            $query['Remark'] = $request->remark;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageAccessorIp',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageAccessorIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方管控IP上报接口
     *  *
     * @param ManageAccessorIpRequest $request ManageAccessorIpRequest
     *
     * @return ManageAccessorIpResponse ManageAccessorIpResponse
     */
    public function manageAccessorIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageAccessorIpWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方服务域名是否上报查询接口
     *  *
     * @param QueryAccessorDomainRequest $request QueryAccessorDomainRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorDomainResponse QueryAccessorDomainResponse
     */
    public function queryAccessorDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorDomain',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorDomainResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方服务域名是否上报查询接口
     *  *
     * @param QueryAccessorDomainRequest $request QueryAccessorDomainRequest
     *
     * @return QueryAccessorDomainResponse QueryAccessorDomainResponse
     */
    public function queryAccessorDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorDomainWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方查询服务域名列表接口
     *  *
     * @param QueryAccessorDomainListRequest $request QueryAccessorDomainListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorDomainListResponse QueryAccessorDomainListResponse
     */
    public function queryAccessorDomainListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorDomainList',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorDomainListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方查询服务域名列表接口
     *  *
     * @param QueryAccessorDomainListRequest $request QueryAccessorDomainListRequest
     *
     * @return QueryAccessorDomainListResponse QueryAccessorDomainListResponse
     */
    public function queryAccessorDomainList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorDomainListWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方域名状态查询接口
     *  *
     * @param QueryAccessorDomainStatusRequest $request QueryAccessorDomainStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorDomainStatusResponse QueryAccessorDomainStatusResponse
     */
    public function queryAccessorDomainStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorDomainStatus',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorDomainStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方域名状态查询接口
     *  *
     * @param QueryAccessorDomainStatusRequest $request QueryAccessorDomainStatusRequest
     *
     * @return QueryAccessorDomainStatusResponse QueryAccessorDomainStatusResponse
     */
    public function queryAccessorDomainStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorDomainStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方域名白名单上报查询接口
     *  *
     * @param QueryAccessorDomainWhiteListRequest $request QueryAccessorDomainWhiteListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorDomainWhiteListResponse QueryAccessorDomainWhiteListResponse
     */
    public function queryAccessorDomainWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorDomainWhiteList',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorDomainWhiteListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方域名白名单上报查询接口
     *  *
     * @param QueryAccessorDomainWhiteListRequest $request QueryAccessorDomainWhiteListRequest
     *
     * @return QueryAccessorDomainWhiteListResponse QueryAccessorDomainWhiteListResponse
     */
    public function queryAccessorDomainWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorDomainWhiteListWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方域名状态批量查询接口
     *  *
     * @param QueryAccessorDomainsStatusRequest $request QueryAccessorDomainsStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorDomainsStatusResponse QueryAccessorDomainsStatusResponse
     */
    public function queryAccessorDomainsStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->domains)) {
            $query['Domains'] = $request->domains;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorDomainsStatus',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorDomainsStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方域名状态批量查询接口
     *  *
     * @param QueryAccessorDomainsStatusRequest $request QueryAccessorDomainsStatusRequest
     *
     * @return QueryAccessorDomainsStatusResponse QueryAccessorDomainsStatusResponse
     */
    public function queryAccessorDomainsStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorDomainsStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方服务域名上报接口
     *  *
     * @param QueryAccessorIpRequest $request QueryAccessorIpRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryAccessorIpResponse QueryAccessorIpResponse
     */
    public function queryAccessorIpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryAccessorIp',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryAccessorIpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方服务域名上报接口
     *  *
     * @param QueryAccessorIpRequest $request QueryAccessorIpRequest
     *
     * @return QueryAccessorIpResponse QueryAccessorIpResponse
     */
    public function queryAccessorIp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccessorIpWithOptions($request, $runtime);
    }

    /**
     * @summary 接入方服务域名全量上报接口
     *  *
     * @param SubmitAccessorFullDomainsOssListRequest $request SubmitAccessorFullDomainsOssListRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAccessorFullDomainsOssListResponse SubmitAccessorFullDomainsOssListResponse
     */
    public function submitAccessorFullDomainsOssListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->ossList)) {
            $query['OssList'] = $request->ossList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitAccessorFullDomainsOssList',
            'version'     => '2016-08-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SubmitAccessorFullDomainsOssListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 接入方服务域名全量上报接口
     *  *
     * @param SubmitAccessorFullDomainsOssListRequest $request SubmitAccessorFullDomainsOssListRequest
     *
     * @return SubmitAccessorFullDomainsOssListResponse SubmitAccessorFullDomainsOssListResponse
     */
    public function submitAccessorFullDomainsOssList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAccessorFullDomainsOssListWithOptions($request, $runtime);
    }
}
