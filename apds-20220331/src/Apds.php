<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateFileJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateFileJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationGroupRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationGroupResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateMigrationJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateSurveyJobOfflineRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateSurveyJobOfflineResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateSurveyJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\CreateSurveyJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteMigrationGroupRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteMigrationGroupResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteMigrationJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteMigrationJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteOssFileRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteOssFileResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteSurveyJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteSurveyJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteSurveyResourcesRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DeleteSurveyResourcesResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeMigrationJobConfigResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeMigrationJobCountRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeMigrationJobCountResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeOssStsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeOssStsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSummaryByStatusAndGroupRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSummaryByStatusAndGroupResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSummaryByStatusRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSummaryByStatusResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyJobCountRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyJobCountResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyResourceTagResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyTemplateRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\DescribeSurveyTemplateResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListMigrationJobsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListMigrationJobsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListRegionsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyJobDownLoadJobsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyJobDownLoadJobsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyJobsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyJobsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceByMigrationGroupsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceByMigrationGroupsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceByMigrationGroupsShrinkRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceConnectionsRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceConnectionsResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourcesDetailRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourcesDetailResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceTypesRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\ListSurveyResourceTypesResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\RecoverMigrationJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\RecoverMigrationJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\StopSyncMigrationJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\StopSyncMigrationJobResponse;
use AlibabaCloud\SDK\Apds\V20220331\Models\SyncMigrationJobRequest;
use AlibabaCloud\SDK\Apds\V20220331\Models\SyncMigrationJobResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Apds extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('apds', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateFileJobRequest $request
     *
     * @return CreateFileJobResponse
     */
    public function createFileJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createFileJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateFileJobRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateFileJobResponse
     */
    public function createFileJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->surveyJobId)) {
            $body['surveyJobId'] = $request->surveyJobId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateFileJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/file-job/create',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateFileJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMigrationGroupRequest $request
     *
     * @return CreateMigrationGroupResponse
     */
    public function createMigrationGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMigrationGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateMigrationGroupRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return CreateMigrationGroupResponse
     */
    public function createMigrationGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->id)) {
            $body['id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMigrationGroup',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-group/save-migration-group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMigrationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMigrationJobRequest $request
     *
     * @return CreateMigrationJobResponse
     */
    public function createMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createMigrationJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateMigrationJobRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return CreateMigrationJobResponse
     */
    public function createMigrationJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->migrationJobList)) {
            $body['migrationJobList'] = $request->migrationJobList;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMigrationJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/create-migration-jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSurveyJobRequest $request
     *
     * @return CreateSurveyJobResponse
     */
    public function createSurveyJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSurveyJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSurveyJobRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSurveyJobResponse
     */
    public function createSurveyJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceTypeList)) {
            $body['ResourceTypeList'] = $request->resourceTypeList;
        }
        if (!Utils::isUnset($request->ak)) {
            $body['ak'] = $request->ak;
        }
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $body['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->sk)) {
            $body['sk'] = $request->sk;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $body['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSurveyJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/add-survey-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSurveyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSurveyJobOfflineRequest $request
     *
     * @return CreateSurveyJobOfflineResponse
     */
    public function createSurveyJobOffline($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createSurveyJobOfflineWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSurveyJobOfflineRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSurveyJobOfflineResponse
     */
    public function createSurveyJobOfflineWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $body['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectName)) {
            $body['objectName'] = $request->objectName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSurveyJobOffline',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/add-import-survey-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateSurveyJobOfflineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMigrationGroupRequest $request
     *
     * @return DeleteMigrationGroupResponse
     */
    public function deleteMigrationGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMigrationGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMigrationGroupRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteMigrationGroupResponse
     */
    public function deleteMigrationGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMigrationGroup',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-group/remove-migration-group',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMigrationGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMigrationJobRequest $request
     *
     * @return DeleteMigrationJobResponse
     */
    public function deleteMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteMigrationJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMigrationJobRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteMigrationJobResponse
     */
    public function deleteMigrationJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMigrationJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/remove-migration-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteOssFileRequest $request
     *
     * @return DeleteOssFileResponse
     */
    public function deleteOssFile($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteOssFileWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteOssFileRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteOssFileResponse
     */
    public function deleteOssFileWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->objectName)) {
            $query['objectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOssFile',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/file-job/delete-file',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteOssFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSurveyJobRequest $request
     *
     * @return DeleteSurveyJobResponse
     */
    public function deleteSurveyJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSurveyJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSurveyJobRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSurveyJobResponse
     */
    public function deleteSurveyJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSurveyJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/delete-survey-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSurveyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSurveyResourcesRequest $request
     *
     * @return DeleteSurveyResourcesResponse
     */
    public function deleteSurveyResources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteSurveyResourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSurveyResourcesRequest $request
     * @param string[]                     $headers
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSurveyResourcesResponse
     */
    public function deleteSurveyResourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ids)) {
            $query['ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSurveyResources',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/confirm-resource/destroy',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteSurveyResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeMigrationJobConfigResponse
     */
    public function describeMigrationJobConfig()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMigrationJobConfigWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeMigrationJobConfigResponse
     */
    public function describeMigrationJobConfigWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationJobConfig',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/describe-migration-job-config',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMigrationJobCountRequest $request
     *
     * @return DescribeMigrationJobCountResponse
     */
    public function describeMigrationJobCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeMigrationJobCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeMigrationJobCountRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMigrationJobCountResponse
     */
    public function describeMigrationJobCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeMigrationJobCount',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/count-migration-jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeMigrationJobCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeOssStsRequest $request
     *
     * @return DescribeOssStsResponse
     */
    public function describeOssSts($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeOssStsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeOssStsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeOssStsResponse
     */
    public function describeOssStsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ak)) {
            $query['ak'] = $request->ak;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $query['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sk)) {
            $query['sk'] = $request->sk;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOssSts',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/file-job/sts',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeOssStsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSummaryByStatusRequest $request
     *
     * @return DescribeSummaryByStatusResponse
     */
    public function describeSummaryByStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSummaryByStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeSummaryByStatusRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSummaryByStatusResponse
     */
    public function describeSummaryByStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSummaryByStatus',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/summary/summary-by-status',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSummaryByStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSummaryByStatusAndGroupRequest $request
     *
     * @return DescribeSummaryByStatusAndGroupResponse
     */
    public function describeSummaryByStatusAndGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSummaryByStatusAndGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeSummaryByStatusAndGroupRequest $request
     * @param string[]                               $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSummaryByStatusAndGroupResponse
     */
    public function describeSummaryByStatusAndGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSummaryByStatusAndGroup',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/summary/summary-by-status-and-region',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSummaryByStatusAndGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSurveyJobRequest $request
     *
     * @return DescribeSurveyJobResponse
     */
    public function describeSurveyJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSurveyJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeSurveyJobRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSurveyJobResponse
     */
    public function describeSurveyJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSurveyJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/query-survey-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSurveyJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSurveyJobCountRequest $request
     *
     * @return DescribeSurveyJobCountResponse
     */
    public function describeSurveyJobCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSurveyJobCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeSurveyJobCountRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSurveyJobCountResponse
     */
    public function describeSurveyJobCountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSurveyJobCount',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/count-survey-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSurveyJobCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return DescribeSurveyResourceTagResponse
     */
    public function describeSurveyResourceTag()
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSurveyResourceTagWithOptions($headers, $runtime);
    }

    /**
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DescribeSurveyResourceTagResponse
     */
    public function describeSurveyResourceTagWithOptions($headers, $runtime)
    {
        $req = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DescribeSurveyResourceTag',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/confirm-resource/get-resource-tag',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSurveyResourceTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeSurveyTemplateRequest $request
     *
     * @return DescribeSurveyTemplateResponse
     */
    public function describeSurveyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->describeSurveyTemplateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DescribeSurveyTemplateRequest $request
     * @param string[]                      $headers
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSurveyTemplateResponse
     */
    public function describeSurveyTemplateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->resourceType)) {
            $query['resourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSurveyTemplate',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/survey-template/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DescribeSurveyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListMigrationJobsRequest $request
     *
     * @return ListMigrationJobsResponse
     */
    public function listMigrationJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listMigrationJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListMigrationJobsRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return ListMigrationJobsResponse
     */
    public function listMigrationJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortCol)) {
            $body['sortCol'] = $request->sortCol;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['sortType'] = $request->sortType;
        }
        if (!Utils::isUnset($request->source)) {
            $body['source'] = $request->source;
        }
        if (!Utils::isUnset($request->type)) {
            $body['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMigrationJobs',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/describe-migration-jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListMigrationJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListRegionsRequest $request
     *
     * @return ListRegionsResponse
     */
    public function listRegions($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listRegionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListRegionsRequest $request
     * @param string[]           $headers
     * @param RuntimeOptions     $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ak)) {
            $query['ak'] = $request->ak;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $query['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sk)) {
            $query['sk'] = $request->sk;
        }
        if (!Utils::isUnset($request->tenantId)) {
            $query['tenantId'] = $request->tenantId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/query-region',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyJobDownLoadJobsRequest $request
     *
     * @return ListSurveyJobDownLoadJobsResponse
     */
    public function listSurveyJobDownLoadJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyJobDownLoadJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyJobDownLoadJobsRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSurveyJobDownLoadJobsResponse
     */
    public function listSurveyJobDownLoadJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->pageNum)) {
            $body['pageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortCol)) {
            $body['sortCol'] = $request->sortCol;
        }
        if (!Utils::isUnset($request->sortType)) {
            $body['sortType'] = $request->sortType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyJobDownLoadJobs',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/file-job/list',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyJobDownLoadJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyJobsRequest $request
     *
     * @return ListSurveyJobsResponse
     */
    public function listSurveyJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyJobsRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return ListSurveyJobsResponse
     */
    public function listSurveyJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->channel)) {
            $body['channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $body['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->fileName)) {
            $body['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->name)) {
            $body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->objectName)) {
            $body['objectName'] = $request->objectName;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyJobs',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/query-survey-jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyResourceByMigrationGroupsRequest $request
     *
     * @return ListSurveyResourceByMigrationGroupsResponse
     */
    public function listSurveyResourceByMigrationGroups($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyResourceByMigrationGroupsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyResourceByMigrationGroupsRequest $tmpReq
     * @param string[]                                   $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return ListSurveyResourceByMigrationGroupsResponse
     */
    public function listSurveyResourceByMigrationGroupsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListSurveyResourceByMigrationGroupsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->body)) {
            $request->bodyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->body), 'body', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->bodyShrink)) {
            $query['body'] = $request->bodyShrink;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyResourceByMigrationGroups',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-group/get-survey-resource',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyResourceByMigrationGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyResourceConnectionsRequest $request
     *
     * @return ListSurveyResourceConnectionsResponse
     */
    public function listSurveyResourceConnections($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyResourceConnectionsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyResourceConnectionsRequest $request
     * @param string[]                             $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return ListSurveyResourceConnectionsResponse
     */
    public function listSurveyResourceConnectionsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->ids)) {
            $body['ids'] = $request->ids;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyResourceConnections',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/resource-connects',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyResourceConnectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyResourceTypesRequest $request
     *
     * @return ListSurveyResourceTypesResponse
     */
    public function listSurveyResourceTypes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyResourceTypesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyResourceTypesRequest $request
     * @param string[]                       $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return ListSurveyResourceTypesResponse
     */
    public function listSurveyResourceTypesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ak)) {
            $query['ak'] = $request->ak;
        }
        if (!Utils::isUnset($request->cloudType)) {
            $query['cloudType'] = $request->cloudType;
        }
        if (!Utils::isUnset($request->region)) {
            $query['region'] = $request->region;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sk)) {
            $query['sk'] = $request->sk;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyResourceTypes',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/winback/query-resource-type',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyResourceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListSurveyResourcesDetailRequest $request
     *
     * @return ListSurveyResourcesDetailResponse
     */
    public function listSurveyResourcesDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listSurveyResourcesDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListSurveyResourcesDetailRequest $request
     * @param string[]                         $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return ListSurveyResourcesDetailResponse
     */
    public function listSurveyResourcesDetailWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->ip)) {
            $body['ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['jobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->projectId)) {
            $body['projectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $body['resourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->subProjectId)) {
            $body['subProjectId'] = $request->subProjectId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListSurveyResourcesDetail',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/survey-detail/query',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListSurveyResourcesDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RecoverMigrationJobRequest $request
     *
     * @return RecoverMigrationJobResponse
     */
    public function recoverMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->recoverMigrationJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RecoverMigrationJobRequest $request
     * @param string[]                   $headers
     * @param RuntimeOptions             $runtime
     *
     * @return RecoverMigrationJobResponse
     */
    public function recoverMigrationJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['id'] = $request->id;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverMigrationJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/recover-migration-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return RecoverMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopSyncMigrationJobRequest $request
     *
     * @return StopSyncMigrationJobResponse
     */
    public function stopSyncMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopSyncMigrationJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopSyncMigrationJobRequest $request
     * @param string[]                    $headers
     * @param RuntimeOptions              $runtime
     *
     * @return StopSyncMigrationJobResponse
     */
    public function stopSyncMigrationJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobType)) {
            $query['jobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopSyncMigrationJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/unsync-migration-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopSyncMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncMigrationJobRequest $request
     *
     * @return SyncMigrationJobResponse
     */
    public function syncMigrationJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->syncMigrationJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SyncMigrationJobRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return SyncMigrationJobResponse
     */
    public function syncMigrationJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobType)) {
            $query['jobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['regionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->regions)) {
            $query['regions'] = $request->regions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncMigrationJob',
            'version'     => '2022-03-31',
            'protocol'    => 'HTTPS',
            'pathname'    => '/okss-services/migration-job/sync-migration-job',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return SyncMigrationJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
