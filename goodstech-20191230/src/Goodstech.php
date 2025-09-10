<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230;

use AlibabaCloud\Dara\Dara;
use AlibabaCloud\Dara\Models\FileField;
use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\Dara\Request;
use AlibabaCloud\Dara\Util\FormUtil;
use AlibabaCloud\Dara\Util\StreamUtil;
use AlibabaCloud\Dara\Util\XML;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityAdvanceRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityRequest;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponse;
use Darabonba\OpenApi\Exceptions\ClientException;
use Darabonba\OpenApi\Models\Config;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Goodstech extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('goodstech', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string  $bucketName
     * @param mixed[] $form
     *
     * @return mixed[]
     */
    public function _postOSSObject($bucketName, $form)
    {
        $_request = new Request();
        $boundary = FormUtil::getBoundary();
        $_request->protocol = 'HTTPS';
        $_request->method = 'POST';
        $_request->pathname = '/';
        $_request->headers = [
            'host' => '' . @$form['host'],
            'date' => Utils::getDateUTCString(),
            'user-agent' => Utils::getUserAgent(''),
        ];
        @$_request->headers['content-type'] = 'multipart/form-data; boundary=' . $boundary . '';
        $_request->body = FormUtil::toFileForm($form, $boundary);
        $_response = Dara::send($_request);

        $respMap = null;
        $bodyStr = StreamUtil::readAsString($_response->body);
        if (($_response->statusCode >= 400) && ($_response->statusCode < 600)) {
            $respMap = XML::parseXml($bodyStr, null);
            $err = @$respMap['Error'];

            throw new ClientException([
                'code' => '' . @$err['Code'],
                'message' => '' . @$err['Message'],
                'data' => [
                    'httpCode' => $_response->statusCode,
                    'requestId' => '' . @$err['RequestId'],
                    'hostId' => '' . @$err['HostId'],
                ],
            ]);
        }

        $respMap = XML::parseXml($bodyStr, null);

        return Dara::merge([
        ], $respMap);
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
     * @param Request - ClassifyCommodityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClassifyCommodityResponse
     *
     * @param ClassifyCommodityRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageURL) {
            @$query['ImageURL'] = $request->imageURL;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClassifyCommodity',
            'version' => '2019-12-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClassifyCommodityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param Request - ClassifyCommodityRequest
     *
     * @returns ClassifyCommodityResponse
     *
     * @param ClassifyCommodityRequest $request
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->classifyCommodityWithOptions($request, $runtime);
    }

    /**
     * @param ClassifyCommodityAdvanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ClassifyCommodityResponse
     */
    public function classifyCommodityAdvance($request, $runtime)
    {
        // Step 0: init client
        if (null === $this->_credential) {
            throw new ClientException([
                'code' => 'InvalidCredentials',
                'message' => 'Please set up the credentials correctly. If you are setting them through environment variables, please ensure that ALIBABA_CLOUD_ACCESS_KEY_ID and ALIBABA_CLOUD_ACCESS_KEY_SECRET are set correctly. See https://help.aliyun.com/zh/sdk/developer-reference/configure-the-alibaba-cloud-accesskey-environment-variable-on-linux-macos-and-windows-systems for more details.',
            ]);
        }

        $credentialModel = $this->_credential->getCredential();
        $accessKeyId = $credentialModel->accessKeyId;
        $accessKeySecret = $credentialModel->accessKeySecret;
        $securityToken = $credentialModel->securityToken;
        $credentialType = $credentialModel->type;
        $openPlatformEndpoint = $this->_openPlatformEndpoint;
        if (null === $openPlatformEndpoint || '' == $openPlatformEndpoint) {
            $openPlatformEndpoint = 'openplatform.aliyuncs.com';
        }

        if (null === $credentialType) {
            $credentialType = 'access_key';
        }

        $authConfig = new Config([
            'accessKeyId' => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'securityToken' => $securityToken,
            'type' => $credentialType,
            'endpoint' => $openPlatformEndpoint,
            'protocol' => $this->_protocol,
            'regionId' => $this->_regionId,
        ]);
        $authClient = new OpenApiClient($authConfig);
        $authRequest = [
            'Product' => 'goodstech',
            'RegionId' => $this->_regionId,
        ];
        $authReq = new OpenApiRequest([
            'query' => Utils::query($authRequest),
        ]);
        $authParams = new Params([
            'action' => 'AuthorizeFileUpload',
            'version' => '2019-12-19',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $authResponse = [];
        $fileObj = new FileField([]);
        $ossHeader = [];
        $tmpBody = [];
        $useAccelerate = false;
        $authResponseBody = [];
        $classifyCommodityReq = new ClassifyCommodityRequest([]);
        Utils::convert($request, $classifyCommodityReq);
        if (null !== $request->imageURLObject) {
            $authResponse = $authClient->callApi($authParams, $authReq, $runtime);
            $tmpBody = @$authResponse['body'];
            $useAccelerate = (bool) (@$tmpBody['UseAccelerate']);
            $authResponseBody = Utils::stringifyMapValue($tmpBody);
            $fileObj = new FileField([
                'filename' => @$authResponseBody['ObjectKey'],
                'content' => $request->imageURLObject,
                'contentType' => '',
            ]);
            $ossHeader = [
                'host' => '' . @$authResponseBody['Bucket'] . '.' . Utils::getEndpoint(@$authResponseBody['Endpoint'], $useAccelerate, $this->_endpointType) . '',
                'OSSAccessKeyId' => @$authResponseBody['AccessKeyId'],
                'policy' => @$authResponseBody['EncodedPolicy'],
                'Signature' => @$authResponseBody['Signature'],
                'key' => @$authResponseBody['ObjectKey'],
                'file' => $fileObj,
                'success_action_status' => '201',
            ];
            $this->_postOSSObject(@$authResponseBody['Bucket'], $ossHeader);
            $classifyCommodityReq->imageURL = 'http://' . @$authResponseBody['Bucket'] . '.' . @$authResponseBody['Endpoint'] . '/' . @$authResponseBody['ObjectKey'] . '';
        }

        return $this->classifyCommodityWithOptions($classifyCommodityReq, $runtime);
    }
}
