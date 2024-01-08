<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeUploadTokenResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\FileModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\FileModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageAsyncModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageAsyncModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationCancelRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationCancelResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationCancelRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationCancelResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResponse;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultRequest;
use AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Green extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-south-1'            => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'        => 'green.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'        => 'green.ap-southeast-1.aliyuncs.com',
            'cn-chengdu'            => 'green.aliyuncs.com',
            'cn-hongkong'           => 'green.aliyuncs.com',
            'cn-huhehaote'          => 'green.aliyuncs.com',
            'cn-qingdao'            => 'green.aliyuncs.com',
            'cn-zhangjiakou'        => 'green.aliyuncs.com',
            'eu-central-1'          => 'green.ap-southeast-1.aliyuncs.com',
            'eu-west-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'me-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'us-east-1'             => 'green.ap-southeast-1.aliyuncs.com',
            'cn-hangzhou-finance'   => 'green.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'green.aliyuncs.com',
            'cn-shanghai-finance-1' => 'green.aliyuncs.com',
            'cn-north-2-gov-1'      => 'green.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('green', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeFileModerationResultRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeFileModerationResultResponse
     */
    public function describeFileModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeFileModerationResult',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFileModerationResultRequest $request
     *
     * @return DescribeFileModerationResultResponse
     */
    public function describeFileModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileModerationResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageModerationResultRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeImageModerationResultResponse
     */
    public function describeImageModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->reqId)) {
            $query['ReqId'] = $request->reqId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageModerationResult',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageModerationResultRequest $request
     *
     * @return DescribeImageModerationResultResponse
     */
    public function describeImageModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageModerationResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImageResultExtRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeImageResultExtResponse
     */
    public function describeImageResultExtWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->infoType)) {
            $body['InfoType'] = $request->infoType;
        }
        if (!Utils::isUnset($request->reqId)) {
            $body['ReqId'] = $request->reqId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageResultExt',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageResultExtResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImageResultExtRequest $request
     *
     * @return DescribeImageResultExtResponse
     */
    public function describeImageResultExt($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageResultExtWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeUploadTokenResponse
     */
    public function describeUploadTokenWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeUploadToken',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUploadTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeUploadTokenResponse
     */
    public function describeUploadToken()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadTokenWithOptions($runtime);
    }

    /**
     * @param FileModerationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return FileModerationResponse
     */
    public function fileModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'FileModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FileModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FileModerationRequest $request
     *
     * @return FileModerationResponse
     */
    public function fileModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fileModerationWithOptions($request, $runtime);
    }

    /**
     * @param ImageAsyncModerationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ImageAsyncModerationResponse
     */
    public function imageAsyncModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->service)) {
            $query['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $query['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImageAsyncModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageAsyncModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageAsyncModerationRequest $request
     *
     * @return ImageAsyncModerationResponse
     */
    public function imageAsyncModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageAsyncModerationWithOptions($request, $runtime);
    }

    /**
     * @param ImageModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ImageModerationResponse
     */
    public function imageModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ImageModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImageModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ImageModerationRequest $request
     *
     * @return ImageModerationResponse
     */
    public function imageModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->imageModerationWithOptions($request, $runtime);
    }

    /**
     * @param TextModerationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return TextModerationResponse
     */
    public function textModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TextModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TextModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TextModerationRequest $request
     *
     * @return TextModerationResponse
     */
    public function textModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textModerationWithOptions($request, $runtime);
    }

    /**
     * @param TextModerationPlusRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return TextModerationPlusResponse
     */
    public function textModerationPlusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'TextModerationPlus',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TextModerationPlusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TextModerationPlusRequest $request
     *
     * @return TextModerationPlusResponse
     */
    public function textModerationPlus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->textModerationPlusWithOptions($request, $runtime);
    }

    /**
     * @param VideoModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VideoModerationResponse
     */
    public function videoModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VideoModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VideoModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VideoModerationRequest $request
     *
     * @return VideoModerationResponse
     */
    public function videoModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationWithOptions($request, $runtime);
    }

    /**
     * @param VideoModerationCancelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VideoModerationCancelResponse
     */
    public function videoModerationCancelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VideoModerationCancel',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VideoModerationCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VideoModerationCancelRequest $request
     *
     * @return VideoModerationCancelResponse
     */
    public function videoModerationCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationCancelWithOptions($request, $runtime);
    }

    /**
     * @param VideoModerationResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VideoModerationResultResponse
     */
    public function videoModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VideoModerationResult',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VideoModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VideoModerationResultRequest $request
     *
     * @return VideoModerationResultResponse
     */
    public function videoModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->videoModerationResultWithOptions($request, $runtime);
    }

    /**
     * @param VoiceModerationRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return VoiceModerationResponse
     */
    public function voiceModerationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VoiceModeration',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VoiceModerationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VoiceModerationRequest $request
     *
     * @return VoiceModerationResponse
     */
    public function voiceModeration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationWithOptions($request, $runtime);
    }

    /**
     * @param VoiceModerationCancelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceModerationCancelResponse
     */
    public function voiceModerationCancelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VoiceModerationCancel',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VoiceModerationCancelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VoiceModerationCancelRequest $request
     *
     * @return VoiceModerationCancelResponse
     */
    public function voiceModerationCancel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationCancelWithOptions($request, $runtime);
    }

    /**
     * @param VoiceModerationResultRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return VoiceModerationResultResponse
     */
    public function voiceModerationResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->service)) {
            $body['Service'] = $request->service;
        }
        if (!Utils::isUnset($request->serviceParameters)) {
            $body['ServiceParameters'] = $request->serviceParameters;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'VoiceModerationResult',
            'version'     => '2022-03-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VoiceModerationResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VoiceModerationResultRequest $request
     *
     * @return VoiceModerationResultResponse
     */
    public function voiceModerationResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->voiceModerationResultWithOptions($request, $runtime);
    }
}
