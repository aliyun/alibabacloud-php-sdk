<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\AddAccountRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\AddAccountResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\AddEndPointRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\AddEndPointResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\DeleteAccountRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\DeleteAccountResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetAllowIPRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetAllowIPResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointByDomainRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointByDomainResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobDetailResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobLogRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobLogResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobStatusRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetJobStatusResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\KillSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\KillSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ListSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryAccountListRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryAccountListResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryEndPointListRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\QueryEndPointListResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\RemoveEndPointRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\RemoveEndPointResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ResetMainPasswordRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ResetMainPasswordResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SetAllowIPRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SetAllowIPResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkJobRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\SubmitSparkJobResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UnSubscribeRegionRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UnSubscribeRegionResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UpdateAccountPasswordRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UpdateAccountPasswordResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UpgradeInstanceRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\UpgradeInstanceResponse;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ValidateVirtualClusterNameRequest;
use AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\ValidateVirtualClusterNameResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Openanalyticsopen extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
            'cn-beijing'                  => 'openanalytics.cn-beijing.aliyuncs.com',
            'cn-zhangjiakou'              => 'openanalytics.cn-zhangjiakou.aliyuncs.com',
            'cn-hangzhou'                 => 'openanalytics.cn-hangzhou.aliyuncs.com',
            'cn-shanghai'                 => 'openanalytics.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'                 => 'openanalytics.cn-shenzhen.aliyuncs.com',
            'cn-hongkong'                 => 'openanalytics.cn-hongkong.aliyuncs.com',
            'ap-southeast-1'              => 'openanalytics.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'datalakeanalytics.ap-southeast-2.aliyuncs.com',
            'ap-southeast-3'              => 'openanalytics.ap-southeast-3.aliyuncs.com',
            'ap-northeast-1'              => 'datalakeanalytics.ap-northeast-1.aliyuncs.com',
            'eu-west-1'                   => 'openanalytics.eu-west-1.aliyuncs.com',
            'us-west-1'                   => 'openanalytics.us-west-1.aliyuncs.com',
            'us-east-1'                   => 'datalakeanalytics.us-east-1.aliyuncs.com',
            'eu-central-1'                => 'datalakeanalytics.eu-central-1.aliyuncs.com',
            'ap-south-1'                  => 'openanalytics.ap-south-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'openanalytics.ap-northeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'openanalytics.ap-southeast-5.aliyuncs.com',
            'cn-beijing-finance-1'        => 'openanalytics.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'openanalytics.aliyuncs.com',
            'cn-beijing-gov-1'            => 'openanalytics.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'openanalytics.aliyuncs.com',
            'cn-chengdu'                  => 'openanalytics.aliyuncs.com',
            'cn-edge-1'                   => 'openanalytics.aliyuncs.com',
            'cn-fujian'                   => 'openanalytics.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-finance'         => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'openanalytics.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'openanalytics.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'openanalytics.aliyuncs.com',
            'cn-huhehaote'                => 'openanalytics.cn-huhehaote.aliyuncs.com',
            'cn-north-2-gov-1'            => 'openanalytics.aliyuncs.com',
            'cn-qingdao'                  => 'openanalytics.cn-qingdao.aliyuncs.com',
            'cn-qingdao-nebula'           => 'openanalytics.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'openanalytics.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'openanalytics.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'openanalytics.aliyuncs.com',
            'cn-shanghai-inner'           => 'openanalytics.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-inner'           => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'openanalytics.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'openanalytics.aliyuncs.com',
            'cn-wuhan'                    => 'openanalytics.aliyuncs.com',
            'cn-yushanfang'               => 'openanalytics.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'openanalytics.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'openanalytics.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'openanalytics.aliyuncs.com',
            'eu-west-1-oxs'               => 'openanalytics.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'openanalytics.me-east-1.aliyuncs.com',
            'rus-west-1-pop'              => 'openanalytics.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('openanalytics-open', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ValidateVirtualClusterNameRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ValidateVirtualClusterNameResponse
     */
    public function validateVirtualClusterNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ValidateVirtualClusterNameResponse::fromMap($this->doRequest('ValidateVirtualClusterName', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ValidateVirtualClusterNameRequest $request
     *
     * @return ValidateVirtualClusterNameResponse
     */
    public function validateVirtualClusterName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->validateVirtualClusterNameWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpgradeInstanceResponse::fromMap($this->doRequest('UpgradeInstance', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpgradeInstanceRequest $request
     *
     * @return UpgradeInstanceResponse
     */
    public function upgradeInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ReleaseInstanceResponse::fromMap($this->doRequest('ReleaseInstance', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @param GetJobDetailRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobDetailResponse
     */
    public function getJobDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetJobDetailResponse::fromMap($this->doRequest('GetJobDetail', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetJobDetailRequest $request
     *
     * @return GetJobDetailResponse
     */
    public function getJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetJobStatusRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetJobStatusResponse::fromMap($this->doRequest('GetJobStatus', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetJobStatusRequest $request
     *
     * @return GetJobStatusResponse
     */
    public function getJobStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobStatusWithOptions($request, $runtime);
    }

    /**
     * @param KillSparkJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return KillSparkJobResponse
     */
    public function killSparkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return KillSparkJobResponse::fromMap($this->doRequest('KillSparkJob', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param KillSparkJobRequest $request
     *
     * @return KillSparkJobResponse
     */
    public function killSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param SubmitSparkJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SubmitSparkJobResponse
     */
    public function submitSparkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SubmitSparkJobResponse::fromMap($this->doRequest('SubmitSparkJob', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SubmitSparkJobRequest $request
     *
     * @return SubmitSparkJobResponse
     */
    public function submitSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param GetJobLogRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetJobLogResponse
     */
    public function getJobLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetJobLogResponse::fromMap($this->doRequest('GetJobLog', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetJobLogRequest $request
     *
     * @return GetJobLogResponse
     */
    public function getJobLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobLogWithOptions($request, $runtime);
    }

    /**
     * @param ListSparkJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSparkJobResponse
     */
    public function listSparkJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListSparkJobResponse::fromMap($this->doRequest('ListSparkJob', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListSparkJobRequest $request
     *
     * @return ListSparkJobResponse
     */
    public function listSparkJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSparkJobWithOptions($request, $runtime);
    }

    /**
     * @param GetAllowIPRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetAllowIPResponse
     */
    public function getAllowIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetAllowIPResponse::fromMap($this->doRequest('GetAllowIP', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetAllowIPRequest $request
     *
     * @return GetAllowIPResponse
     */
    public function getAllowIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAllowIPWithOptions($request, $runtime);
    }

    /**
     * @param SetAllowIPRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return SetAllowIPResponse
     */
    public function setAllowIPWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetAllowIPResponse::fromMap($this->doRequest('SetAllowIP', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetAllowIPRequest $request
     *
     * @return SetAllowIPResponse
     */
    public function setAllowIP($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAllowIPWithOptions($request, $runtime);
    }

    /**
     * @param ResetMainPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetMainPasswordResponse
     */
    public function resetMainPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetMainPasswordResponse::fromMap($this->doRequest('ResetMainPassword', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResetMainPasswordRequest $request
     *
     * @return ResetMainPasswordResponse
     */
    public function resetMainPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetMainPasswordWithOptions($request, $runtime);
    }

    /**
     * @param UnSubscribeRegionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnSubscribeRegionResponse
     */
    public function unSubscribeRegionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnSubscribeRegionResponse::fromMap($this->doRequest('UnSubscribeRegion', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnSubscribeRegionRequest $request
     *
     * @return UnSubscribeRegionResponse
     */
    public function unSubscribeRegion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unSubscribeRegionWithOptions($request, $runtime);
    }

    /**
     * @param QueryAccountListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryAccountListResponse
     */
    public function queryAccountListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountListResponse::fromMap($this->doRequest('QueryAccountList', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryAccountListRequest $request
     *
     * @return QueryAccountListResponse
     */
    public function queryAccountList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountListWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAccountRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteAccountResponse::fromMap($this->doRequest('DeleteAccount', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteAccountRequest $request
     *
     * @return DeleteAccountResponse
     */
    public function deleteAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAccountWithOptions($request, $runtime);
    }

    /**
     * @param AddAccountRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddAccountResponse
     */
    public function addAccountWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddAccountResponse::fromMap($this->doRequest('AddAccount', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddAccountRequest $request
     *
     * @return AddAccountResponse
     */
    public function addAccount($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAccountWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAccountPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAccountPasswordResponse
     */
    public function updateAccountPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UpdateAccountPasswordResponse::fromMap($this->doRequest('UpdateAccountPassword', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UpdateAccountPasswordRequest $request
     *
     * @return UpdateAccountPasswordResponse
     */
    public function updateAccountPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAccountPasswordWithOptions($request, $runtime);
    }

    /**
     * @param RemoveEndPointRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveEndPointResponse
     */
    public function removeEndPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveEndPointResponse::fromMap($this->doRequest('RemoveEndPoint', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveEndPointRequest $request
     *
     * @return RemoveEndPointResponse
     */
    public function removeEndPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeEndPointWithOptions($request, $runtime);
    }

    /**
     * @param QueryEndPointListRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return QueryEndPointListResponse
     */
    public function queryEndPointListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return QueryEndPointListResponse::fromMap($this->doRequest('QueryEndPointList', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param QueryEndPointListRequest $request
     *
     * @return QueryEndPointListResponse
     */
    public function queryEndPointList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEndPointListWithOptions($request, $runtime);
    }

    /**
     * @param AddEndPointRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddEndPointResponse
     */
    public function addEndPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddEndPointResponse::fromMap($this->doRequest('AddEndPoint', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddEndPointRequest $request
     *
     * @return AddEndPointResponse
     */
    public function addEndPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEndPointWithOptions($request, $runtime);
    }

    /**
     * @param GetEndPointRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetEndPointResponse
     */
    public function getEndPointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEndPointResponse::fromMap($this->doRequest('GetEndPoint', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEndPointRequest $request
     *
     * @return GetEndPointResponse
     */
    public function getEndPoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndPointWithOptions($request, $runtime);
    }

    /**
     * @param GetEndPointByDomainRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetEndPointByDomainResponse
     */
    public function getEndPointByDomainWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetEndPointByDomainResponse::fromMap($this->doRequest('GetEndPointByDomain', 'HTTPS', 'POST', '2018-06-19', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetEndPointByDomainRequest $request
     *
     * @return GetEndPointByDomainResponse
     */
    public function getEndPointByDomain($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndPointByDomainWithOptions($request, $runtime);
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
}
