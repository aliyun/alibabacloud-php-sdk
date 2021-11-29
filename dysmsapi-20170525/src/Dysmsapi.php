<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateCardSmsTemplateShrinkRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\DeleteSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetOSSInfoForCardTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryCardSmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySendDetailsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QueryShortUrlResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendBatchSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendCardSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Dysmsapi extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'ap-southeast-1' => 'dysmsapi.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'dysmsapi-xman.ap-southeast-5.aliyuncs.com',
            'cn-beijing'     => 'dysmsapi-proxy.cn-beijing.aliyuncs.com',
            'cn-hongkong'    => 'dysmsapi-xman.cn-hongkong.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('dysmsapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddShortUrlRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddShortUrlRequest $request
     *
     * @return AddShortUrlResponse
     */
    public function addShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param AddSmsSignRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['Remark']               = $request->remark;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignName']             = $request->signName;
        $query['SignSource']           = $request->signSource;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSmsSignRequest $request
     *
     * @return AddSmsSignResponse
     */
    public function addSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param AddSmsTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['Remark']               = $request->remark;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['TemplateContent']      = $request->templateContent;
        $query['TemplateName']         = $request->templateName;
        $query['TemplateType']         = $request->templateType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'AddSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return AddSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddSmsTemplateRequest $request
     *
     * @return AddSmsTemplateResponse
     */
    public function addSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param CreateCardSmsTemplateRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateCardSmsTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->template)) {
            $request->templateShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->template, 'Template', 'json');
        }
        $query                 = [];
        $query['Memo']         = $request->memo;
        $query['Template']     = $request->templateShrink;
        $query['TemplateName'] = $request->templateName;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'CreateCardSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCardSmsTemplateRequest $request
     *
     * @return CreateCardSmsTemplateResponse
     */
    public function createCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteShortUrlRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteShortUrlRequest $request
     *
     * @return DeleteShortUrlResponse
     */
    public function deleteShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignName']             = $request->signName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSmsSignRequest $request
     *
     * @return DeleteSmsSignResponse
     */
    public function deleteSmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsSignWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['TemplateCode']         = $request->templateCode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'DeleteSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSmsTemplateRequest $request
     *
     * @return DeleteSmsTemplateResponse
     */
    public function deleteSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param GetMediaResourceIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMediaResourceIdResponse
     */
    public function getMediaResourceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['ExtendInfo']   = $request->extendInfo;
        $query['FileSize']     = $request->fileSize;
        $query['Memo']         = $request->memo;
        $query['OssKey']       = $request->ossKey;
        $query['ResourceType'] = $request->resourceType;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'GetMediaResourceId',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetMediaResourceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMediaResourceIdRequest $request
     *
     * @return GetMediaResourceIdResponse
     */
    public function getMediaResourceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaResourceIdWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplateWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetOSSInfoForCardTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetOSSInfoForCardTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return GetOSSInfoForCardTemplateResponse
     */
    public function getOSSInfoForCardTemplate()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOSSInfoForCardTemplateWithOptions($runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['NextToken']            = $request->nextToken;
        $query['OwnerId']              = $request->ownerId;
        $query['PageSize']             = $request->pageSize;
        $query['ProdCode']             = $request->prodCode;
        $query['RegionId']             = $request->regionId;
        $query['ResourceId']           = $request->resourceId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ResourceType']         = $request->resourceType;
        $query['Tag']                  = $request->tag;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmsSignRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['Remark']               = $request->remark;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignName']             = $request->signName;
        $query['SignSource']           = $request->signSource;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySmsSignRequest $request
     *
     * @return ModifySmsSignResponse
     */
    public function modifySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsSignWithOptions($request, $runtime);
    }

    /**
     * @param ModifySmsTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['Remark']               = $request->remark;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['TemplateCode']         = $request->templateCode;
        $query['TemplateContent']      = $request->templateContent;
        $query['TemplateName']         = $request->templateName;
        $query['TemplateType']         = $request->templateType;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'ModifySmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ModifySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifySmsTemplateRequest $request
     *
     * @return ModifySmsTemplateResponse
     */
    public function modifySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QueryCardSmsTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                 = [];
        $query['TemplateCode'] = $request->templateCode;
        $req                   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryCardSmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QueryCardSmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCardSmsTemplateRequest $request
     *
     * @return QueryCardSmsTemplateResponse
     */
    public function queryCardSmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCardSmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param QuerySendDetailsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['BizId']                = $request->bizId;
        $query['CurrentPage']          = $request->currentPage;
        $query['OwnerId']              = $request->ownerId;
        $query['PageSize']             = $request->pageSize;
        $query['PhoneNumber']          = $request->phoneNumber;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SendDate']             = $request->sendDate;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySendDetails',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySendDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySendDetailsRequest $request
     *
     * @return QuerySendDetailsResponse
     */
    public function querySendDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySendDetailsWithOptions($request, $runtime);
    }

    /**
     * @param QueryShortUrlRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QueryShortUrl',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryShortUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryShortUrlRequest $request
     *
     * @return QueryShortUrlResponse
     */
    public function queryShortUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryShortUrlWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsSignRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignName']             = $request->signName;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsSign',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySmsSignResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmsSignRequest $request
     *
     * @return QuerySmsSignResponse
     */
    public function querySmsSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsSignWithOptions($request, $runtime);
    }

    /**
     * @param QuerySmsTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['TemplateCode']         = $request->templateCode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'QuerySmsTemplate',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return QuerySmsTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QuerySmsTemplateRequest $request
     *
     * @return QuerySmsTemplateResponse
     */
    public function querySmsTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmsTemplateWithOptions($request, $runtime);
    }

    /**
     * @param SendBatchSmsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNumberJson']      = $request->phoneNumberJson;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignNameJson']         = $request->signNameJson;
        $query['SmsUpExtendCodeJson']  = $request->smsUpExtendCodeJson;
        $query['TemplateCode']         = $request->templateCode;
        $query['TemplateParamJson']    = $request->templateParamJson;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SendBatchSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendBatchSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendBatchSmsRequest $request
     *
     * @return SendBatchSmsResponse
     */
    public function sendBatchSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendBatchSmsWithOptions($request, $runtime);
    }

    /**
     * @param SendCardSmsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return SendCardSmsResponse
     */
    public function sendCardSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['CardObjects']          = $request->cardObjects;
        $query['CardTemplateCode']     = $request->cardTemplateCode;
        $query['DigitalTemplateCode']  = $request->digitalTemplateCode;
        $query['DigitalTemplateParam'] = $request->digitalTemplateParam;
        $query['FallbackType']         = $request->fallbackType;
        $query['OutId']                = $request->outId;
        $query['SignName']             = $request->signName;
        $query['SmsTemplateCode']      = $request->smsTemplateCode;
        $query['SmsTemplateParam']     = $request->smsTemplateParam;
        $query['SmsUpExtendCode']      = $request->smsUpExtendCode;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SendCardSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendCardSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendCardSmsRequest $request
     *
     * @return SendCardSmsResponse
     */
    public function sendCardSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendCardSmsWithOptions($request, $runtime);
    }

    /**
     * @param SendSmsRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SendSmsResponse
     */
    public function sendSmsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OutId']                = $request->outId;
        $query['OwnerId']              = $request->ownerId;
        $query['PhoneNumbers']         = $request->phoneNumbers;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['SignName']             = $request->signName;
        $query['SmsUpExtendCode']      = $request->smsUpExtendCode;
        $query['TemplateCode']         = $request->templateCode;
        $query['TemplateParam']        = $request->templateParam;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'SendSms',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SendSmsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SendSmsRequest $request
     *
     * @return SendSmsResponse
     */
    public function sendSms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendSmsWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['OwnerId']              = $request->ownerId;
        $query['ProdCode']             = $request->prodCode;
        $query['RegionId']             = $request->regionId;
        $query['ResourceId']           = $request->resourceId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ResourceType']         = $request->resourceType;
        $query['Tag']                  = $request->tag;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query                         = [];
        $query['All']                  = $request->all;
        $query['OwnerId']              = $request->ownerId;
        $query['ProdCode']             = $request->prodCode;
        $query['RegionId']             = $request->regionId;
        $query['ResourceId']           = $request->resourceId;
        $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        $query['ResourceOwnerId']      = $request->resourceOwnerId;
        $query['ResourceType']         = $request->resourceType;
        $query['TagKey']               = $request->tagKey;
        $req                           = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => Utils::toMap($request),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2017-05-25',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
