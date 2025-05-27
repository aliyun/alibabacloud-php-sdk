<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabReservationResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabSessionRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\CreateLabSessionResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseLessonRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseLessonResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabReservationResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeLabSessionResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\ListCoursesRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\ListCoursesResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabReservationsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabReservationsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabSessionsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabSessionsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabsRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabsResponse;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\RemoveLabReservationRequest;
use AlibabaCloud\SDK\EduEmbed\V20240101\Models\RemoveLabReservationResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class EduEmbed extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eduembed', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * 创建实验预约.
     *
     * @param request - CreateLabReservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLabReservationResponse
     *
     * @param CreateLabReservationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateLabReservationResponse
     */
    public function createLabReservationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->labId) {
            @$body['LabId'] = $request->labId;
        }

        if (null !== $request->memberCount) {
            @$body['MemberCount'] = $request->memberCount;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLabReservation',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验预约.
     *
     * @param request - CreateLabReservationRequest
     *
     * @returns CreateLabReservationResponse
     *
     * @param CreateLabReservationRequest $request
     *
     * @return CreateLabReservationResponse
     */
    public function createLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabReservationWithOptions($request, $runtime);
    }

    /**
     * 创建实验会话.
     *
     * @param request - CreateLabSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLabSessionResponse
     *
     * @param CreateLabSessionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateLabSessionResponse
     */
    public function createLabSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->labId) {
            @$body['LabId'] = $request->labId;
        }

        if (null !== $request->ramAccountId) {
            @$body['RamAccountId'] = $request->ramAccountId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateLabSession',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLabSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建实验会话.
     *
     * @param request - CreateLabSessionRequest
     *
     * @returns CreateLabSessionResponse
     *
     * @param CreateLabSessionRequest $request
     *
     * @return CreateLabSessionResponse
     */
    public function createLabSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLabSessionWithOptions($request, $runtime);
    }

    /**
     * 查看课程详情.
     *
     * @param request - DescribeCourseRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCourseResponse
     *
     * @param DescribeCourseRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeCourseResponse
     */
    public function describeCourseWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->courseId) {
            @$query['CourseId'] = $request->courseId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCourse',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCourseResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看课程详情.
     *
     * @param request - DescribeCourseRequest
     *
     * @returns DescribeCourseResponse
     *
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
     * 查看课程课时详情.
     *
     * @param request - DescribeCourseLessonRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCourseLessonResponse
     *
     * @param DescribeCourseLessonRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeCourseLessonResponse
     */
    public function describeCourseLessonWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lessonId) {
            @$query['LessonId'] = $request->lessonId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCourseLesson',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCourseLessonResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看课程课时详情.
     *
     * @param request - DescribeCourseLessonRequest
     *
     * @returns DescribeCourseLessonResponse
     *
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
     * 查看实验详情.
     *
     * @param request - DescribeLabRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLabResponse
     *
     * @param DescribeLabRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeLabResponse
     */
    public function describeLabWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLab',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLabResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实验详情.
     *
     * @param request - DescribeLabRequest
     *
     * @returns DescribeLabResponse
     *
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
     * 查询实验预约.
     *
     * @param request - DescribeLabReservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLabReservationResponse
     *
     * @param DescribeLabReservationRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeLabReservationResponse
     */
    public function describeLabReservationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLabReservation',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实验预约.
     *
     * @param request - DescribeLabReservationRequest
     *
     * @returns DescribeLabReservationResponse
     *
     * @param DescribeLabReservationRequest $request
     *
     * @return DescribeLabReservationResponse
     */
    public function describeLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabReservationWithOptions($request, $runtime);
    }

    /**
     * 查看实验会话信息.
     *
     * @param request - DescribeLabSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLabSessionResponse
     *
     * @param DescribeLabSessionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeLabSessionResponse
     */
    public function describeLabSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLabSession',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLabSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看实验会话信息.
     *
     * @param request - DescribeLabSessionRequest
     *
     * @returns DescribeLabSessionResponse
     *
     * @param DescribeLabSessionRequest $request
     *
     * @return DescribeLabSessionResponse
     */
    public function describeLabSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLabSessionWithOptions($request, $runtime);
    }

    /**
     * 查看课程列表.
     *
     * @param request - ListCoursesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCoursesResponse
     *
     * @param ListCoursesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListCoursesResponse
     */
    public function listCoursesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->page) {
            @$query['Page'] = $request->page;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCourses',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCoursesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查看课程列表.
     *
     * @param request - ListCoursesRequest
     *
     * @returns ListCoursesResponse
     *
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
     * 分页查询实验预约.
     *
     * @param request - PageListLabReservationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageListLabReservationsResponse
     *
     * @param PageListLabReservationsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return PageListLabReservationsResponse
     */
    public function pageListLabReservationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageListLabReservations',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageListLabReservationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询实验预约.
     *
     * @param request - PageListLabReservationsRequest
     *
     * @returns PageListLabReservationsResponse
     *
     * @param PageListLabReservationsRequest $request
     *
     * @return PageListLabReservationsResponse
     */
    public function pageListLabReservations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabReservationsWithOptions($request, $runtime);
    }

    /**
     * 分页查询实验会话.
     *
     * @param request - PageListLabSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageListLabSessionsResponse
     *
     * @param PageListLabSessionsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PageListLabSessionsResponse
     */
    public function pageListLabSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageListLabSessions',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageListLabSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询实验会话.
     *
     * @param request - PageListLabSessionsRequest
     *
     * @returns PageListLabSessionsResponse
     *
     * @param PageListLabSessionsRequest $request
     *
     * @return PageListLabSessionsResponse
     */
    public function pageListLabSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabSessionsWithOptions($request, $runtime);
    }

    /**
     * 分页查询实验.
     *
     * @param request - PageListLabsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PageListLabsResponse
     *
     * @param PageListLabsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PageListLabsResponse
     */
    public function pageListLabsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PageListLabs',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PageListLabsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询实验.
     *
     * @param request - PageListLabsRequest
     *
     * @returns PageListLabsResponse
     *
     * @param PageListLabsRequest $request
     *
     * @return PageListLabsResponse
     */
    public function pageListLabs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListLabsWithOptions($request, $runtime);
    }

    /**
     * 移除实验预约.
     *
     * @param request - RemoveLabReservationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveLabReservationResponse
     *
     * @param RemoveLabReservationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveLabReservationResponse
     */
    public function removeLabReservationWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accountId) {
            @$body['AccountId'] = $request->accountId;
        }

        if (null !== $request->labReservationId) {
            @$body['LabReservationId'] = $request->labReservationId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RemoveLabReservation',
            'version' => '2024-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveLabReservationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除实验预约.
     *
     * @param request - RemoveLabReservationRequest
     *
     * @returns RemoveLabReservationResponse
     *
     * @param RemoveLabReservationRequest $request
     *
     * @return RemoveLabReservationResponse
     */
    public function removeLabReservation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeLabReservationWithOptions($request, $runtime);
    }
}
