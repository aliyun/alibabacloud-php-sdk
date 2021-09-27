<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20210325;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateScheduleRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateScheduleResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateSignatureRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\DeleteScheduleResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\DeleteSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\GetSignatureResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\GetTemplateResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListSchedulesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListSchedulesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListSignaturesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListSignaturesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\PaiPlugin\V20210325\Models\UploadMediaByURLResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class PaiPlugin extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('paiplugin', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateSignatureRequest $request
     *
     * @return CreateSignatureResponse
     */
    public function createSignature($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSignatureWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSignatureRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSignatureResponse
     */
    public function createSignatureWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->certificates)) {
            @$body['Certificates'] = $request->certificates;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->powerOfAttorney)) {
            @$body['PowerOfAttorney'] = $request->powerOfAttorney;
        }
        if (!Utils::isUnset($request->processInstanceID)) {
            @$body['ProcessInstanceID'] = $request->processInstanceID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateSignatureResponse::fromMap($this->doROARequest('CreateSignature', '2021-03-25', 'HTTPS', 'POST', 'AK', '/api/v1/signatures', 'json', $req, $runtime));
    }

    /**
     * @param string $ID
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($ID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTemplateWithOptions($ID, $headers, $runtime);
    }

    /**
     * @param string         $ID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($ID, $headers, $runtime)
    {
        $ID  = OpenApiUtilClient::getEncodeParam($ID);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteTemplateResponse::fromMap($this->doROARequest('DeleteTemplate', '2021-03-25', 'HTTPS', 'DELETE', 'AK', '/api/v1/templates/' . $ID . '', 'json', $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->content)) {
            @$body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->processInstanceID)) {
            @$body['ProcessInstanceID'] = $request->processInstanceID;
        }
        if (!Utils::isUnset($request->signatureID)) {
            @$body['SignatureID'] = $request->signatureID;
        }
        if (!Utils::isUnset($request->type)) {
            @$body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateTemplateResponse::fromMap($this->doROARequest('CreateTemplate', '2021-03-25', 'HTTPS', 'POST', 'AK', '/api/v1/templates', 'json', $req, $runtime));
    }

    /**
     * @param ListTemplatesRequest $request
     *
     * @return ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTemplatesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTemplatesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListTemplatesResponse::fromMap($this->doROARequest('ListTemplates', '2021-03-25', 'HTTPS', 'GET', 'AK', '/api/v1/templates', 'json', $req, $runtime));
    }

    /**
     * @param string $ID
     *
     * @return DeleteScheduleResponse
     */
    public function deleteSchedule($ID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteScheduleWithOptions($ID, $headers, $runtime);
    }

    /**
     * @param string         $ID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteScheduleResponse
     */
    public function deleteScheduleWithOptions($ID, $headers, $runtime)
    {
        $ID  = OpenApiUtilClient::getEncodeParam($ID);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteScheduleResponse::fromMap($this->doROARequest('DeleteSchedule', '2021-03-25', 'HTTPS', 'DELETE', 'AK', '/api/v1/schedules/' . $ID . '', 'json', $req, $runtime));
    }

    /**
     * @param string $ID
     *
     * @return GetTemplateResponse
     */
    public function getTemplate($ID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTemplateWithOptions($ID, $headers, $runtime);
    }

    /**
     * @param string         $ID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($ID, $headers, $runtime)
    {
        $ID  = OpenApiUtilClient::getEncodeParam($ID);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetTemplateResponse::fromMap($this->doROARequest('GetTemplate', '2021-03-25', 'HTTPS', 'GET', 'AK', '/api/v1/templates/' . $ID . '', 'json', $req, $runtime));
    }

    /**
     * @param ListSignaturesRequest $request
     *
     * @return ListSignaturesResponse
     */
    public function listSignatures($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSignaturesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSignaturesRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSignaturesResponse
     */
    public function listSignaturesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSignaturesResponse::fromMap($this->doROARequest('ListSignatures', '2021-03-25', 'HTTPS', 'GET', 'AK', '/api/v1/signatures', 'json', $req, $runtime));
    }

    /**
     * @param string $ID
     *
     * @return GetSignatureResponse
     */
    public function getSignature($ID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSignatureWithOptions($ID, $headers, $runtime);
    }

    /**
     * @param string         $ID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetSignatureResponse
     */
    public function getSignatureWithOptions($ID, $headers, $runtime)
    {
        $ID  = OpenApiUtilClient::getEncodeParam($ID);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return GetSignatureResponse::fromMap($this->doROARequest('GetSignature', '2021-03-25', 'HTTPS', 'GET', 'AK', '/api/v1/signatures/' . $ID . '', 'json', $req, $runtime));
    }

    /**
     * @param CreateScheduleRequest $request
     *
     * @return CreateScheduleResponse
     */
    public function createSchedule($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createScheduleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateScheduleRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateScheduleResponse
     */
    public function createScheduleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataAddress)) {
            @$body['DataAddress'] = $request->dataAddress;
        }
        if (!Utils::isUnset($request->dataSource)) {
            @$body['DataSource'] = $request->dataSource;
        }
        if (!Utils::isUnset($request->dingBotKeyword)) {
            @$body['DingBotKeyword'] = $request->dingBotKeyword;
        }
        if (!Utils::isUnset($request->dingBotToken)) {
            @$body['DingBotToken'] = $request->dingBotToken;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->partition)) {
            @$body['Partition'] = $request->partition;
        }
        if (!Utils::isUnset($request->phoneNumberColumn)) {
            @$body['PhoneNumberColumn'] = $request->phoneNumberColumn;
        }
        if (!Utils::isUnset($request->sendTime)) {
            @$body['SendTime'] = $request->sendTime;
        }
        if (!Utils::isUnset($request->signatureID)) {
            @$body['SignatureID'] = $request->signatureID;
        }
        if (!Utils::isUnset($request->templateCodeColumn)) {
            @$body['TemplateCodeColumn'] = $request->templateCodeColumn;
        }
        if (!Utils::isUnset($request->templateID)) {
            @$body['TemplateID'] = $request->templateID;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateScheduleResponse::fromMap($this->doROARequest('CreateSchedule', '2021-03-25', 'HTTPS', 'POST', 'AK', '/api/v1/schedules', 'json', $req, $runtime));
    }

    /**
     * @param ListSchedulesRequest $request
     *
     * @return ListSchedulesResponse
     */
    public function listSchedules($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSchedulesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSchedulesRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            @$query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return ListSchedulesResponse::fromMap($this->doROARequest('ListSchedules', '2021-03-25', 'HTTPS', 'GET', 'AK', '/api/v1/schedules', 'json', $req, $runtime));
    }

    /**
     * @param UploadMediaByURLRequest $request
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURL($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->uploadMediaByURLWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UploadMediaByURLRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->uploadMetadatas)) {
            @$body['UploadMetadatas'] = $request->uploadMetadatas;
        }
        if (!Utils::isUnset($request->uploadURLs)) {
            @$body['UploadURLs'] = $request->uploadURLs;
        }
        if (!Utils::isUnset($request->userData)) {
            @$body['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UploadMediaByURLResponse::fromMap($this->doROARequest('UploadMediaByURL', '2021-03-25', 'HTTPS', 'POST', 'AK', '/api/v1/media/api/v1/video/upload', 'json', $req, $runtime));
    }

    /**
     * @param string $ID
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignature($ID)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSignatureWithOptions($ID, $headers, $runtime);
    }

    /**
     * @param string         $ID
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteSignatureResponse
     */
    public function deleteSignatureWithOptions($ID, $headers, $runtime)
    {
        $ID  = OpenApiUtilClient::getEncodeParam($ID);
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);

        return DeleteSignatureResponse::fromMap($this->doROARequest('DeleteSignature', '2021-03-25', 'HTTPS', 'DELETE', 'AK', '/api/v1/signatures/' . $ID . '', 'json', $req, $runtime));
    }
}
