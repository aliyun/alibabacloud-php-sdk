<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindPurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindPurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchSetVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchSetVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindPurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindPurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindParentPlatformDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindParentPlatformDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindPurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindPurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceAlarmRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceAlarmResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteBucketRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteBucketResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceGatewayRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceGatewayResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamVodListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamVodListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVodStreamURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVodStreamURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateDetailRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateDetailResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqBpsDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqBpsDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainTrafficDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainTrafficDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListDeviceRecordsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListDeviceRecordsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListObjectsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListObjectsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceAlarmRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceAlarmResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceCaptureRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceCaptureResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\OpenVsServiceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PrepareUploadRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PrepareUploadResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PutBucketRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PutBucketResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetPresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetPresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsDomainCertificateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsDomainCertificateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRecordStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRecordStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartTransferStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartTransferStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopAdjustRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopAdjustResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopMoveRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopMoveResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRecordStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRecordStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopTransferStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopTransferStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncCatalogsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncCatalogsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindParentPlatformDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindParentPlatformDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindPurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindPurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateBucketInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateBucketInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadDeviceRecordRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadDeviceRecordResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Vs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddDeviceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AddDeviceResponse
     */
    public function addDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddDeviceResponse::fromMap($this->doRPCRequest('AddDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddDeviceRequest $request
     *
     * @return AddDeviceResponse
     */
    public function addDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddVsPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('AddVsPullStreamInfoConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddVsPullStreamInfoConfigRequest $request
     *
     * @return AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindDirectoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchBindDirectoriesResponse
     */
    public function batchBindDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindDirectoriesResponse::fromMap($this->doRPCRequest('BatchBindDirectories', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchBindDirectoriesRequest $request
     *
     * @return BatchBindDirectoriesResponse
     */
    public function batchBindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindParentPlatformDevicesResponse::fromMap($this->doRPCRequest('BatchBindParentPlatformDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchBindParentPlatformDevicesRequest $request
     *
     * @return BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindPurchasedDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindPurchasedDevicesResponse::fromMap($this->doRPCRequest('BatchBindPurchasedDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchBindPurchasedDevicesRequest $request
     *
     * @return BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchBindTemplateResponse
     */
    public function batchBindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindTemplateResponse::fromMap($this->doRPCRequest('BatchBindTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchBindTemplateRequest $request
     *
     * @return BatchBindTemplateResponse
     */
    public function batchBindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchBindTemplatesResponse
     */
    public function batchBindTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchBindTemplatesResponse::fromMap($this->doRPCRequest('BatchBindTemplates', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchBindTemplatesRequest $request
     *
     * @return BatchBindTemplatesResponse
     */
    public function batchBindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchDeleteDevicesResponse
     */
    public function batchDeleteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteDevicesResponse::fromMap($this->doRPCRequest('BatchDeleteDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchDeleteDevicesRequest $request
     *
     * @return BatchDeleteDevicesResponse
     */
    public function batchDeleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteVsDomainConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchDeleteVsDomainConfigsResponse::fromMap($this->doRPCRequest('BatchDeleteVsDomainConfigs', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchDeleteVsDomainConfigsRequest $request
     *
     * @return BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchForbidVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchForbidVsStreamResponse
     */
    public function batchForbidVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchForbidVsStreamResponse::fromMap($this->doRPCRequest('BatchForbidVsStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchForbidVsStreamRequest $request
     *
     * @return BatchForbidVsStreamResponse
     */
    public function batchForbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchForbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchResumeVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchResumeVsStreamResponse
     */
    public function batchResumeVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchResumeVsStreamResponse::fromMap($this->doRPCRequest('BatchResumeVsStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchResumeVsStreamRequest $request
     *
     * @return BatchResumeVsStreamResponse
     */
    public function batchResumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchResumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchSetVsDomainConfigsResponse::fromMap($this->doRPCRequest('BatchSetVsDomainConfigs', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchSetVsDomainConfigsRequest $request
     *
     * @return BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartDevicesResponse
     */
    public function batchStartDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStartDevicesResponse::fromMap($this->doRPCRequest('BatchStartDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStartDevicesRequest $request
     *
     * @return BatchStartDevicesResponse
     */
    public function batchStartDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartStreamsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartStreamsResponse
     */
    public function batchStartStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStartStreamsResponse::fromMap($this->doRPCRequest('BatchStartStreams', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStartStreamsRequest $request
     *
     * @return BatchStartStreamsResponse
     */
    public function batchStartStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartStreamsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopDevicesResponse
     */
    public function batchStopDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopDevicesResponse::fromMap($this->doRPCRequest('BatchStopDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStopDevicesRequest $request
     *
     * @return BatchStopDevicesResponse
     */
    public function batchStopDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopStreamsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopStreamsResponse
     */
    public function batchStopStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchStopStreamsResponse::fromMap($this->doRPCRequest('BatchStopStreams', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchStopStreamsRequest $request
     *
     * @return BatchStopStreamsResponse
     */
    public function batchStopStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopStreamsWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindDirectoriesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindDirectoriesResponse::fromMap($this->doRPCRequest('BatchUnbindDirectories', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchUnbindDirectoriesRequest $request
     *
     * @return BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindParentPlatformDevicesResponse::fromMap($this->doRPCRequest('BatchUnbindParentPlatformDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchUnbindParentPlatformDevicesRequest $request
     *
     * @return BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindPurchasedDevicesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindPurchasedDevicesResponse::fromMap($this->doRPCRequest('BatchUnbindPurchasedDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchUnbindPurchasedDevicesRequest $request
     *
     * @return BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindTemplateResponse::fromMap($this->doRPCRequest('BatchUnbindTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchUnbindTemplateRequest $request
     *
     * @return BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchUnbindTemplatesResponse::fromMap($this->doRPCRequest('BatchUnbindTemplates', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchUnbindTemplatesRequest $request
     *
     * @return BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param BindDirectoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindDirectoryResponse
     */
    public function bindDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindDirectoryResponse::fromMap($this->doRPCRequest('BindDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindDirectoryRequest $request
     *
     * @return BindDirectoryResponse
     */
    public function bindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param BindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindParentPlatformDeviceResponse::fromMap($this->doRPCRequest('BindParentPlatformDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindParentPlatformDeviceRequest $request
     *
     * @return BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindPurchasedDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindPurchasedDeviceResponse
     */
    public function bindPurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindPurchasedDeviceResponse::fromMap($this->doRPCRequest('BindPurchasedDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindPurchasedDeviceRequest $request
     *
     * @return BindPurchasedDeviceResponse
     */
    public function bindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindTemplateResponse
     */
    public function bindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BindTemplateResponse::fromMap($this->doRPCRequest('BindTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BindTemplateRequest $request
     *
     * @return BindTemplateResponse
     */
    public function bindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ContinuousAdjustRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuousAdjustResponse
     */
    public function continuousAdjustWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ContinuousAdjustResponse::fromMap($this->doRPCRequest('ContinuousAdjust', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ContinuousAdjustRequest $request
     *
     * @return ContinuousAdjustResponse
     */
    public function continuousAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousAdjustWithOptions($request, $runtime);
    }

    /**
     * @param ContinuousMoveRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ContinuousMoveResponse
     */
    public function continuousMoveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ContinuousMoveResponse::fromMap($this->doRPCRequest('ContinuousMove', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ContinuousMoveRequest $request
     *
     * @return ContinuousMoveResponse
     */
    public function continuousMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousMoveWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceResponse::fromMap($this->doRPCRequest('CreateDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceAlarmResponse
     */
    public function createDeviceAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceAlarmResponse::fromMap($this->doRPCRequest('CreateDeviceAlarm', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceAlarmRequest $request
     *
     * @return CreateDeviceAlarmResponse
     */
    public function createDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateDeviceSnapshotResponse
     */
    public function createDeviceSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDeviceSnapshotResponse::fromMap($this->doRPCRequest('CreateDeviceSnapshot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDeviceSnapshotRequest $request
     *
     * @return CreateDeviceSnapshotResponse
     */
    public function createDeviceSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param CreateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDirectoryResponse::fromMap($this->doRPCRequest('CreateDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDirectoryRequest $request
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateGroupResponse::fromMap($this->doRPCRequest('CreateGroup', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParentPlatformResponse
     */
    public function createParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateParentPlatformResponse::fromMap($this->doRPCRequest('CreateParentPlatform', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateParentPlatformRequest $request
     *
     * @return CreateParentPlatformResponse
     */
    public function createParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param CreateStreamSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStreamSnapshotResponse
     */
    public function createStreamSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateStreamSnapshotResponse::fromMap($this->doRPCRequest('CreateStreamSnapshot', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateStreamSnapshotRequest $request
     *
     * @return CreateStreamSnapshotResponse
     */
    public function createStreamSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateTemplateResponse::fromMap($this->doRPCRequest('CreateTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBucketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteBucketResponse::fromMap($this->doRPCRequest('DeleteBucket', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteBucketRequest $request
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBucketWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDeviceResponse::fromMap($this->doRPCRequest('DeleteDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDeviceRequest $request
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDirectoryResponse::fromMap($this->doRPCRequest('DeleteDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDirectoryRequest $request
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteGroupResponse::fromMap($this->doRPCRequest('DeleteGroup', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParentPlatformResponse
     */
    public function deleteParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteParentPlatformResponse::fromMap($this->doRPCRequest('DeleteParentPlatform', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteParentPlatformRequest $request
     *
     * @return DeleteParentPlatformResponse
     */
    public function deleteParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param DeletePresetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePresetResponse
     */
    public function deletePresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeletePresetResponse::fromMap($this->doRPCRequest('DeletePreset', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeletePresetRequest $request
     *
     * @return DeletePresetResponse
     */
    public function deletePreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePresetWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteTemplateResponse::fromMap($this->doRPCRequest('DeleteTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteTemplateRequest $request
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVsPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('DeleteVsPullStreamInfoConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVsPullStreamInfoConfigRequest $request
     *
     * @return DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteVsStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('DeleteVsStreamsNotifyUrlConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountStatRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountStatResponse
     */
    public function describeAccountStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAccountStatResponse::fromMap($this->doRPCRequest('DescribeAccountStat', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAccountStatRequest $request
     *
     * @return DescribeAccountStatResponse
     */
    public function describeAccountStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountStatWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDeviceResponse
     */
    public function describeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceResponse::fromMap($this->doRPCRequest('DescribeDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceRequest $request
     *
     * @return DescribeDeviceResponse
     */
    public function describeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceChannelsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceChannelsResponse::fromMap($this->doRPCRequest('DescribeDeviceChannels', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceChannelsRequest $request
     *
     * @return DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceGatewayResponse
     */
    public function describeDeviceGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceGatewayResponse::fromMap($this->doRPCRequest('DescribeDeviceGateway', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceGatewayRequest $request
     *
     * @return DescribeDeviceGatewayResponse
     */
    public function describeDeviceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDevicesResponse::fromMap($this->doRPCRequest('DescribeDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDevicesRequest $request
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDeviceURLResponse
     */
    public function describeDeviceURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDeviceURLResponse::fromMap($this->doRPCRequest('DescribeDeviceURL', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDeviceURLRequest $request
     *
     * @return DescribeDeviceURLResponse
     */
    public function describeDeviceURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDirectoriesResponse::fromMap($this->doRPCRequest('DescribeDirectories', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDirectoryResponse
     */
    public function describeDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDirectoryResponse::fromMap($this->doRPCRequest('DescribeDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDirectoryRequest $request
     *
     * @return DescribeDirectoryResponse
     */
    public function describeDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeGroupResponse
     */
    public function describeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupResponse::fromMap($this->doRPCRequest('DescribeGroup', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGroupRequest $request
     *
     * @return DescribeGroupResponse
     */
    public function describeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeGroupsResponse::fromMap($this->doRPCRequest('DescribeGroups', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeGroupsRequest $request
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParentPlatformResponse
     */
    public function describeParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParentPlatformResponse::fromMap($this->doRPCRequest('DescribeParentPlatform', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformRequest $request
     *
     * @return DescribeParentPlatformResponse
     */
    public function describeParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformDevicesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParentPlatformDevicesResponse::fromMap($this->doRPCRequest('DescribeParentPlatformDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformDevicesRequest $request
     *
     * @return DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParentPlatformsResponse
     */
    public function describeParentPlatformsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeParentPlatformsResponse::fromMap($this->doRPCRequest('DescribeParentPlatforms', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformsRequest $request
     *
     * @return DescribeParentPlatformsResponse
     */
    public function describeParentPlatforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePresetsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePresetsResponse
     */
    public function describePresetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePresetsResponse::fromMap($this->doRPCRequest('DescribePresets', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePresetsRequest $request
     *
     * @return DescribePresetsResponse
     */
    public function describePresets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePresetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedDeviceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePurchasedDeviceResponse
     */
    public function describePurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePurchasedDeviceResponse::fromMap($this->doRPCRequest('DescribePurchasedDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePurchasedDeviceRequest $request
     *
     * @return DescribePurchasedDeviceResponse
     */
    public function describePurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribePurchasedDevicesResponse::fromMap($this->doRPCRequest('DescribePurchasedDevices', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribePurchasedDevicesRequest $request
     *
     * @return DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRecordsResponse::fromMap($this->doRPCRequest('DescribeRecords', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRecordsRequest $request
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeStreamResponse
     */
    public function describeStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamResponse::fromMap($this->doRPCRequest('DescribeStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamRequest $request
     *
     * @return DescribeStreamResponse
     */
    public function describeStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamsResponse::fromMap($this->doRPCRequest('DescribeStreams', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamsRequest $request
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeStreamURLResponse
     */
    public function describeStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamURLResponse::fromMap($this->doRPCRequest('DescribeStreamURL', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamURLRequest $request
     *
     * @return DescribeStreamURLResponse
     */
    public function describeStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamVodListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStreamVodListResponse
     */
    public function describeStreamVodListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeStreamVodListResponse::fromMap($this->doRPCRequest('DescribeStreamVodList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeStreamVodListRequest $request
     *
     * @return DescribeStreamVodListResponse
     */
    public function describeStreamVodList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamVodListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTemplateResponse
     */
    public function describeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTemplateResponse::fromMap($this->doRPCRequest('DescribeTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTemplateRequest $request
     *
     * @return DescribeTemplateResponse
     */
    public function describeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeTemplatesResponse::fromMap($this->doRPCRequest('DescribeTemplates', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodStreamURLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVodStreamURLResponse
     */
    public function describeVodStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVodStreamURLResponse::fromMap($this->doRPCRequest('DescribeVodStreamURL', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVodStreamURLRequest $request
     *
     * @return DescribeVodStreamURLResponse
     */
    public function describeVodStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsCertificateDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsCertificateDetailResponse::fromMap($this->doRPCRequest('DescribeVsCertificateDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsCertificateDetailRequest $request
     *
     * @return DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsCertificateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVsCertificateListResponse
     */
    public function describeVsCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsCertificateListResponse::fromMap($this->doRPCRequest('DescribeVsCertificateList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsCertificateListRequest $request
     *
     * @return DescribeVsCertificateListResponse
     */
    public function describeVsCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainBpsDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainBpsDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainBpsData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainBpsDataRequest $request
     *
     * @return DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainCertificateInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainCertificateInfoResponse::fromMap($this->doRPCRequest('DescribeVsDomainCertificateInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainCertificateInfoRequest $request
     *
     * @return DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainConfigsResponse::fromMap($this->doRPCRequest('DescribeVsDomainConfigs', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainConfigsRequest $request
     *
     * @return DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainDetailResponse::fromMap($this->doRPCRequest('DescribeVsDomainDetail', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainDetailRequest $request
     *
     * @return DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainPvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainPvDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainPvData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainPvDataRequest $request
     *
     * @return DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainPvUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainPvUvDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainPvUvData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainPvUvDataRequest $request
     *
     * @return DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainRecordDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainRecordDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainRecordData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainRecordDataRequest $request
     *
     * @return DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainRegionDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainRegionDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainRegionData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainRegionDataRequest $request
     *
     * @return DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainReqBpsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainReqBpsDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainReqBpsData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainReqBpsDataRequest $request
     *
     * @return DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainReqTrafficDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainReqTrafficDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainReqTrafficData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainReqTrafficDataRequest $request
     *
     * @return DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainSnapshotDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainSnapshotDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainSnapshotData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainSnapshotDataRequest $request
     *
     * @return DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainSnapshotDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainTrafficDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainTrafficDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainTrafficData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainTrafficDataRequest $request
     *
     * @return DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainUvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsDomainUvDataResponse::fromMap($this->doRPCRequest('DescribeVsDomainUvData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsDomainUvDataRequest $request
     *
     * @return DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('DescribeVsPullStreamInfoConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsPullStreamInfoConfigRequest $request
     *
     * @return DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStorageUsageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsStorageUsageDataResponse
     */
    public function describeVsStorageUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsStorageUsageDataResponse::fromMap($this->doRPCRequest('DescribeVsStorageUsageData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsStorageUsageDataRequest $request
     *
     * @return DescribeVsStorageUsageDataResponse
     */
    public function describeVsStorageUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStorageUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('DescribeVsStreamsNotifyUrlConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsOnlineListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsStreamsOnlineListResponse::fromMap($this->doRPCRequest('DescribeVsStreamsOnlineList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsOnlineListRequest $request
     *
     * @return DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsOnlineListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsPublishListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsStreamsPublishListResponse::fromMap($this->doRPCRequest('DescribeVsStreamsPublishList', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsPublishListRequest $request
     *
     * @return DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsPublishListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsTopDomainsByFlowRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsTopDomainsByFlowResponse::fromMap($this->doRPCRequest('DescribeVsTopDomainsByFlow', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsTopDomainsByFlowRequest $request
     *
     * @return DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsUpPeakPublishStreamDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsUpPeakPublishStreamDataResponse::fromMap($this->doRPCRequest('DescribeVsUpPeakPublishStreamData', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsUpPeakPublishStreamDataRequest $request
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUpPeakPublishStreamDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsUserResourcePackageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeVsUserResourcePackageResponse::fromMap($this->doRPCRequest('DescribeVsUserResourcePackage', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeVsUserResourcePackageRequest $request
     *
     * @return DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param ForbidVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ForbidVsStreamResponse
     */
    public function forbidVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ForbidVsStreamResponse::fromMap($this->doRPCRequest('ForbidVsStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ForbidVsStreamRequest $request
     *
     * @return ForbidVsStreamResponse
     */
    public function forbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param GetBucketInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GetBucketInfoResponse::fromMap($this->doRPCRequest('GetBucketInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GetBucketInfoRequest $request
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @param GotoPresetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GotoPresetResponse
     */
    public function gotoPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return GotoPresetResponse::fromMap($this->doRPCRequest('GotoPreset', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param GotoPresetRequest $request
     *
     * @return GotoPresetResponse
     */
    public function gotoPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gotoPresetWithOptions($request, $runtime);
    }

    /**
     * @param ListBucketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBucketsResponse
     */
    public function listBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListBucketsResponse::fromMap($this->doRPCRequest('ListBuckets', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListBucketsRequest $request
     *
     * @return ListBucketsResponse
     */
    public function listBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBucketsWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceChannelsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDeviceChannelsResponse
     */
    public function listDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceChannelsResponse::fromMap($this->doRPCRequest('ListDeviceChannels', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceChannelsRequest $request
     *
     * @return ListDeviceChannelsResponse
     */
    public function listDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param ListDeviceRecordsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListDeviceRecordsResponse
     */
    public function listDeviceRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListDeviceRecordsResponse::fromMap($this->doRPCRequest('ListDeviceRecords', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListDeviceRecordsRequest $request
     *
     * @return ListDeviceRecordsResponse
     */
    public function listDeviceRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDeviceRecordsWithOptions($request, $runtime);
    }

    /**
     * @param ListObjectsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListObjectsResponse
     */
    public function listObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ListObjectsResponse::fromMap($this->doRPCRequest('ListObjects', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ListObjectsRequest $request
     *
     * @return ListObjectsResponse
     */
    public function listObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listObjectsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDeviceResponse
     */
    public function modifyDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceResponse::fromMap($this->doRPCRequest('ModifyDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeviceRequest $request
     *
     * @return ModifyDeviceResponse
     */
    public function modifyDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceAlarmResponse::fromMap($this->doRPCRequest('ModifyDeviceAlarm', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeviceAlarmRequest $request
     *
     * @return ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceCaptureRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCaptureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceCaptureResponse::fromMap($this->doRPCRequest('ModifyDeviceCapture', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeviceCaptureRequest $request
     *
     * @return ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCapture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceCaptureWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceChannelsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDeviceChannelsResponse::fromMap($this->doRPCRequest('ModifyDeviceChannels', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDeviceChannelsRequest $request
     *
     * @return ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDirectoryResponse
     */
    public function modifyDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDirectoryResponse::fromMap($this->doRPCRequest('ModifyDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDirectoryRequest $request
     *
     * @return ModifyDirectoryResponse
     */
    public function modifyDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyGroupResponse::fromMap($this->doRPCRequest('ModifyGroup', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyGroupRequest $request
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyParentPlatformResponse
     */
    public function modifyParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyParentPlatformResponse::fromMap($this->doRPCRequest('ModifyParentPlatform', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyParentPlatformRequest $request
     *
     * @return ModifyParentPlatformResponse
     */
    public function modifyParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyTemplateResponse::fromMap($this->doRPCRequest('ModifyTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyTemplateRequest $request
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return OpenVsServiceResponse
     */
    public function openVsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return OpenVsServiceResponse::fromMap($this->doRPCRequest('OpenVsService', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return OpenVsServiceResponse
     */
    public function openVsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVsServiceWithOptions($runtime);
    }

    /**
     * @param PrepareUploadRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PrepareUploadResponse
     */
    public function prepareUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PrepareUploadResponse::fromMap($this->doRPCRequest('PrepareUpload', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PrepareUploadRequest $request
     *
     * @return PrepareUploadResponse
     */
    public function prepareUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->prepareUploadWithOptions($request, $runtime);
    }

    /**
     * @param PutBucketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutBucketResponse
     */
    public function putBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return PutBucketResponse::fromMap($this->doRPCRequest('PutBucket', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param PutBucketRequest $request
     *
     * @return PutBucketResponse
     */
    public function putBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketWithOptions($request, $runtime);
    }

    /**
     * @param ResumeVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeVsStreamResponse
     */
    public function resumeVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ResumeVsStreamResponse::fromMap($this->doRPCRequest('ResumeVsStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ResumeVsStreamRequest $request
     *
     * @return ResumeVsStreamResponse
     */
    public function resumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param SetPresetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetPresetResponse
     */
    public function setPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetPresetResponse::fromMap($this->doRPCRequest('SetPreset', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetPresetRequest $request
     *
     * @return SetPresetResponse
     */
    public function setPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPresetWithOptions($request, $runtime);
    }

    /**
     * @param SetVsDomainCertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetVsDomainCertificateResponse::fromMap($this->doRPCRequest('SetVsDomainCertificate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetVsDomainCertificateRequest $request
     *
     * @return SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SetVsStreamsNotifyUrlConfigResponse::fromMap($this->doRPCRequest('SetVsStreamsNotifyUrlConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SetVsStreamsNotifyUrlConfigRequest $request
     *
     * @return SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param StartDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDeviceResponse
     */
    public function startDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartDeviceResponse::fromMap($this->doRPCRequest('StartDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartDeviceRequest $request
     *
     * @return StartDeviceResponse
     */
    public function startDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDeviceWithOptions($request, $runtime);
    }

    /**
     * @param StartParentPlatformRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartParentPlatformResponse
     */
    public function startParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartParentPlatformResponse::fromMap($this->doRPCRequest('StartParentPlatform', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartParentPlatformRequest $request
     *
     * @return StartParentPlatformResponse
     */
    public function startParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartRecordStreamResponse
     */
    public function startRecordStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartRecordStreamResponse::fromMap($this->doRPCRequest('StartRecordStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartRecordStreamRequest $request
     *
     * @return StartRecordStreamResponse
     */
    public function startRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordStreamWithOptions($request, $runtime);
    }

    /**
     * @param StartStreamRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartStreamResponse
     */
    public function startStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartStreamResponse::fromMap($this->doRPCRequest('StartStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartStreamRequest $request
     *
     * @return StartStreamResponse
     */
    public function startStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamWithOptions($request, $runtime);
    }

    /**
     * @param StartTransferStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartTransferStreamResponse
     */
    public function startTransferStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StartTransferStreamResponse::fromMap($this->doRPCRequest('StartTransferStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StartTransferStreamRequest $request
     *
     * @return StartTransferStreamResponse
     */
    public function startTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopAdjustRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopAdjustResponse
     */
    public function stopAdjustWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopAdjustResponse::fromMap($this->doRPCRequest('StopAdjust', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopAdjustRequest $request
     *
     * @return StopAdjustResponse
     */
    public function stopAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAdjustWithOptions($request, $runtime);
    }

    /**
     * @param StopDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDeviceResponse
     */
    public function stopDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopDeviceResponse::fromMap($this->doRPCRequest('StopDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopDeviceRequest $request
     *
     * @return StopDeviceResponse
     */
    public function stopDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDeviceWithOptions($request, $runtime);
    }

    /**
     * @param StopMoveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopMoveResponse
     */
    public function stopMoveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopMoveResponse::fromMap($this->doRPCRequest('StopMove', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopMoveRequest $request
     *
     * @return StopMoveResponse
     */
    public function stopMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMoveWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopRecordStreamResponse
     */
    public function stopRecordStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopRecordStreamResponse::fromMap($this->doRPCRequest('StopRecordStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopRecordStreamRequest $request
     *
     * @return StopRecordStreamResponse
     */
    public function stopRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopStreamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopStreamResponse
     */
    public function stopStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopStreamResponse::fromMap($this->doRPCRequest('StopStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopStreamRequest $request
     *
     * @return StopStreamResponse
     */
    public function stopStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopTransferStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopTransferStreamResponse
     */
    public function stopTransferStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return StopTransferStreamResponse::fromMap($this->doRPCRequest('StopTransferStream', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param StopTransferStreamRequest $request
     *
     * @return StopTransferStreamResponse
     */
    public function stopTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param SyncCatalogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SyncCatalogsResponse
     */
    public function syncCatalogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncCatalogsResponse::fromMap($this->doRPCRequest('SyncCatalogs', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncCatalogsRequest $request
     *
     * @return SyncCatalogsResponse
     */
    public function syncCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncCatalogsWithOptions($request, $runtime);
    }

    /**
     * @param SyncDeviceChannelsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return SyncDeviceChannelsResponse
     */
    public function syncDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return SyncDeviceChannelsResponse::fromMap($this->doRPCRequest('SyncDeviceChannels', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param SyncDeviceChannelsRequest $request
     *
     * @return SyncDeviceChannelsResponse
     */
    public function syncDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindDirectoryResponse
     */
    public function unbindDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindDirectoryResponse::fromMap($this->doRPCRequest('UnbindDirectory', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindDirectoryRequest $request
     *
     * @return UnbindDirectoryResponse
     */
    public function unbindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param UnbindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindParentPlatformDeviceResponse::fromMap($this->doRPCRequest('UnbindParentPlatformDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindParentPlatformDeviceRequest $request
     *
     * @return UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindPurchasedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindPurchasedDeviceResponse::fromMap($this->doRPCRequest('UnbindPurchasedDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindPurchasedDeviceRequest $request
     *
     * @return UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnbindTemplateResponse
     */
    public function unbindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnbindTemplateResponse::fromMap($this->doRPCRequest('UnbindTemplate', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnbindTemplateRequest $request
     *
     * @return UnbindTemplateResponse
     */
    public function unbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param UnlockDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnlockDeviceResponse
     */
    public function unlockDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UnlockDeviceResponse::fromMap($this->doRPCRequest('UnlockDevice', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UnlockDeviceRequest $request
     *
     * @return UnlockDeviceResponse
     */
    public function unlockDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBucketInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateBucketInfoResponse
     */
    public function updateBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateBucketInfoResponse::fromMap($this->doRPCRequest('UpdateBucketInfo', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateBucketInfoRequest $request
     *
     * @return UpdateBucketInfoResponse
     */
    public function updateBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UpdateVsPullStreamInfoConfigResponse::fromMap($this->doRPCRequest('UpdateVsPullStreamInfoConfig', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UpdateVsPullStreamInfoConfigRequest $request
     *
     * @return UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param UploadDeviceRecordRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadDeviceRecordResponse
     */
    public function uploadDeviceRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return UploadDeviceRecordResponse::fromMap($this->doRPCRequest('UploadDeviceRecord', '2018-12-12', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param UploadDeviceRecordRequest $request
     *
     * @return UploadDeviceRecordResponse
     */
    public function uploadDeviceRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadDeviceRecordWithOptions($request, $runtime);
    }
}
