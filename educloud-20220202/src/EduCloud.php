<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduCloud\V20220202;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseLessonRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseLessonResponse;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeCourseResponse;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\DescribeLabResponse;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\GetLabTokenRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\GetLabTokenResponse;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\ListCoursesRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\ListCoursesResponse;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\ListLabsRequest;
use AlibabaCloud\SDK\EduCloud\V20220202\Models\ListLabsResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class EduCloud extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('educloud', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param DescribeCourseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeCourseResponse
     */
    public function describeCourseWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCourse',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCourseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCourseRequest $request
     *
     * @return DescribeCourseResponse
     */
    public function describeCourse($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCourseWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCourseLessonRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCourseLessonResponse
     */
    public function describeCourseLessonWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCourseLesson',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCourseLessonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCourseLessonRequest $request
     *
     * @return DescribeCourseLessonResponse
     */
    public function describeCourseLesson($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCourseLessonWithOptions($request, $runtime);
    }

    /**
     * @param DescribeLabRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeLabResponse
     */
    public function describeLabWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLab',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeLabRequest $request
     *
     * @return DescribeLabResponse
     */
    public function describeLab($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabWithOptions($request, $runtime);
    }

    /**
     * @param GetLabTokenRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetLabTokenResponse
     */
    public function getLabTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLabToken',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetLabTokenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLabTokenRequest $request
     *
     * @return GetLabTokenResponse
     */
    public function getLabToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLabTokenWithOptions($request, $runtime);
    }

    /**
     * @param ListCoursesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListCoursesResponse
     */
    public function listCoursesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCourses',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCoursesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCoursesRequest $request
     *
     * @return ListCoursesResponse
     */
    public function listCourses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCoursesWithOptions($request, $runtime);
    }

    /**
     * @param ListLabsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListLabsResponse
     */
    public function listLabsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLabs',
            'version'     => '2022-02-02',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListLabsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListLabsRequest $request
     *
     * @return ListLabsResponse
     */
    public function listLabs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLabsWithOptions($request, $runtime);
    }
}
