<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\CreateProjectRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\CreateProjectResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\CreateSlrRoleRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\CreateSlrRoleResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteMnsServeRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteMnsServeResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteUserGroupRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteUserGroupResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteUserInfoRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DeleteUserInfoResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeAllEndPointRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeAllEndPointResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeBindUserIdListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeBindUserIdListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeCertificateTypeListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeCertificateTypeListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeDeviceListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeDeviceListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeExcelAnalysisResultRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeExcelAnalysisResultResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeIdentifyRecordListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeIdentifyRecordListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeMnsOauthRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeMnsOauthResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeOssOauthRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeOssOauthResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeSignedUrlRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeSignedUrlResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeTopicRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeTopicResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUploadPreSignRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUploadPreSignResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserGroupListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserGroupListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserInfoListRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeUserInfoListResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\GetAccountProjectRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\GetAccountProjectResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveMnsServeRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveMnsServeResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveOssServeRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveOssServeResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveUserGroupRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveUserGroupResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveUserInfoRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\SaveUserInfoResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UnbindDeviceRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UnbindDeviceResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateDeviceControlInfoRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateDeviceControlInfoResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateDeviceNameRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateDeviceNameResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateProjectNameRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateProjectNameResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateUserGroupRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateUserGroupResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateUserInfoRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UpdateUserInfoResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UploadIdentifyRecordRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\UploadIdentifyRecordResponse;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\VerifyAccountProjectRequest;
use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\VerifyAccountProjectResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cloudauthconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cloudauth-console', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CreateProjectRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProjectResponse
     */
    public function createProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateProjectResponse::fromMap($this->doRPCRequest('CreateProject', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateProjectRequest $request
     *
     * @return CreateProjectResponse
     */
    public function createProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProjectWithOptions($request, $runtime);
    }

    /**
     * @param CreateSlrRoleRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateSlrRoleResponse
     */
    public function createSlrRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateSlrRoleResponse::fromMap($this->doRPCRequest('CreateSlrRole', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateSlrRoleRequest $request
     *
     * @return CreateSlrRoleResponse
     */
    public function createSlrRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSlrRoleWithOptions($request, $runtime);
    }

    /**
     * @param DeleteMnsServeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteMnsServeResponse
     */
    public function deleteMnsServeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteMnsServeResponse::fromMap($this->doRPCRequest('DeleteMnsServe', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteMnsServeRequest $request
     *
     * @return DeleteMnsServeResponse
     */
    public function deleteMnsServe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMnsServeWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserGroupResponse::fromMap($this->doRPCRequest('DeleteUserGroup', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserGroupRequest $request
     *
     * @return DeleteUserGroupResponse
     */
    public function deleteUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteUserInfoResponse
     */
    public function deleteUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserInfoResponse::fromMap($this->doRPCRequest('DeleteUserInfo', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserInfoRequest $request
     *
     * @return DeleteUserInfoResponse
     */
    public function deleteUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAllEndPointRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAllEndPointResponse
     */
    public function describeAllEndPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAllEndPointResponse::fromMap($this->doRPCRequest('DescribeAllEndPoint', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAllEndPointRequest $request
     *
     * @return DescribeAllEndPointResponse
     */
    public function describeAllEndPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAllEndPointWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBindUserIdListRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeBindUserIdListResponse
     */
    public function describeBindUserIdListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBindUserIdListResponse::fromMap($this->doRPCRequest('DescribeBindUserIdList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBindUserIdListRequest $request
     *
     * @return DescribeBindUserIdListResponse
     */
    public function describeBindUserIdList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBindUserIdListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCertificateTypeListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCertificateTypeListResponse
     */
    public function describeCertificateTypeListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCertificateTypeListResponse::fromMap($this->doRPCRequest('DescribeCertificateTypeList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCertificateTypeListRequest $request
     *
     * @return DescribeCertificateTypeListResponse
     */
    public function describeCertificateTypeList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCertificateTypeListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceListRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeDeviceListResponse
     */
    public function describeDeviceListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceListResponse::fromMap($this->doRPCRequest('DescribeDeviceList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceListRequest $request
     *
     * @return DescribeDeviceListResponse
     */
    public function describeDeviceList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeExcelAnalysisResultRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeExcelAnalysisResultResponse
     */
    public function describeExcelAnalysisResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeExcelAnalysisResultResponse::fromMap($this->doRPCRequest('DescribeExcelAnalysisResult', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeExcelAnalysisResultRequest $request
     *
     * @return DescribeExcelAnalysisResultResponse
     */
    public function describeExcelAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExcelAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * @param DescribeIdentifyRecordListRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeIdentifyRecordListResponse
     */
    public function describeIdentifyRecordListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeIdentifyRecordListResponse::fromMap($this->doRPCRequest('DescribeIdentifyRecordList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeIdentifyRecordListRequest $request
     *
     * @return DescribeIdentifyRecordListResponse
     */
    public function describeIdentifyRecordList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeIdentifyRecordListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMnsOauthRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeMnsOauthResponse
     */
    public function describeMnsOauthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMnsOauthResponse::fromMap($this->doRPCRequest('DescribeMnsOauth', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMnsOauthRequest $request
     *
     * @return DescribeMnsOauthResponse
     */
    public function describeMnsOauth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMnsOauthWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOssOauthRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeOssOauthResponse
     */
    public function describeOssOauthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeOssOauthResponse::fromMap($this->doRPCRequest('DescribeOssOauth', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeOssOauthRequest $request
     *
     * @return DescribeOssOauthResponse
     */
    public function describeOssOauth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOssOauthWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSignedUrlRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSignedUrlResponse
     */
    public function describeSignedUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeSignedUrlResponse::fromMap($this->doRPCRequest('DescribeSignedUrl', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeSignedUrlRequest $request
     *
     * @return DescribeSignedUrlResponse
     */
    public function describeSignedUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSignedUrlWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTopicRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeTopicResponse
     */
    public function describeTopicWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTopicResponse::fromMap($this->doRPCRequest('DescribeTopic', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTopicRequest $request
     *
     * @return DescribeTopicResponse
     */
    public function describeTopic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopicWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUploadPreSignRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUploadPreSignResponse
     */
    public function describeUploadPreSignWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUploadPreSignResponse::fromMap($this->doRPCRequest('DescribeUploadPreSign', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUploadPreSignRequest $request
     *
     * @return DescribeUploadPreSignResponse
     */
    public function describeUploadPreSign($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUploadPreSignWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserGroupListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUserGroupListResponse
     */
    public function describeUserGroupListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserGroupListResponse::fromMap($this->doRPCRequest('DescribeUserGroupList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserGroupListRequest $request
     *
     * @return DescribeUserGroupListResponse
     */
    public function describeUserGroupList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserGroupListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserInfoListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUserInfoListResponse
     */
    public function describeUserInfoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeUserInfoListResponse::fromMap($this->doRPCRequest('DescribeUserInfoList', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeUserInfoListRequest $request
     *
     * @return DescribeUserInfoListResponse
     */
    public function describeUserInfoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserInfoListWithOptions($request, $runtime);
    }

    /**
     * @param GetAccountProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetAccountProjectResponse
     */
    public function getAccountProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetAccountProjectResponse::fromMap($this->doRPCRequest('GetAccountProject', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetAccountProjectRequest $request
     *
     * @return GetAccountProjectResponse
     */
    public function getAccountProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAccountProjectWithOptions($request, $runtime);
    }

    /**
     * @param SaveMnsServeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveMnsServeResponse
     */
    public function saveMnsServeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveMnsServeResponse::fromMap($this->doRPCRequest('SaveMnsServe', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveMnsServeRequest $request
     *
     * @return SaveMnsServeResponse
     */
    public function saveMnsServe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveMnsServeWithOptions($request, $runtime);
    }

    /**
     * @param SaveOssServeRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveOssServeResponse
     */
    public function saveOssServeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveOssServeResponse::fromMap($this->doRPCRequest('SaveOssServe', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveOssServeRequest $request
     *
     * @return SaveOssServeResponse
     */
    public function saveOssServe($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveOssServeWithOptions($request, $runtime);
    }

    /**
     * @param SaveUserGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return SaveUserGroupResponse
     */
    public function saveUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveUserGroupResponse::fromMap($this->doRPCRequest('SaveUserGroup', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveUserGroupRequest $request
     *
     * @return SaveUserGroupResponse
     */
    public function saveUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param SaveUserInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SaveUserInfoResponse
     */
    public function saveUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SaveUserInfoResponse::fromMap($this->doRPCRequest('SaveUserInfo', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SaveUserInfoRequest $request
     *
     * @return SaveUserInfoResponse
     */
    public function saveUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindDeviceResponse::fromMap($this->doRPCRequest('UnbindDevice', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindDeviceRequest $request
     *
     * @return UnbindDeviceResponse
     */
    public function unbindDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceControlInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateDeviceControlInfoResponse
     */
    public function updateDeviceControlInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceControlInfoResponse::fromMap($this->doRPCRequest('UpdateDeviceControlInfo', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDeviceControlInfoRequest $request
     *
     * @return UpdateDeviceControlInfoResponse
     */
    public function updateDeviceControlInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceControlInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateDeviceNameRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateDeviceNameResponse
     */
    public function updateDeviceNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateDeviceNameResponse::fromMap($this->doRPCRequest('UpdateDeviceName', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateDeviceNameRequest $request
     *
     * @return UpdateDeviceNameResponse
     */
    public function updateDeviceName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateDeviceNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateProjectNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateProjectNameResponse
     */
    public function updateProjectNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateProjectNameResponse::fromMap($this->doRPCRequest('UpdateProjectName', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateProjectNameRequest $request
     *
     * @return UpdateProjectNameResponse
     */
    public function updateProjectName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProjectNameWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserGroupResponse::fromMap($this->doRPCRequest('UpdateUserGroup', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserGroupRequest $request
     *
     * @return UpdateUserGroupResponse
     */
    public function updateUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserGroupWithOptions($request, $runtime);
    }

    /**
     * @param UpdateUserInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateUserInfoResponse::fromMap($this->doRPCRequest('UpdateUserInfo', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateUserInfoRequest $request
     *
     * @return UpdateUserInfoResponse
     */
    public function updateUserInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateUserInfoWithOptions($request, $runtime);
    }

    /**
     * @param UploadIdentifyRecordRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UploadIdentifyRecordResponse
     */
    public function uploadIdentifyRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadIdentifyRecordResponse::fromMap($this->doRPCRequest('UploadIdentifyRecord', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadIdentifyRecordRequest $request
     *
     * @return UploadIdentifyRecordResponse
     */
    public function uploadIdentifyRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadIdentifyRecordWithOptions($request, $runtime);
    }

    /**
     * @param VerifyAccountProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return VerifyAccountProjectResponse
     */
    public function verifyAccountProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return VerifyAccountProjectResponse::fromMap($this->doRPCRequest('VerifyAccountProject', '2019-02-19', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param VerifyAccountProjectRequest $request
     *
     * @return VerifyAccountProjectResponse
     */
    public function verifyAccountProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyAccountProjectWithOptions($request, $runtime);
    }
}
