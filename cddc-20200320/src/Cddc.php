<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AddHostsToBastionRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AddHostsToBastionResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AllocateHostInstanceCrossVpcVipRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AllocateHostInstanceCrossVpcVipResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AttachHostsToBastionUserRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\AttachHostsToBastionUserResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CheckUserIfAuthoriseMyBaseSystemRoleRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CheckUserIfAuthoriseMyBaseSystemRoleResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ClearDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ClearDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostGroupRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteDedicatedHostGroupResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteUserBackupFileRecordRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DeleteUserBackupFileRecordResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostZonesRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostZonesResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeBriefDedicatedHostsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeBriefDedicatedHostsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeCheckUserBackupFileRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeCheckUserBackupFileResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeCrossVpcInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeCrossVpcInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostGroupsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostHealthResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostMetricRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostMetricResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsCheckInBastionRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsCheckInBastionResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsInBastionRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsInBastionResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceDistributionRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceDistributionResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedInstanceMetricResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedResourceAdvisorResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsForInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsForInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeEvaluateDedicatedHostsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostInstanceMonitorInfoRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostInstanceMonitorInfoResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostWebShellResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeListUserBackupFileRecordRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeListUserBackupFileRecordResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseHostOverViewResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleMethodsRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeScheduleMethodsResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DropDedicatedHostUserRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DropDedicatedHostUserResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ExcuteScheduleRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ExcuteScheduleResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDBInstanceSwitchWeightRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDBInstanceSwitchWeightResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAccountRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAccountResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostClassRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostClassResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostGroupAttributeRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostGroupAttributeResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostPasswordRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyDedicatedHostPasswordResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyScheduleMethodRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ModifyScheduleMethodResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostBaseInfoByInstanceResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\QueryHostInstanceConsoleInfoResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ReplaceDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ReplaceDedicatedHostResponse;
use AlibabaCloud\SDK\Cddc\V20200320\Models\RestartDedicatedHostRequest;
use AlibabaCloud\SDK\Cddc\V20200320\Models\RestartDedicatedHostResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Cddc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('cddc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param ModifyDBInstanceSwitchWeightRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDBInstanceSwitchWeightResponse
     */
    public function modifyDBInstanceSwitchWeightWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDBInstanceSwitchWeightResponse::fromMap($this->doRPCRequest('ModifyDBInstanceSwitchWeight', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDBInstanceSwitchWeightRequest $request
     *
     * @return ModifyDBInstanceSwitchWeightResponse
     */
    public function modifyDBInstanceSwitchWeight($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDBInstanceSwitchWeightWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableDedicatedHostZonesRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableDedicatedHostZonesResponse::fromMap($this->doRPCRequest('DescribeAvailableDedicatedHostZones', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableDedicatedHostZonesRequest $request
     *
     * @return DescribeAvailableDedicatedHostZonesResponse
     */
    public function describeAvailableDedicatedHostZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostZonesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostGroupsResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostGroups', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostGroupsRequest $request
     *
     * @return DescribeDedicatedHostGroupsResponse
     */
    public function describeDedicatedHostGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMyBaseHostOverViewRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMyBaseHostOverViewResponse
     */
    public function describeMyBaseHostOverViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMyBaseHostOverViewResponse::fromMap($this->doRPCRequest('DescribeMyBaseHostOverView', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMyBaseHostOverViewRequest $request
     *
     * @return DescribeMyBaseHostOverViewResponse
     */
    public function describeMyBaseHostOverView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBaseHostOverViewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBriefDedicatedHostsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeBriefDedicatedHostsResponse
     */
    public function describeBriefDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeBriefDedicatedHostsResponse::fromMap($this->doRPCRequest('DescribeBriefDedicatedHosts', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeBriefDedicatedHostsRequest $request
     *
     * @return DescribeBriefDedicatedHostsResponse
     */
    public function describeBriefDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBriefDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedResourceAdvisorRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDedicatedResourceAdvisorResponse
     */
    public function describeDedicatedResourceAdvisorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedResourceAdvisorResponse::fromMap($this->doRPCRequest('DescribeDedicatedResourceAdvisor', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedResourceAdvisorRequest $request
     *
     * @return DescribeDedicatedResourceAdvisorResponse
     */
    public function describeDedicatedResourceAdvisor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedResourceAdvisorWithOptions($request, $runtime);
    }

    /**
     * @param DescribeListUserBackupFileRecordRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeListUserBackupFileRecordResponse
     */
    public function describeListUserBackupFileRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeListUserBackupFileRecordResponse::fromMap($this->doRPCRequest('DescribeListUserBackupFileRecord', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeListUserBackupFileRecordRequest $request
     *
     * @return DescribeListUserBackupFileRecordResponse
     */
    public function describeListUserBackupFileRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeListUserBackupFileRecordWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostAccountResponse::fromMap($this->doRPCRequest('CreateDedicatedHostAccount', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostAccountRequest $request
     *
     * @return CreateDedicatedHostAccountResponse
     */
    public function createDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDedicatedHostAccountResponse::fromMap($this->doRPCRequest('DeleteDedicatedHostAccount', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostAccountRequest $request
     *
     * @return DeleteDedicatedHostAccountResponse
     */
    public function deleteDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteDedicatedHostGroupResponse::fromMap($this->doRPCRequest('DeleteDedicatedHostGroup', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteDedicatedHostGroupRequest $request
     *
     * @return DeleteDedicatedHostGroupResponse
     */
    public function deleteDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param CheckUserIfAuthoriseMyBaseSystemRoleRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return CheckUserIfAuthoriseMyBaseSystemRoleResponse
     */
    public function checkUserIfAuthoriseMyBaseSystemRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CheckUserIfAuthoriseMyBaseSystemRoleResponse::fromMap($this->doRPCRequest('CheckUserIfAuthoriseMyBaseSystemRole', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckUserIfAuthoriseMyBaseSystemRoleRequest $request
     *
     * @return CheckUserIfAuthoriseMyBaseSystemRoleResponse
     */
    public function checkUserIfAuthoriseMyBaseSystemRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserIfAuthoriseMyBaseSystemRoleWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScheduleInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScheduleInstanceResponse
     */
    public function describeScheduleInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScheduleInstanceResponse::fromMap($this->doRPCRequest('DescribeScheduleInstance', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScheduleInstanceRequest $request
     *
     * @return DescribeScheduleInstanceResponse
     */
    public function describeScheduleInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ExcuteScheduleRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ExcuteScheduleResponse
     */
    public function excuteScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ExcuteScheduleResponse::fromMap($this->doRPCRequest('ExcuteSchedule', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ExcuteScheduleRequest $request
     *
     * @return ExcuteScheduleResponse
     */
    public function excuteSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->excuteScheduleWithOptions($request, $runtime);
    }

    /**
     * @param ReplaceDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ReplaceDedicatedHostResponse::fromMap($this->doRPCRequest('ReplaceDedicatedHost', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ReplaceDedicatedHostRequest $request
     *
     * @return ReplaceDedicatedHostResponse
     */
    public function replaceDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->replaceDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAccountRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAccountResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAccount', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAccountRequest $request
     *
     * @return ModifyDedicatedHostAccountResponse
     */
    public function modifyDedicatedHostAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAccountWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostEcsLevelInfoRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeHostEcsLevelInfoResponse
     */
    public function describeHostEcsLevelInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostEcsLevelInfoResponse::fromMap($this->doRPCRequest('DescribeHostEcsLevelInfo', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHostEcsLevelInfoRequest $request
     *
     * @return DescribeHostEcsLevelInfoResponse
     */
    public function describeHostEcsLevelInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostEcsLevelInfoWithOptions($request, $runtime);
    }

    /**
     * @param AllocateHostInstanceCrossVpcVipRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AllocateHostInstanceCrossVpcVipResponse
     */
    public function allocateHostInstanceCrossVpcVipWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AllocateHostInstanceCrossVpcVipResponse::fromMap($this->doRPCRequest('AllocateHostInstanceCrossVpcVip', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AllocateHostInstanceCrossVpcVipRequest $request
     *
     * @return AllocateHostInstanceCrossVpcVipResponse
     */
    public function allocateHostInstanceCrossVpcVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateHostInstanceCrossVpcVipWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostsResponse::fromMap($this->doRPCRequest('DescribeDedicatedHosts', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsRequest $request
     *
     * @return DescribeDedicatedHostsResponse
     */
    public function describeDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostDisksRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeDedicatedHostDisksResponse
     */
    public function describeDedicatedHostDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostDisksResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostDisks', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostDisksRequest $request
     *
     * @return DescribeDedicatedHostDisksResponse
     */
    public function describeDedicatedHostDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostDisksWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMyBaseInstanceOverViewRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeMyBaseInstanceOverViewResponse
     */
    public function describeMyBaseInstanceOverViewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeMyBaseInstanceOverViewResponse::fromMap($this->doRPCRequest('DescribeMyBaseInstanceOverView', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeMyBaseInstanceOverViewRequest $request
     *
     * @return DescribeMyBaseInstanceOverViewResponse
     */
    public function describeMyBaseInstanceOverView($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMyBaseInstanceOverViewWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScheduleMethodRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyScheduleMethodResponse
     */
    public function modifyScheduleMethodWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyScheduleMethodResponse::fromMap($this->doRPCRequest('ModifyScheduleMethod', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyScheduleMethodRequest $request
     *
     * @return ModifyScheduleMethodResponse
     */
    public function modifyScheduleMethod($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScheduleMethodWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAvailableDedicatedHostClassesRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClassesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeAvailableDedicatedHostClassesResponse::fromMap($this->doRPCRequest('DescribeAvailableDedicatedHostClasses', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeAvailableDedicatedHostClassesRequest $request
     *
     * @return DescribeAvailableDedicatedHostClassesResponse
     */
    public function describeAvailableDedicatedHostClasses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableDedicatedHostClassesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCheckUserBackupFileRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeCheckUserBackupFileResponse
     */
    public function describeCheckUserBackupFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCheckUserBackupFileResponse::fromMap($this->doRPCRequest('DescribeCheckUserBackupFile', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCheckUserBackupFileRequest $request
     *
     * @return DescribeCheckUserBackupFileResponse
     */
    public function describeCheckUserBackupFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCheckUserBackupFileWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostPasswordRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyDedicatedHostPasswordResponse
     */
    public function modifyDedicatedHostPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostPasswordResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostPassword', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostPasswordRequest $request
     *
     * @return ModifyDedicatedHostPasswordResponse
     */
    public function modifyDedicatedHostPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostPasswordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScheduleMethodsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeScheduleMethodsResponse
     */
    public function describeScheduleMethodsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScheduleMethodsResponse::fromMap($this->doRPCRequest('DescribeScheduleMethods', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScheduleMethodsRequest $request
     *
     * @return DescribeScheduleMethodsResponse
     */
    public function describeScheduleMethods($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleMethodsWithOptions($request, $runtime);
    }

    /**
     * @param ClearDedicatedHostRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ClearDedicatedHostResponse::fromMap($this->doRPCRequest('ClearDedicatedHost', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ClearDedicatedHostRequest $request
     *
     * @return ClearDedicatedHostResponse
     */
    public function clearDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clearDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param DeleteUserBackupFileRecordRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteUserBackupFileRecordResponse
     */
    public function deleteUserBackupFileRecordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DeleteUserBackupFileRecordResponse::fromMap($this->doRPCRequest('DeleteUserBackupFileRecord', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DeleteUserBackupFileRecordRequest $request
     *
     * @return DeleteUserBackupFileRecordResponse
     */
    public function deleteUserBackupFileRecord($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserBackupFileRecordWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEvaluateDedicatedHostsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeEvaluateDedicatedHostsResponse
     */
    public function describeEvaluateDedicatedHostsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEvaluateDedicatedHostsResponse::fromMap($this->doRPCRequest('DescribeEvaluateDedicatedHosts', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEvaluateDedicatedHostsRequest $request
     *
     * @return DescribeEvaluateDedicatedHostsResponse
     */
    public function describeEvaluateDedicatedHosts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEvaluateDedicatedHostsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostInstanceMonitorInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeHostInstanceMonitorInfoResponse
     */
    public function describeHostInstanceMonitorInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostInstanceMonitorInfoResponse::fromMap($this->doRPCRequest('DescribeHostInstanceMonitorInfo', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHostInstanceMonitorInfoRequest $request
     *
     * @return DescribeHostInstanceMonitorInfoResponse
     */
    public function describeHostInstanceMonitorInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostInstanceMonitorInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostMetricRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostMetricResponse
     */
    public function describeDedicatedHostMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostMetricResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostMetric', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostMetricRequest $request
     *
     * @return DescribeDedicatedHostMetricResponse
     */
    public function describeDedicatedHostMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostMetricWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostResponse::fromMap($this->doRPCRequest('CreateDedicatedHost', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostRequest $request
     *
     * @return CreateDedicatedHostResponse
     */
    public function createDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedInstanceMetricRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDedicatedInstanceMetricResponse
     */
    public function describeDedicatedInstanceMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedInstanceMetricResponse::fromMap($this->doRPCRequest('DescribeDedicatedInstanceMetric', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedInstanceMetricRequest $request
     *
     * @return DescribeDedicatedInstanceMetricResponse
     */
    public function describeDedicatedInstanceMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedInstanceMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCrossVpcInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCrossVpcInstanceResponse
     */
    public function describeCrossVpcInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeCrossVpcInstanceResponse::fromMap($this->doRPCRequest('DescribeCrossVpcInstance', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeCrossVpcInstanceRequest $request
     *
     * @return DescribeCrossVpcInstanceResponse
     */
    public function describeCrossVpcInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCrossVpcInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostClassRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyDedicatedHostClassResponse
     */
    public function modifyDedicatedHostClassWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostClassResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostClass', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostClassRequest $request
     *
     * @return ModifyDedicatedHostClassResponse
     */
    public function modifyDedicatedHostClass($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostClassWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsCheckInBastionRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeDedicatedHostsCheckInBastionResponse
     */
    public function describeDedicatedHostsCheckInBastionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostsCheckInBastionResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostsCheckInBastion', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsCheckInBastionRequest $request
     *
     * @return DescribeDedicatedHostsCheckInBastionResponse
     */
    public function describeDedicatedHostsCheckInBastion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsCheckInBastionWithOptions($request, $runtime);
    }

    /**
     * @param DropDedicatedHostUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DropDedicatedHostUserResponse::fromMap($this->doRPCRequest('DropDedicatedHostUser', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DropDedicatedHostUserRequest $request
     *
     * @return DropDedicatedHostUserResponse
     */
    public function dropDedicatedHostUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropDedicatedHostUserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostsInBastionRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeDedicatedHostsInBastionResponse
     */
    public function describeDedicatedHostsInBastionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostsInBastionResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostsInBastion', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostsInBastionRequest $request
     *
     * @return DescribeDedicatedHostsInBastionResponse
     */
    public function describeDedicatedHostsInBastion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostsInBastionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostGroupAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostGroupAttribute', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostGroupAttributeRequest $request
     *
     * @return ModifyDedicatedHostGroupAttributeResponse
     */
    public function modifyDedicatedHostGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param QueryHostInstanceConsoleInfoRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryHostInstanceConsoleInfoResponse
     */
    public function queryHostInstanceConsoleInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryHostInstanceConsoleInfoResponse::fromMap($this->doRPCRequest('QueryHostInstanceConsoleInfo', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryHostInstanceConsoleInfoRequest $request
     *
     * @return QueryHostInstanceConsoleInfoResponse
     */
    public function queryHostInstanceConsoleInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHostInstanceConsoleInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeRegionsResponse::fromMap($this->doRPCRequest('DescribeRegions', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param QueryHostBaseInfoByInstanceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryHostBaseInfoByInstanceResponse
     */
    public function queryHostBaseInfoByInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return QueryHostBaseInfoByInstanceResponse::fromMap($this->doRPCRequest('QueryHostBaseInfoByInstance', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryHostBaseInfoByInstanceRequest $request
     *
     * @return QueryHostBaseInfoByInstanceResponse
     */
    public function queryHostBaseInfoByInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryHostBaseInfoByInstanceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedInstanceDistributionRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeDedicatedInstanceDistributionResponse
     */
    public function describeDedicatedInstanceDistributionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedInstanceDistributionResponse::fromMap($this->doRPCRequest('DescribeDedicatedInstanceDistribution', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedInstanceDistributionRequest $request
     *
     * @return DescribeDedicatedInstanceDistributionResponse
     */
    public function describeDedicatedInstanceDistribution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedInstanceDistributionWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScheduleHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeScheduleHostResponse
     */
    public function describeScheduleHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeScheduleHostResponse::fromMap($this->doRPCRequest('DescribeScheduleHost', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeScheduleHostRequest $request
     *
     * @return DescribeScheduleHostResponse
     */
    public function describeScheduleHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScheduleHostWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return ModifyDedicatedHostAttributeResponse::fromMap($this->doRPCRequest('ModifyDedicatedHostAttribute', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param ModifyDedicatedHostAttributeRequest $request
     *
     * @return ModifyDedicatedHostAttributeResponse
     */
    public function modifyDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDedicatedHostAttributeWithOptions($request, $runtime);
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateDedicatedHostGroupResponse::fromMap($this->doRPCRequest('CreateDedicatedHostGroup', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateDedicatedHostGroupRequest $request
     *
     * @return CreateDedicatedHostGroupResponse
     */
    public function createDedicatedHostGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDedicatedHostGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddHostsToBastionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return AddHostsToBastionResponse
     */
    public function addHostsToBastionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AddHostsToBastionResponse::fromMap($this->doRPCRequest('AddHostsToBastion', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AddHostsToBastionRequest $request
     *
     * @return AddHostsToBastionResponse
     */
    public function addHostsToBastion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHostsToBastionWithOptions($request, $runtime);
    }

    /**
     * @param AttachHostsToBastionUserRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AttachHostsToBastionUserResponse
     */
    public function attachHostsToBastionUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AttachHostsToBastionUserResponse::fromMap($this->doRPCRequest('AttachHostsToBastionUser', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AttachHostsToBastionUserRequest $request
     *
     * @return AttachHostsToBastionUserResponse
     */
    public function attachHostsToBastionUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachHostsToBastionUserWithOptions($request, $runtime);
    }

    /**
     * @param DescribeEvaluateDedicatedHostsForInstanceRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeEvaluateDedicatedHostsForInstanceResponse
     */
    public function describeEvaluateDedicatedHostsForInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeEvaluateDedicatedHostsForInstanceResponse::fromMap($this->doRPCRequest('DescribeEvaluateDedicatedHostsForInstance', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeEvaluateDedicatedHostsForInstanceRequest $request
     *
     * @return DescribeEvaluateDedicatedHostsForInstanceResponse
     */
    public function describeEvaluateDedicatedHostsForInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEvaluateDedicatedHostsForInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestartDedicatedHostRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHostWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RestartDedicatedHostResponse::fromMap($this->doRPCRequest('RestartDedicatedHost', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RestartDedicatedHostRequest $request
     *
     * @return RestartDedicatedHostResponse
     */
    public function restartDedicatedHost($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDedicatedHostWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostHealthRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDedicatedHostHealthResponse
     */
    public function describeDedicatedHostHealthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostHealthResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostHealth', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostHealthRequest $request
     *
     * @return DescribeDedicatedHostHealthResponse
     */
    public function describeDedicatedHostHealth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostHealthWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHostWebShellRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeHostWebShellResponse
     */
    public function describeHostWebShellWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeHostWebShellResponse::fromMap($this->doRPCRequest('DescribeHostWebShell', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeHostWebShellRequest $request
     *
     * @return DescribeHostWebShellResponse
     */
    public function describeHostWebShell($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHostWebShellWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return DescribeDedicatedHostAttributeResponse::fromMap($this->doRPCRequest('DescribeDedicatedHostAttribute', '2020-03-20', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param DescribeDedicatedHostAttributeRequest $request
     *
     * @return DescribeDedicatedHostAttributeResponse
     */
    public function describeDedicatedHostAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDedicatedHostAttributeWithOptions($request, $runtime);
    }
}
