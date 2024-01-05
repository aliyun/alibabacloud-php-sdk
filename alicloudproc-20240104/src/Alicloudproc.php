<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectResponse;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectShrinkRequest;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\UpdateSourcingProjectRequest;
use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\UpdateSourcingProjectResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Alicloudproc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('alicloudproc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSourcingProjectRequest $tmpReq
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSourcingProjectResponse
     */
    public function createSourcingProjectWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSourcingProjectShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->address)) {
            $request->addressShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->address, 'Address', 'json');
        }
        if (!Utils::isUnset($tmpReq->company)) {
            $request->companyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->company, 'Company', 'json');
        }
        if (!Utils::isUnset($tmpReq->contact)) {
            $request->contactShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contact, 'Contact', 'json');
        }
        if (!Utils::isUnset($tmpReq->extendInfo)) {
            $request->extendInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendInfo, 'ExtendInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->subjects)) {
            $request->subjectsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->subjects, 'Subjects', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->addressShrink)) {
            $query['Address'] = $request->addressShrink;
        }
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->bizNo)) {
            $query['BizNo'] = $request->bizNo;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->companyShrink)) {
            $query['Company'] = $request->companyShrink;
        }
        if (!Utils::isUnset($request->contactShrink)) {
            $query['Contact'] = $request->contactShrink;
        }
        if (!Utils::isUnset($request->createTime)) {
            $query['CreateTime'] = $request->createTime;
        }
        if (!Utils::isUnset($request->expireTime)) {
            $query['ExpireTime'] = $request->expireTime;
        }
        if (!Utils::isUnset($request->extendInfoShrink)) {
            $query['ExtendInfo'] = $request->extendInfoShrink;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $query['SourceUrl'] = $request->sourceUrl;
        }
        if (!Utils::isUnset($request->subBizType)) {
            $query['SubBizType'] = $request->subBizType;
        }
        if (!Utils::isUnset($request->subjectsShrink)) {
            $query['Subjects'] = $request->subjectsShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSourcingProject',
            'version'     => '2024-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/srm/lite/sourcing/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSourcingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSourcingProjectRequest $request
     *
     * @return CreateSourcingProjectResponse
     */
    public function createSourcingProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSourcingProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateSourcingProjectRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateSourcingProjectResponse
     */
    public function updateSourcingProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizId)) {
            $query['BizId'] = $request->bizId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->updateTime)) {
            $query['UpdateTime'] = $request->updateTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSourcingProject',
            'version'     => '2024-01-04',
            'protocol'    => 'HTTPS',
            'pathname'    => '/srm/lite/sourcing/update',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateSourcingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateSourcingProjectRequest $request
     *
     * @return UpdateSourcingProjectResponse
     */
    public function updateSourcingProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateSourcingProjectWithOptions($request, $headers, $runtime);
    }
}
