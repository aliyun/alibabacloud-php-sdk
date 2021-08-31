<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignPermissionsToRoleRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignPermissionsToRoleResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignPermissionsToRoleShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignResourcesToPermissionRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignResourcesToPermissionResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\AssignResourcesToPermissionShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CheckPermissionOfRoleRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CheckPermissionOfRoleResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreatePermissionRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreatePermissionResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateResourceRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateResourceResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateResourceShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateRoleRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateRoleResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\CreateRoleShrinkRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllPermissionOfRoleRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllPermissionOfRoleResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryPermissionsRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryPermissionsResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryRolesByPartialRoleCodeRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryRolesByPartialRoleCodeResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\RemovePermissionsOfRoleRequest;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\RemovePermissionsOfRoleResponse;
use AlibabaCloud\SDK\Linkedmall\V20210616\Models\RemovePermissionsOfRoleShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Linkedmall extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-hangzhou'                 => 'linkedmall.aliyuncs.com',
            'cn-shanghai'                 => 'linkedmall.aliyuncs.com',
            'ap-northeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-northeast-2-pop'          => 'linkedmall.aliyuncs.com',
            'ap-south-1'                  => 'linkedmall.aliyuncs.com',
            'ap-southeast-1'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-2'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-3'              => 'linkedmall.aliyuncs.com',
            'ap-southeast-5'              => 'linkedmall.aliyuncs.com',
            'cn-beijing'                  => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-1'        => 'linkedmall.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'linkedmall.aliyuncs.com',
            'cn-beijing-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'linkedmall.aliyuncs.com',
            'cn-chengdu'                  => 'linkedmall.aliyuncs.com',
            'cn-edge-1'                   => 'linkedmall.aliyuncs.com',
            'cn-fujian'                   => 'linkedmall.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-finance'         => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'linkedmall.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'linkedmall.aliyuncs.com',
            'cn-hongkong'                 => 'linkedmall.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'linkedmall.aliyuncs.com',
            'cn-huhehaote'                => 'linkedmall.aliyuncs.com',
            'cn-north-2-gov-1'            => 'linkedmall.aliyuncs.com',
            'cn-qingdao'                  => 'linkedmall.aliyuncs.com',
            'cn-qingdao-nebula'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'linkedmall.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'linkedmall.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shanghai-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'linkedmall.aliyuncs.com',
            'cn-shenzhen'                 => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-inner'           => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'linkedmall.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'linkedmall.aliyuncs.com',
            'cn-wuhan'                    => 'linkedmall.aliyuncs.com',
            'cn-yushanfang'               => 'linkedmall.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou'              => 'linkedmall.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'linkedmall.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'linkedmall.aliyuncs.com',
            'eu-central-1'                => 'linkedmall.aliyuncs.com',
            'eu-west-1'                   => 'linkedmall.aliyuncs.com',
            'eu-west-1-oxs'               => 'linkedmall.aliyuncs.com',
            'me-east-1'                   => 'linkedmall.aliyuncs.com',
            'rus-west-1-pop'              => 'linkedmall.aliyuncs.com',
            'us-east-1'                   => 'linkedmall.aliyuncs.com',
            'us-west-1'                   => 'linkedmall.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('linkedmall', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param QueryRolesByPartialRoleCodeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryRolesByPartialRoleCodeResponse
     */
    public function queryRolesByPartialRoleCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryRolesByPartialRoleCodeResponse::fromMap($this->doRPCRequest('QueryRolesByPartialRoleCode', '2021-06-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryRolesByPartialRoleCodeRequest $request
     *
     * @return QueryRolesByPartialRoleCodeResponse
     */
    public function queryRolesByPartialRoleCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRolesByPartialRoleCodeWithOptions($request, $runtime);
    }

    /**
     * @param CreatePermissionRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreatePermissionResponse
     */
    public function createPermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreatePermissionResponse::fromMap($this->doRPCRequest('CreatePermission', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreatePermissionRequest $request
     *
     * @return CreatePermissionResponse
     */
    public function createPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPermissionWithOptions($request, $runtime);
    }

    /**
     * @param AssignResourcesToPermissionRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return AssignResourcesToPermissionResponse
     */
    public function assignResourcesToPermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AssignResourcesToPermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceCodes)) {
            $request->resourceCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceCodes, 'ResourceCodes', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceIds)) {
            $request->resourceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignResourcesToPermissionResponse::fromMap($this->doRPCRequest('AssignResourcesToPermission', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssignResourcesToPermissionRequest $request
     *
     * @return AssignResourcesToPermissionResponse
     */
    public function assignResourcesToPermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignResourcesToPermissionWithOptions($request, $runtime);
    }

    /**
     * @param CreateResourceRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateResourceResponse
     */
    public function createResourceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateResourceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceAttributeList)) {
            $request->resourceAttributeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceAttributeList, 'ResourceAttributeList', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateResourceResponse::fromMap($this->doRPCRequest('CreateResource', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateResourceRequest $request
     *
     * @return CreateResourceResponse
     */
    public function createResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourceWithOptions($request, $runtime);
    }

    /**
     * @param QueryPermissionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QueryPermissionsResponse
     */
    public function queryPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryPermissionsResponse::fromMap($this->doRPCRequest('QueryPermissions', '2021-06-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryPermissionsRequest $request
     *
     * @return QueryPermissionsResponse
     */
    public function queryPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param AssignPermissionsToRoleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return AssignPermissionsToRoleResponse
     */
    public function assignPermissionsToRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AssignPermissionsToRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissionIds)) {
            $request->permissionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissionIds, 'PermissionIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->permissionCodes)) {
            $request->permissionCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissionCodes, 'PermissionCodes', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return AssignPermissionsToRoleResponse::fromMap($this->doRPCRequest('AssignPermissionsToRole', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param AssignPermissionsToRoleRequest $request
     *
     * @return AssignPermissionsToRoleResponse
     */
    public function assignPermissionsToRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPermissionsToRoleWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllPermissionOfRoleRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryAllPermissionOfRoleResponse
     */
    public function queryAllPermissionOfRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryAllPermissionOfRoleResponse::fromMap($this->doRPCRequest('QueryAllPermissionOfRole', '2021-06-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAllPermissionOfRoleRequest $request
     *
     * @return QueryAllPermissionOfRoleResponse
     */
    public function queryAllPermissionOfRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllPermissionOfRoleWithOptions($request, $runtime);
    }

    /**
     * @param QueryAllResourcesWithPermissionsRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryAllResourcesWithPermissionsResponse
     */
    public function queryAllResourcesWithPermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return QueryAllResourcesWithPermissionsResponse::fromMap($this->doRPCRequest('QueryAllResourcesWithPermissions', '2021-06-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param QueryAllResourcesWithPermissionsRequest $request
     *
     * @return QueryAllResourcesWithPermissionsResponse
     */
    public function queryAllResourcesWithPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAllResourcesWithPermissionsWithOptions($request, $runtime);
    }

    /**
     * @param CheckPermissionOfRoleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CheckPermissionOfRoleResponse
     */
    public function checkPermissionOfRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => $query,
        ]);

        return CheckPermissionOfRoleResponse::fromMap($this->doRPCRequest('CheckPermissionOfRole', '2021-06-16', 'HTTPS', 'GET', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CheckPermissionOfRoleRequest $request
     *
     * @return CheckPermissionOfRoleResponse
     */
    public function checkPermissionOfRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkPermissionOfRoleWithOptions($request, $runtime);
    }

    /**
     * @param RemovePermissionsOfRoleRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return RemovePermissionsOfRoleResponse
     */
    public function removePermissionsOfRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemovePermissionsOfRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->permissionIds)) {
            $request->permissionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissionIds, 'PermissionIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->permissionCodes)) {
            $request->permissionCodesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->permissionCodes, 'PermissionCodes', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return RemovePermissionsOfRoleResponse::fromMap($this->doRPCRequest('RemovePermissionsOfRole', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param RemovePermissionsOfRoleRequest $request
     *
     * @return RemovePermissionsOfRoleResponse
     */
    public function removePermissionsOfRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePermissionsOfRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateRoleRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return CreateRoleResponse
     */
    public function createRoleWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRoleShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->extendRoleIds)) {
            $request->extendRoleIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extendRoleIds, 'ExtendRoleIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->mutexRoleIds)) {
            $request->mutexRoleIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->mutexRoleIds, 'MutexRoleIds', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return CreateRoleResponse::fromMap($this->doRPCRequest('CreateRole', '2021-06-16', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param CreateRoleRequest $request
     *
     * @return CreateRoleResponse
     */
    public function createRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRoleWithOptions($request, $runtime);
    }
}
