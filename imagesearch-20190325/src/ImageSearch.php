<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20190325;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\AddImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\AddImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\DeleteImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\DeleteImageResponse;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageRequest;
use AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class ImageSearch extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imagesearch', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddImageRequest $request
     *
     * @return AddImageResponse
     */
    public function addImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->addImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddImageRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return AddImageResponse
     */
    public function addImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            @$body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->crop)) {
            @$body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->customContent)) {
            @$body['CustomContent'] = $request->customContent;
        }
        if (!Utils::isUnset($request->instanceName)) {
            @$body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->intAttr)) {
            @$body['IntAttr'] = $request->intAttr;
        }
        if (!Utils::isUnset($request->picContent)) {
            @$body['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->picName)) {
            @$body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            @$body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            @$body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->strAttr)) {
            @$body['StrAttr'] = $request->strAttr;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return AddImageResponse::fromMap($this->doROARequestWithForm('AddImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/add', 'json', $req, $runtime));
    }

    /**
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceName)) {
            @$body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->picName)) {
            @$body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            @$body['ProductId'] = $request->productId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteImageResponse::fromMap($this->doROARequestWithForm('DeleteImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/delete', 'json', $req, $runtime));
    }

    /**
     * @param SearchImageRequest $request
     *
     * @return SearchImageResponse
     */
    public function searchImage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->searchImageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SearchImageRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SearchImageResponse
     */
    public function searchImageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->categoryId)) {
            @$body['CategoryId'] = $request->categoryId;
        }
        if (!Utils::isUnset($request->crop)) {
            @$body['Crop'] = $request->crop;
        }
        if (!Utils::isUnset($request->filter)) {
            @$body['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->instanceName)) {
            @$body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->num)) {
            @$body['Num'] = $request->num;
        }
        if (!Utils::isUnset($request->picContent)) {
            @$body['PicContent'] = $request->picContent;
        }
        if (!Utils::isUnset($request->picName)) {
            @$body['PicName'] = $request->picName;
        }
        if (!Utils::isUnset($request->productId)) {
            @$body['ProductId'] = $request->productId;
        }
        if (!Utils::isUnset($request->region)) {
            @$body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->start)) {
            @$body['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return SearchImageResponse::fromMap($this->doROARequestWithForm('SearchImage', '2019-03-25', 'HTTPS', 'POST', 'AK', '/v2/image/search', 'json', $req, $runtime));
    }
}
