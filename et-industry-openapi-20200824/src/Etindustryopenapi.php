<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetMqttConnectRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetMqttConnectResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetNonceRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetNonceResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\ListMeasurePointListByNodeCodePageRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\ListMeasurePointListByNodeCodePageResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\MultiFieldBatchUploadRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\MultiFieldBatchUploadResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\MultiSourcePointBatchUploadRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\MultiSourcePointBatchUploadResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryFieldLatestBySourcePointRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryFieldLatestBySourcePointResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceDataRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceDataResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceLimitsDataRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceLimitsDataResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceStatusDataRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\QueryIndustryDeviceStatusDataResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\SourcePointBatchRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\SourcePointBatchResponse;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\UploadIndustryDeviceDataRequest;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\UploadIndustryDeviceDataResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Etindustryopenapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-hangzhou' => 'et-industry.cn-hangzhou.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('et-industry-openapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param request - GetMqttConnectRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetMqttConnectResponse
     *
     * @param GetMqttConnectRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetMqttConnectResponse
     */
    public function getMqttConnectWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetMqttConnect',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/collaboration/pop/getmqttconnect',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMqttConnectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMqttConnectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetMqttConnectRequest
     *
     * @returns GetMqttConnectResponse
     *
     * @param GetMqttConnectRequest $request
     *
     * @return GetMqttConnectResponse
     */
    public function getMqttConnect($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getMqttConnectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - GetNonceRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetNonceResponse
     *
     * @param GetNonceRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return GetNonceResponse
     */
    public function getNonceWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetNonce',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/collaboration/pop/getnonce',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetNonceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetNonceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - GetNonceRequest
     *
     * @returns GetNonceResponse
     *
     * @param GetNonceRequest $request
     *
     * @return GetNonceResponse
     */
    public function getNonce($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNonceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - ListMeasurePointListByNodeCodePageRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListMeasurePointListByNodeCodePageResponse
     *
     * @param ListMeasurePointListByNodeCodePageRequest $request
     * @param string[]                                  $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return ListMeasurePointListByNodeCodePageResponse
     */
    public function listMeasurePointListByNodeCodePageWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ListMeasurePointListByNodeCodePage',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/node/pop/measurepointlistbynodecodepage',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMeasurePointListByNodeCodePageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMeasurePointListByNodeCodePageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - ListMeasurePointListByNodeCodePageRequest
     *
     * @returns ListMeasurePointListByNodeCodePageResponse
     *
     * @param ListMeasurePointListByNodeCodePageRequest $request
     *
     * @return ListMeasurePointListByNodeCodePageResponse
     */
    public function listMeasurePointListByNodeCodePage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMeasurePointListByNodeCodePageWithOptions($request, $headers, $runtime);
    }

    /**
     * 多值批量上报.
     *
     * @param request - MultiFieldBatchUploadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiFieldBatchUploadResponse
     *
     * @param MultiFieldBatchUploadRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return MultiFieldBatchUploadResponse
     */
    public function multiFieldBatchUploadWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MultiFieldBatchUpload',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/upload/pop/multifieldbatchv2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MultiFieldBatchUploadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MultiFieldBatchUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 多值批量上报.
     *
     * @param request - MultiFieldBatchUploadRequest
     *
     * @returns MultiFieldBatchUploadResponse
     *
     * @param MultiFieldBatchUploadRequest $request
     *
     * @return MultiFieldBatchUploadResponse
     */
    public function multiFieldBatchUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->multiFieldBatchUploadWithOptions($request, $headers, $runtime);
    }

    /**
     * 多源点位批量上报.
     *
     * @param request - MultiSourcePointBatchUploadRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MultiSourcePointBatchUploadResponse
     *
     * @param MultiSourcePointBatchUploadRequest $request
     * @param string[]                           $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return MultiSourcePointBatchUploadResponse
     */
    public function multiSourcePointBatchUploadWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->body) {
            @$body['body'] = $request->body;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'MultiSourcePointBatchUpload',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/upload/pop/sourcepointbatchv2',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'json',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return MultiSourcePointBatchUploadResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return MultiSourcePointBatchUploadResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 多源点位批量上报.
     *
     * @param request - MultiSourcePointBatchUploadRequest
     *
     * @returns MultiSourcePointBatchUploadResponse
     *
     * @param MultiSourcePointBatchUploadRequest $request
     *
     * @return MultiSourcePointBatchUploadResponse
     */
    public function multiSourcePointBatchUpload($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->multiSourcePointBatchUploadWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - QueryFieldLatestBySourcePointRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryFieldLatestBySourcePointResponse
     *
     * @param QueryFieldLatestBySourcePointRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryFieldLatestBySourcePointResponse
     */
    public function queryFieldLatestBySourcePointWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryFieldLatestBySourcePoint',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/query/pop/multifieldlatestbysourcepoint',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryFieldLatestBySourcePointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryFieldLatestBySourcePointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - QueryFieldLatestBySourcePointRequest
     *
     * @returns QueryFieldLatestBySourcePointResponse
     *
     * @param QueryFieldLatestBySourcePointRequest $request
     *
     * @return QueryFieldLatestBySourcePointResponse
     */
    public function queryFieldLatestBySourcePoint($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryFieldLatestBySourcePointWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - QueryIndustryDeviceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIndustryDeviceDataResponse
     *
     * @param QueryIndustryDeviceDataRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryIndustryDeviceDataResponse
     */
    public function queryIndustryDeviceDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryIndustryDeviceData',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/query/pop/multifieldlatest',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryIndustryDeviceDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIndustryDeviceDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - QueryIndustryDeviceDataRequest
     *
     * @returns QueryIndustryDeviceDataResponse
     *
     * @param QueryIndustryDeviceDataRequest $request
     *
     * @return QueryIndustryDeviceDataResponse
     */
    public function queryIndustryDeviceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIndustryDeviceDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - QueryIndustryDeviceLimitsDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIndustryDeviceLimitsDataResponse
     *
     * @param QueryIndustryDeviceLimitsDataRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryIndustryDeviceLimitsDataResponse
     */
    public function queryIndustryDeviceLimitsDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryIndustryDeviceLimitsData',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/query/pop/multifieldrange',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryIndustryDeviceLimitsDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIndustryDeviceLimitsDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - QueryIndustryDeviceLimitsDataRequest
     *
     * @returns QueryIndustryDeviceLimitsDataResponse
     *
     * @param QueryIndustryDeviceLimitsDataRequest $request
     *
     * @return QueryIndustryDeviceLimitsDataResponse
     */
    public function queryIndustryDeviceLimitsData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIndustryDeviceLimitsDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - QueryIndustryDeviceStatusDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns QueryIndustryDeviceStatusDataResponse
     *
     * @param QueryIndustryDeviceStatusDataRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryIndustryDeviceStatusDataResponse
     */
    public function queryIndustryDeviceStatusDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'QueryIndustryDeviceStatusData',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/query/pop/multifieldrangestatus',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryIndustryDeviceStatusDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIndustryDeviceStatusDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - QueryIndustryDeviceStatusDataRequest
     *
     * @returns QueryIndustryDeviceStatusDataResponse
     *
     * @param QueryIndustryDeviceStatusDataRequest $request
     *
     * @return QueryIndustryDeviceStatusDataResponse
     */
    public function queryIndustryDeviceStatusData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->queryIndustryDeviceStatusDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - SourcePointBatchRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SourcePointBatchResponse
     *
     * @param SourcePointBatchRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SourcePointBatchResponse
     */
    public function sourcePointBatchWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SourcePointBatch',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/upload/pop/sourcepointbatch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SourcePointBatchResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SourcePointBatchResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - SourcePointBatchRequest
     *
     * @returns SourcePointBatchResponse
     *
     * @param SourcePointBatchRequest $request
     *
     * @return SourcePointBatchResponse
     */
    public function sourcePointBatch($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->sourcePointBatchWithOptions($request, $headers, $runtime);
    }

    /**
     * @param request - UploadIndustryDeviceDataRequest
     * @param headers - map
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadIndustryDeviceDataResponse
     *
     * @param UploadIndustryDeviceDataRequest $request
     * @param string[]                        $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return UploadIndustryDeviceDataResponse
     */
    public function uploadIndustryDeviceDataWithOptions($request, $headers, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->request) {
            @$body['Request'] = $request->request;
        }

        $req = new OpenApiRequest([
            'headers' => $headers,
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UploadIndustryDeviceData',
            'version' => '2020-08-24',
            'protocol' => 'HTTPS',
            'pathname' => '/api/igate/timeseries/upload/pop/multifieldbatch',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadIndustryDeviceDataResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadIndustryDeviceDataResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - UploadIndustryDeviceDataRequest
     *
     * @returns UploadIndustryDeviceDataResponse
     *
     * @param UploadIndustryDeviceDataRequest $request
     *
     * @return UploadIndustryDeviceDataResponse
     */
    public function uploadIndustryDeviceData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadIndustryDeviceDataWithOptions($request, $headers, $runtime);
    }
}
