<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateAttackTargetRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateAttackTargetResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateSkillFileCheckResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateTargetScanTaskRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\CreateTargetScanTaskResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\DeleteAttackTargetRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\DeleteAttackTargetResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\DeleteScannerTaskRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\DeleteScannerTaskResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\GenerateRelayPollerScriptRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\GenerateRelayPollerScriptResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetAttackTargetRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetAttackTargetResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetScannerTaskHitDataUrlRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetScannerTaskHitDataUrlResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetScannerTaskResultHtmlUrlRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\GetScannerTaskResultHtmlUrlResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAIAgentEventRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAIAgentEventResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAttackTargetsRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListAttackTargetsResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListScanTasksByTargetRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListScanTasksByTargetResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\StopScannerTaskRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\StopScannerTaskResponse;
use AlibabaCloud\SDK\AISC\V20260101\Models\TestConnectivityRequest;
use AlibabaCloud\SDK\AISC\V20260101\Models\TestConnectivityResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class AISC extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap = [
            'cn-zhangjiakou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-wulanchabu' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-qingdao' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-nanjing' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-huhehaote' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-hangzhou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-guangzhou' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-beijing' => 'aisc.cn-shanghai.aliyuncs.com',
            'ap-southeast-7' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-southeast-6' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2' => 'aisc.ap-southeast-1.aliyuncs.com',
            'ap-northeast-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'eu-central-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'eu-west-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'us-east-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'us-west-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'me-east-1' => 'aisc.ap-southeast-1.aliyuncs.com',
            'cn-beijing-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-hangzhou-finance' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-heyuan-acdr-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-shanghai-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
            'cn-shenzhen-finance-1' => 'aisc.cn-shanghai.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aisc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Creates an AI Red Teaming scan target (agent or model) and saves its connection configuration for subsequent connectivity tests and scan tasks.
     *
     * @remarks
     * Creates an attack target (agent or model) and saves its connection configuration for subsequent connectivity tests and scan tasks.
     * This is a synchronous call. Upon success, the system-generated TargetId is returned in Data. You can use this TargetId as a parameter in subsequent calls such as TestConnectivity and scan task creation.
     * Metric description:
     * - When ConnectionMethod is set to enterprise_relay (access through a corporate internal network agent), the values of Endpoint and ModelName are ignored. The platform uses fixed internal network values. The actual target endpoint and credentials are held by the corporate internal network agent.
     * - After ApiKey is submitted, it is encrypted and stored. Subsequent queries do not return the plaintext value.
     * - ConnectionConfig is a JSON character string in JSON format that specifies advanced connection settings. For common provider templates, refer to the metric description of this parameter.
     * After the target is created, its initial connectivity status is verified. You can call TestConnectivity at any time to re-verify.
     * Internal network access (enterprise_relay) workflow:
     * - After the target is created, invoke GenerateRelayPollerScript to obtain an installation script (Linux only) and run it on a machine within the corporate internal network. The actual target endpoint and credentials are entered interactively during installation. The platform does not retain them.
     * - After installation, the poller automatically registers and enters a polling loop. No manual registration or polling invocations are required.
     * - After invoking TestConnectivity to authenticate end-to-end connectivity, you can use CreateTargetScanTask to initiate a scan.
     *
     * @param request - CreateAttackTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAttackTargetResponse
     *
     * @param CreateAttackTargetRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateAttackTargetResponse
     */
    public function createAttackTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->connectionConfig) {
            @$query['ConnectionConfig'] = $request->connectionConfig;
        }

        if (null !== $request->connectionMethod) {
            @$query['ConnectionMethod'] = $request->connectionMethod;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->targetName) {
            @$query['TargetName'] = $request->targetName;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAttackTarget',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAttackTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an AI Red Teaming scan target (agent or model) and saves its connection configuration for subsequent connectivity tests and scan tasks.
     *
     * @remarks
     * Creates an attack target (agent or model) and saves its connection configuration for subsequent connectivity tests and scan tasks.
     * This is a synchronous call. Upon success, the system-generated TargetId is returned in Data. You can use this TargetId as a parameter in subsequent calls such as TestConnectivity and scan task creation.
     * Metric description:
     * - When ConnectionMethod is set to enterprise_relay (access through a corporate internal network agent), the values of Endpoint and ModelName are ignored. The platform uses fixed internal network values. The actual target endpoint and credentials are held by the corporate internal network agent.
     * - After ApiKey is submitted, it is encrypted and stored. Subsequent queries do not return the plaintext value.
     * - ConnectionConfig is a JSON character string in JSON format that specifies advanced connection settings. For common provider templates, refer to the metric description of this parameter.
     * After the target is created, its initial connectivity status is verified. You can call TestConnectivity at any time to re-verify.
     * Internal network access (enterprise_relay) workflow:
     * - After the target is created, invoke GenerateRelayPollerScript to obtain an installation script (Linux only) and run it on a machine within the corporate internal network. The actual target endpoint and credentials are entered interactively during installation. The platform does not retain them.
     * - After installation, the poller automatically registers and enters a polling loop. No manual registration or polling invocations are required.
     * - After invoking TestConnectivity to authenticate end-to-end connectivity, you can use CreateTargetScanTask to initiate a scan.
     *
     * @param request - CreateAttackTargetRequest
     *
     * @returns CreateAttackTargetResponse
     *
     * @param CreateAttackTargetRequest $request
     *
     * @return CreateAttackTargetResponse
     */
    public function createAttackTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAttackTargetWithOptions($request, $runtime);
    }

    /**
     * Initiates batch detection for user-defined skills.
     *
     * @param request - CreateSkillFileCheckRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSkillFileCheckResponse
     *
     * @param CreateSkillFileCheckRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSkillFileCheckResponse
     */
    public function createSkillFileCheckWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->files) {
            @$query['Files'] = $request->files;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSkillFileCheck',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSkillFileCheckResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates batch detection for user-defined skills.
     *
     * @param request - CreateSkillFileCheckRequest
     *
     * @returns CreateSkillFileCheckResponse
     *
     * @param CreateSkillFileCheckRequest $request
     *
     * @return CreateSkillFileCheckResponse
     */
    public function createSkillFileCheck($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSkillFileCheckWithOptions($request, $runtime);
    }

    /**
     * Initiates a security scan task against a scan target that has passed connectivity verification. After the task is created, it is asynchronously prepared and executed.
     *
     * @remarks
     * *Before you use this operation, make sure that you fully understand the billing method and [pricing](https://www.alibabacloud.com/help/en/asc/user-guide/ai-red-teaming#aefbf9b5b4noh) of AI Red Teaming.**
     * Initiates a security scan (AI Red Teaming detection) task against a specified scan target.
     * Before you begin:
     * - The account must have a normal subscription status. Otherwise, a 403 error is returned.
     * - The TargetId must exist and belong to the current tenant.
     * - The connectivity verification status of the target must be verified. You can call TestConnectivity to verify the target first. Otherwise, a 400 error is returned.
     * - Available attack samples must exist within the current scan scope. Otherwise, a 400 error is returned.
     * Execution mode:
     * - The call synchronously returns a TaskId. The initial task status is PREPARING. Sample preparation and scan execution are performed asynchronously. You can call ListScanTasksByTarget to query the task status and progress.
     * Sample selection:
     * - The sample scope is determined based on the target type (agent/model) plus general-purpose samples. SampleLevel determines the detection intensity and derives the technique level. Lang is used to filter samples by language.
     * - If no sample intent is specified, the system automatically derives all available intents based on the scope described above.
     *
     * @param request - CreateTargetScanTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTargetScanTaskResponse
     *
     * @param CreateTargetScanTaskRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateTargetScanTaskResponse
     */
    public function createTargetScanTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->sampleLevel) {
            @$query['SampleLevel'] = $request->sampleLevel;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTargetScanTask',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTargetScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initiates a security scan task against a scan target that has passed connectivity verification. After the task is created, it is asynchronously prepared and executed.
     *
     * @remarks
     * *Before you use this operation, make sure that you fully understand the billing method and [pricing](https://www.alibabacloud.com/help/en/asc/user-guide/ai-red-teaming#aefbf9b5b4noh) of AI Red Teaming.**
     * Initiates a security scan (AI Red Teaming detection) task against a specified scan target.
     * Before you begin:
     * - The account must have a normal subscription status. Otherwise, a 403 error is returned.
     * - The TargetId must exist and belong to the current tenant.
     * - The connectivity verification status of the target must be verified. You can call TestConnectivity to verify the target first. Otherwise, a 400 error is returned.
     * - Available attack samples must exist within the current scan scope. Otherwise, a 400 error is returned.
     * Execution mode:
     * - The call synchronously returns a TaskId. The initial task status is PREPARING. Sample preparation and scan execution are performed asynchronously. You can call ListScanTasksByTarget to query the task status and progress.
     * Sample selection:
     * - The sample scope is determined based on the target type (agent/model) plus general-purpose samples. SampleLevel determines the detection intensity and derives the technique level. Lang is used to filter samples by language.
     * - If no sample intent is specified, the system automatically derives all available intents based on the scope described above.
     *
     * @param request - CreateTargetScanTaskRequest
     *
     * @returns CreateTargetScanTaskResponse
     *
     * @param CreateTargetScanTaskRequest $request
     *
     * @return CreateTargetScanTaskResponse
     */
    public function createTargetScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTargetScanTaskWithOptions($request, $runtime);
    }

    /**
     * Deletes a specified scan target by TargetId in AI Red Teaming. The target is physically deleted and cannot be recovered. This operation does not stop scan tasks that are in progress.
     *
     * @remarks
     * Deletes a specified scan target by TargetId. The target is physically deleted.
     * - You can delete only targets that belong to the current tenant. If the target does not exist or belongs to another tenant, a 400 error is returned. This prevents exposing whether the resource exists.
     * - Physical deletion: The target cannot be recovered after deletion. Confirm before you proceed.
     * - This operation deletes only the target record. It does not stop scan tasks that are in progress for the target or delete historical scan task records. To stop or clean up tasks, call StopScannerTask or DeleteScannerTask first.
     * - After deletion, the connection configurations of the target, including encrypted credentials and connectivity verification results, are also removed.
     *
     * @param request - DeleteAttackTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAttackTargetResponse
     *
     * @param DeleteAttackTargetRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAttackTargetResponse
     */
    public function deleteAttackTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAttackTarget',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAttackTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a specified scan target by TargetId in AI Red Teaming. The target is physically deleted and cannot be recovered. This operation does not stop scan tasks that are in progress.
     *
     * @remarks
     * Deletes a specified scan target by TargetId. The target is physically deleted.
     * - You can delete only targets that belong to the current tenant. If the target does not exist or belongs to another tenant, a 400 error is returned. This prevents exposing whether the resource exists.
     * - Physical deletion: The target cannot be recovered after deletion. Confirm before you proceed.
     * - This operation deletes only the target record. It does not stop scan tasks that are in progress for the target or delete historical scan task records. To stop or clean up tasks, call StopScannerTask or DeleteScannerTask first.
     * - After deletion, the connection configurations of the target, including encrypted credentials and connectivity verification results, are also removed.
     *
     * @param request - DeleteAttackTargetRequest
     *
     * @returns DeleteAttackTargetResponse
     *
     * @param DeleteAttackTargetRequest $request
     *
     * @return DeleteAttackTargetResponse
     */
    public function deleteAttackTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAttackTargetWithOptions($request, $runtime);
    }

    /**
     * Physically deletes a specified scan task by ScannerTaskId in AI Red Teaming.
     *
     * @remarks
     * Physically deletes a specified scan task by ScannerTaskId.
     * - Only tasks that belong to the current tenant can be deleted. If the task does not exist or belongs to another tenant, a 400 error is returned without exposing whether the resource exists.
     * - If the task is in progress (sample preparation, waiting, processing, or report generation), the task is automatically canceled before deletion. A cancellation failure does not block the deletion.
     * - Physical deletion: After deletion, the task record and its status and progress information cannot be queried or recovered. Confirm before you delete.
     * - Deleting a task record does not affect the scan target itself.
     *
     * @param request - DeleteScannerTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteScannerTaskResponse
     *
     * @param DeleteScannerTaskRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteScannerTaskResponse
     */
    public function deleteScannerTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scannerTaskId) {
            @$query['ScannerTaskId'] = $request->scannerTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteScannerTask',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteScannerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Physically deletes a specified scan task by ScannerTaskId in AI Red Teaming.
     *
     * @remarks
     * Physically deletes a specified scan task by ScannerTaskId.
     * - Only tasks that belong to the current tenant can be deleted. If the task does not exist or belongs to another tenant, a 400 error is returned without exposing whether the resource exists.
     * - If the task is in progress (sample preparation, waiting, processing, or report generation), the task is automatically canceled before deletion. A cancellation failure does not block the deletion.
     * - Physical deletion: After deletion, the task record and its status and progress information cannot be queried or recovered. Confirm before you delete.
     * - Deleting a task record does not affect the scan target itself.
     *
     * @param request - DeleteScannerTaskRequest
     *
     * @returns DeleteScannerTaskResponse
     *
     * @param DeleteScannerTaskRequest $request
     *
     * @return DeleteScannerTaskResponse
     */
    public function deleteScannerTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScannerTaskWithOptions($request, $runtime);
    }

    /**
     * Generates a one-time installation script for a scan target of the enterprise_relay type in AI Red Teaming. Only Linux platforms are supported. The script contains a one-time access code.
     *
     * @remarks
     * Generates an installation script for the internal network agent (relay-poller) for a specified scan target.
     * - The target must use the enterprise_relay connection method (see CreateAttackTarget). Otherwise, HTTP status code 400 is returned. If the target does not exist or belongs to another tenant, HTTP status code 400 is returned without exposing whether the resource exists.
     * - Only Linux is supported for the platform. The Platform parameter uses the "operating system-architecture" format and accepts only linux-amd64 and linux-arm64. Compatible architecture values include amd64, x86_64, x86, arm64, and aarch64. If only the architecture is specified, the operating system defaults to linux. Other operating systems such as macOS and Windows return HTTP status code 400. If this parameter is not specified, the default value is linux-amd64.
     * - The script contains a one-time access code. Each call issues a new access code, and the previous code automatically expires. Re-downloading the script generates a new access code. Use the latest generated script for installation.
     * - The script contains a temporary download link (a signed link valid for 1 hour) and a checksum for the poller binary. The binary is available only for Linux in both architectures.
     * - The script does not contain the actual endpoint or credentials of the target. The installer interactively enters these values when running the script. The platform does not store them.
     * - After installation, the poller automatically completes registration and enters a polling cycle. The registration and polling operations are automatically called by the script and do not require manual invocation. You can call TestConnectivity to verify end-to-end connectivity.
     *
     * @param request - GenerateRelayPollerScriptRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GenerateRelayPollerScriptResponse
     *
     * @param GenerateRelayPollerScriptRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GenerateRelayPollerScriptResponse
     */
    public function generateRelayPollerScriptWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GenerateRelayPollerScript',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GenerateRelayPollerScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Generates a one-time installation script for a scan target of the enterprise_relay type in AI Red Teaming. Only Linux platforms are supported. The script contains a one-time access code.
     *
     * @remarks
     * Generates an installation script for the internal network agent (relay-poller) for a specified scan target.
     * - The target must use the enterprise_relay connection method (see CreateAttackTarget). Otherwise, HTTP status code 400 is returned. If the target does not exist or belongs to another tenant, HTTP status code 400 is returned without exposing whether the resource exists.
     * - Only Linux is supported for the platform. The Platform parameter uses the "operating system-architecture" format and accepts only linux-amd64 and linux-arm64. Compatible architecture values include amd64, x86_64, x86, arm64, and aarch64. If only the architecture is specified, the operating system defaults to linux. Other operating systems such as macOS and Windows return HTTP status code 400. If this parameter is not specified, the default value is linux-amd64.
     * - The script contains a one-time access code. Each call issues a new access code, and the previous code automatically expires. Re-downloading the script generates a new access code. Use the latest generated script for installation.
     * - The script contains a temporary download link (a signed link valid for 1 hour) and a checksum for the poller binary. The binary is available only for Linux in both architectures.
     * - The script does not contain the actual endpoint or credentials of the target. The installer interactively enters these values when running the script. The platform does not store them.
     * - After installation, the poller automatically completes registration and enters a polling cycle. The registration and polling operations are automatically called by the script and do not require manual invocation. You can call TestConnectivity to verify end-to-end connectivity.
     *
     * @param request - GenerateRelayPollerScriptRequest
     *
     * @returns GenerateRelayPollerScriptResponse
     *
     * @param GenerateRelayPollerScriptRequest $request
     *
     * @return GenerateRelayPollerScriptResponse
     */
    public function generateRelayPollerScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateRelayPollerScriptWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a scan target by TargetId for AI Red Teaming, including connection configuration and scan task configuration.
     *
     * @remarks
     * Queries the details of a scan target by TargetId.
     * - Only targets that belong to the current tenant can be queried. If the target does not exist or belongs to another tenant, a 400 error is returned to avoid exposing whether the resource exists.
     * - The response includes basic target information, advanced connection configuration (ConnectionConfig), and scan task configuration (ScanTaskConfig).
     * - The following six aggregate fields are not populated by this operation and return empty values: cumulative scan count (ScanCount), last scan status (LastScanStatus), risk level (RiskLevel), first scan time (FirstScanTime), last scan time (LastScanTime), and last scan failure reason (LastScanFailMessage). Query these fields by calling ListAttackTargets or ListScanTasksByTarget.
     * - The response does not include sensitive credentials such as ApiKey in plaintext.
     *
     * @param request - GetAttackTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAttackTargetResponse
     *
     * @param GetAttackTargetRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetAttackTargetResponse
     */
    public function getAttackTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAttackTarget',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAttackTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a scan target by TargetId for AI Red Teaming, including connection configuration and scan task configuration.
     *
     * @remarks
     * Queries the details of a scan target by TargetId.
     * - Only targets that belong to the current tenant can be queried. If the target does not exist or belongs to another tenant, a 400 error is returned to avoid exposing whether the resource exists.
     * - The response includes basic target information, advanced connection configuration (ConnectionConfig), and scan task configuration (ScanTaskConfig).
     * - The following six aggregate fields are not populated by this operation and return empty values: cumulative scan count (ScanCount), last scan status (LastScanStatus), risk level (RiskLevel), first scan time (FirstScanTime), last scan time (LastScanTime), and last scan failure reason (LastScanFailMessage). Query these fields by calling ListAttackTargets or ListScanTasksByTarget.
     * - The response does not include sensitive credentials such as ApiKey in plaintext.
     *
     * @param request - GetAttackTargetRequest
     *
     * @returns GetAttackTargetResponse
     *
     * @param GetAttackTargetRequest $request
     *
     * @return GetAttackTargetResponse
     */
    public function getAttackTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttackTargetWithOptions($request, $runtime);
    }

    /**
     * Retrieves a temporary download URL for the attack hit data (hits.csv) of a specified scan task in AI Red Teaming. The URL is valid for 2 hours. An empty string is returned if the data has not been generated.
     *
     * @remarks
     * Retrieves a temporary download URL for the attack hit data (hits.csv) of a specified scan task.
     * - ScannerTaskId is required in practice. An empty value returns HTTP status code 400.
     * - You can query only tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, HTTP status code 400 is returned uniformly to avoid exposing whether the resource exists.
     * - The download URL is a signed temporary URL of Object Storage Service (OSS) that is valid for 2 hours (7,200 seconds). After the URL expires, call this operation again to obtain a new URL.
     * - If the attack hit data has not been generated (for existing tasks or when the agent execution mode does not produce hit data), the download URL in the response is an empty string. No error is returned.
     * - This operation is a read-only action (with the Get prefix). A RAM user with read-only permissions can call this operation. The behavior is consistent with the deprecated GenerateScannerTaskHitDataUrl operation.
     *
     * @param request - GetScannerTaskHitDataUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScannerTaskHitDataUrlResponse
     *
     * @param GetScannerTaskHitDataUrlRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetScannerTaskHitDataUrlResponse
     */
    public function getScannerTaskHitDataUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scannerTaskId) {
            @$query['ScannerTaskId'] = $request->scannerTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScannerTaskHitDataUrl',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScannerTaskHitDataUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary download URL for the attack hit data (hits.csv) of a specified scan task in AI Red Teaming. The URL is valid for 2 hours. An empty string is returned if the data has not been generated.
     *
     * @remarks
     * Retrieves a temporary download URL for the attack hit data (hits.csv) of a specified scan task.
     * - ScannerTaskId is required in practice. An empty value returns HTTP status code 400.
     * - You can query only tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, HTTP status code 400 is returned uniformly to avoid exposing whether the resource exists.
     * - The download URL is a signed temporary URL of Object Storage Service (OSS) that is valid for 2 hours (7,200 seconds). After the URL expires, call this operation again to obtain a new URL.
     * - If the attack hit data has not been generated (for existing tasks or when the agent execution mode does not produce hit data), the download URL in the response is an empty string. No error is returned.
     * - This operation is a read-only action (with the Get prefix). A RAM user with read-only permissions can call this operation. The behavior is consistent with the deprecated GenerateScannerTaskHitDataUrl operation.
     *
     * @param request - GetScannerTaskHitDataUrlRequest
     *
     * @returns GetScannerTaskHitDataUrlResponse
     *
     * @param GetScannerTaskHitDataUrlRequest $request
     *
     * @return GetScannerTaskHitDataUrlResponse
     */
    public function getScannerTaskHitDataUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScannerTaskHitDataUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves a temporary download URL for the HTML result report of an AI Red Teaming scan task. The URL is valid for 2 hours. An empty string is returned if the report has not been generated.
     *
     * @remarks
     * Retrieves a temporary download URL for the HTML result report of a specified scan task.
     * - You can only query tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, a 400 error is returned to avoid exposing whether the resource exists.
     * - The download URL is a signed temporary URL from object storage, valid for 2 hours (7,200 seconds). After the URL expires, call this operation again to obtain a new URL.
     * - If the task result report has not been generated (the task is not complete or the report has not been produced), the download URL in the response is an empty string and no error is returned. Call this operation after the task status changes to completed.
     *
     * @param request - GetScannerTaskResultHtmlUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetScannerTaskResultHtmlUrlResponse
     *
     * @param GetScannerTaskResultHtmlUrlRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return GetScannerTaskResultHtmlUrlResponse
     */
    public function getScannerTaskResultHtmlUrlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scannerTaskId) {
            @$query['ScannerTaskId'] = $request->scannerTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetScannerTaskResultHtmlUrl',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetScannerTaskResultHtmlUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a temporary download URL for the HTML result report of an AI Red Teaming scan task. The URL is valid for 2 hours. An empty string is returned if the report has not been generated.
     *
     * @remarks
     * Retrieves a temporary download URL for the HTML result report of a specified scan task.
     * - You can only query tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, a 400 error is returned to avoid exposing whether the resource exists.
     * - The download URL is a signed temporary URL from object storage, valid for 2 hours (7,200 seconds). After the URL expires, call this operation again to obtain a new URL.
     * - If the task result report has not been generated (the task is not complete or the report has not been produced), the download URL in the response is an empty string and no error is returned. Call this operation after the task status changes to completed.
     *
     * @param request - GetScannerTaskResultHtmlUrlRequest
     *
     * @returns GetScannerTaskResultHtmlUrlResponse
     *
     * @param GetScannerTaskResultHtmlUrlRequest $request
     *
     * @return GetScannerTaskResultHtmlUrlResponse
     */
    public function getScannerTaskResultHtmlUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getScannerTaskResultHtmlUrlWithOptions($request, $runtime);
    }

    /**
     * Retrieves a list of agent risk events.
     *
     * @param request - ListAIAgentEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAIAgentEventResponse
     *
     * @param ListAIAgentEventRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAIAgentEventResponse
     */
    public function listAIAgentEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->assetName) {
            @$query['AssetName'] = $request->assetName;
        }

        if (null !== $request->assetType) {
            @$query['AssetType'] = $request->assetType;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->infraInstanceId) {
            @$query['InfraInstanceId'] = $request->infraInstanceId;
        }

        if (null !== $request->infraName) {
            @$query['InfraName'] = $request->infraName;
        }

        if (null !== $request->infraRegionId) {
            @$query['InfraRegionId'] = $request->infraRegionId;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceDirectoryAccountId) {
            @$query['ResourceDirectoryAccountId'] = $request->resourceDirectoryAccountId;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->riskName) {
            @$query['RiskName'] = $request->riskName;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->statusList) {
            @$query['StatusList'] = $request->statusList;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAIAgentEvent',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAIAgentEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves a list of agent risk events.
     *
     * @param request - ListAIAgentEventRequest
     *
     * @returns ListAIAgentEventResponse
     *
     * @param ListAIAgentEventRequest $request
     *
     * @return ListAIAgentEventResponse
     */
    public function listAIAgentEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentEventWithOptions($request, $runtime);
    }

    /**
     * Queries the list of scan targets for AI Red Teaming. This operation supports multi-dimensional filtering and sorting.
     *
     * @param request - ListAttackTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAttackTargetsResponse
     *
     * @param ListAttackTargetsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAttackTargetsResponse
     */
    public function listAttackTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->firstScanTimeEnd) {
            @$query['FirstScanTimeEnd'] = $request->firstScanTimeEnd;
        }

        if (null !== $request->firstScanTimeStart) {
            @$query['FirstScanTimeStart'] = $request->firstScanTimeStart;
        }

        if (null !== $request->lastScanStatus) {
            @$query['LastScanStatus'] = $request->lastScanStatus;
        }

        if (null !== $request->lastScanTimeEnd) {
            @$query['LastScanTimeEnd'] = $request->lastScanTimeEnd;
        }

        if (null !== $request->lastScanTimeStart) {
            @$query['LastScanTimeStart'] = $request->lastScanTimeStart;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->provider) {
            @$query['Provider'] = $request->provider;
        }

        if (null !== $request->riskLevel) {
            @$query['RiskLevel'] = $request->riskLevel;
        }

        if (null !== $request->sortField) {
            @$query['SortField'] = $request->sortField;
        }

        if (null !== $request->sortOrder) {
            @$query['SortOrder'] = $request->sortOrder;
        }

        if (null !== $request->targetName) {
            @$query['TargetName'] = $request->targetName;
        }

        if (null !== $request->targetType) {
            @$query['TargetType'] = $request->targetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAttackTargets',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAttackTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of scan targets for AI Red Teaming. This operation supports multi-dimensional filtering and sorting.
     *
     * @param request - ListAttackTargetsRequest
     *
     * @returns ListAttackTargetsResponse
     *
     * @param ListAttackTargetsRequest $request
     *
     * @return ListAttackTargetsResponse
     */
    public function listAttackTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAttackTargetsWithOptions($request, $runtime);
    }

    /**
     * Performs a paged query of scan tasks under a specified scan target for AI Red Teaming. Supports filtering by detection intensity, task status, and scan mode.
     *
     * @remarks
     * Performs a paged query of the scan task list under a specified scan target. Only tasks belonging to targets owned by the current tenant are returned.
     * Query scope and sorting:
     * - Only tasks created within the last 366 days are returned.
     * - Results are sorted by creation time in descending order.
     * - TaskStatus filters by task status. ScanType filters by scan mode. The scan mode is stored in the task execute parameters. Historical tasks without a recorded scan mode are treated as attack.
     * Paged query rules:
     * - PageNumber starts from 1. Values less than 1 are normalized to 1.
     * - PageSize defaults to 10, with a maximum of 100 per page. Values greater than 100 are clamped to 100. Values less than 1 return HTTP status code 400.
     * - The PageNumber and PageSize values in the response are the normalization values that actually take effect.
     *
     * @param request - ListScanTasksByTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScanTasksByTargetResponse
     *
     * @param ListScanTasksByTargetRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListScanTasksByTargetResponse
     */
    public function listScanTasksByTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sampleLevel) {
            @$query['SampleLevel'] = $request->sampleLevel;
        }

        if (null !== $request->scanType) {
            @$query['ScanType'] = $request->scanType;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        if (null !== $request->taskStatus) {
            @$query['TaskStatus'] = $request->taskStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScanTasksByTarget',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScanTasksByTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs a paged query of scan tasks under a specified scan target for AI Red Teaming. Supports filtering by detection intensity, task status, and scan mode.
     *
     * @remarks
     * Performs a paged query of the scan task list under a specified scan target. Only tasks belonging to targets owned by the current tenant are returned.
     * Query scope and sorting:
     * - Only tasks created within the last 366 days are returned.
     * - Results are sorted by creation time in descending order.
     * - TaskStatus filters by task status. ScanType filters by scan mode. The scan mode is stored in the task execute parameters. Historical tasks without a recorded scan mode are treated as attack.
     * Paged query rules:
     * - PageNumber starts from 1. Values less than 1 are normalized to 1.
     * - PageSize defaults to 10, with a maximum of 100 per page. Values greater than 100 are clamped to 100. Values less than 1 return HTTP status code 400.
     * - The PageNumber and PageSize values in the response are the normalization values that actually take effect.
     *
     * @param request - ListScanTasksByTargetRequest
     *
     * @returns ListScanTasksByTargetResponse
     *
     * @param ListScanTasksByTargetRequest $request
     *
     * @return ListScanTasksByTargetResponse
     */
    public function listScanTasksByTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScanTasksByTargetWithOptions($request, $runtime);
    }

    /**
     * Get subtask information.
     *
     * @param request - ListSubTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListSubTasksResponse
     *
     * @param ListSubTasksRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListSubTasksResponse
     */
    public function listSubTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->rootTaskId) {
            @$query['RootTaskId'] = $request->rootTaskId;
        }

        if (null !== $request->taskType) {
            @$query['TaskType'] = $request->taskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListSubTasks',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListSubTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Get subtask information.
     *
     * @param request - ListSubTasksRequest
     *
     * @returns ListSubTasksResponse
     *
     * @param ListSubTasksRequest $request
     *
     * @return ListSubTasksResponse
     */
    public function listSubTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSubTasksWithOptions($request, $runtime);
    }

    /**
     * Stops (cancels) an in-progress scan task for AI Red Teaming. Calling this operation on a task that is already in a desired state is idempotent and performs no action.
     *
     * @remarks
     * Stops (cancels) the scan task specified by ScannerTaskId.
     * - You can only operate on tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, a 400 error is returned without exposing whether the resource exists.
     * - Only tasks in an in-progress state (sample preparation, waiting, processing, or report generation) are actually canceled. The task status is set to canceled, the end time is recorded, and the underlying execution job is stopped asynchronously.
     * - Idempotent: If the task is already in a desired state (completed, failed, timed out, or canceled), the call returns success without modifying the task.
     * - The underlying execution job is stopped asynchronously. A failure to stop the job does not affect the cancellation result of the task itself.
     *
     * @param request - StopScannerTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopScannerTaskResponse
     *
     * @param StopScannerTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopScannerTaskResponse
     */
    public function stopScannerTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scannerTaskId) {
            @$query['ScannerTaskId'] = $request->scannerTaskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopScannerTask',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopScannerTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops (cancels) an in-progress scan task for AI Red Teaming. Calling this operation on a task that is already in a desired state is idempotent and performs no action.
     *
     * @remarks
     * Stops (cancels) the scan task specified by ScannerTaskId.
     * - You can only operate on tasks that belong to the current tenant. If the task does not exist or belongs to another tenant, a 400 error is returned without exposing whether the resource exists.
     * - Only tasks in an in-progress state (sample preparation, waiting, processing, or report generation) are actually canceled. The task status is set to canceled, the end time is recorded, and the underlying execution job is stopped asynchronously.
     * - Idempotent: If the task is already in a desired state (completed, failed, timed out, or canceled), the call returns success without modifying the task.
     * - The underlying execution job is stopped asynchronously. A failure to stop the job does not affect the cancellation result of the task itself.
     *
     * @param request - StopScannerTaskRequest
     *
     * @returns StopScannerTaskResponse
     *
     * @param StopScannerTaskRequest $request
     *
     * @return StopScannerTaskResponse
     */
    public function stopScannerTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopScannerTaskWithOptions($request, $runtime);
    }

    /**
     * Tests the network connectivity and authentication validity of an AI Red Teaming target.
     *
     * @remarks
     * Tests the network connectivity and authentication validity of a specified attack target.
     * This operation uses an asynchronous polling model:
     * - First call (without CheckId): Immediately returns a CheckId with VerifyStatus=checking. The actual test runs asynchronously in the background for up to 60 seconds.
     * - Subsequent calls (with the CheckId returned from the first call): Queries the latest status of the corresponding CheckId, which may be checking, verified, or failed.
     * - Poll at 2-second intervals for up to 60 seconds. After the CheckId expires, the operation returns failed with VerifyMessage set to "check expired, please retry".
     * Use one of the following two approaches for parameters:
     * - Approach A: Specify only TargetId. The system reads Endpoint, ApiKey, ModelName, ConnectionMethod, and ConnectionConfig from the saved target configuration and ignores any parameters with the same names in the request.
     * - Approach B: Do not specify TargetId. Instead, provide the five connection parameters directly in the request.
     *
     * @param request - TestConnectivityRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TestConnectivityResponse
     *
     * @param TestConnectivityRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return TestConnectivityResponse
     */
    public function testConnectivityWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->apiKey) {
            @$query['ApiKey'] = $request->apiKey;
        }

        if (null !== $request->checkId) {
            @$query['CheckId'] = $request->checkId;
        }

        if (null !== $request->connectionConfig) {
            @$query['ConnectionConfig'] = $request->connectionConfig;
        }

        if (null !== $request->connectionMethod) {
            @$query['ConnectionMethod'] = $request->connectionMethod;
        }

        if (null !== $request->endpoint) {
            @$query['Endpoint'] = $request->endpoint;
        }

        if (null !== $request->modelName) {
            @$query['ModelName'] = $request->modelName;
        }

        if (null !== $request->targetId) {
            @$query['TargetId'] = $request->targetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TestConnectivity',
            'version' => '2026-01-01',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TestConnectivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Tests the network connectivity and authentication validity of an AI Red Teaming target.
     *
     * @remarks
     * Tests the network connectivity and authentication validity of a specified attack target.
     * This operation uses an asynchronous polling model:
     * - First call (without CheckId): Immediately returns a CheckId with VerifyStatus=checking. The actual test runs asynchronously in the background for up to 60 seconds.
     * - Subsequent calls (with the CheckId returned from the first call): Queries the latest status of the corresponding CheckId, which may be checking, verified, or failed.
     * - Poll at 2-second intervals for up to 60 seconds. After the CheckId expires, the operation returns failed with VerifyMessage set to "check expired, please retry".
     * Use one of the following two approaches for parameters:
     * - Approach A: Specify only TargetId. The system reads Endpoint, ApiKey, ModelName, ConnectionMethod, and ConnectionConfig from the saved target configuration and ignores any parameters with the same names in the request.
     * - Approach B: Do not specify TargetId. Instead, provide the five connection parameters directly in the request.
     *
     * @param request - TestConnectivityRequest
     *
     * @returns TestConnectivityResponse
     *
     * @param TestConnectivityRequest $request
     *
     * @return TestConnectivityResponse
     */
    public function testConnectivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testConnectivityWithOptions($request, $runtime);
    }
}
