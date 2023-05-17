<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CheckUsedPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreateUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DeleteUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersShrinkRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ListPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ModifyUserResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\QuerySyncStatusByAliUidResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemovePropertyResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SetUserPropertyValueResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\SyncAllEduInfoResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockMfaDeviceResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponse;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyRequest;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Edsuser extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('eds-user', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param CheckUsedPropertyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CheckUsedPropertyResponse
     */
    public function checkUsedPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUsedProperty',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUsedPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CheckUsedPropertyRequest $request
     *
     * @return CheckUsedPropertyResponse
     */
    public function checkUsedProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **CheckUsedPropertyValue**.
     *   *
     * @param CheckUsedPropertyValueRequest $request CheckUsedPropertyValueRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CheckUsedPropertyValueResponse CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $query['PropertyValueId'] = $request->propertyValueId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CheckUsedPropertyValue',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CheckUsedPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **CheckUsedPropertyValue**.
     *   *
     * @param CheckUsedPropertyValueRequest $request CheckUsedPropertyValueRequest
     *
     * @return CheckUsedPropertyValueResponse CheckUsedPropertyValueResponse
     */
    public function checkUsedPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUsedPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @param CreatePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePropertyResponse
     */
    public function createPropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyKey)) {
            $body['PropertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValues)) {
            $body['PropertyValues'] = $request->propertyValues;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateProperty',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreatePropertyRequest $request
     *
     * @return CreatePropertyResponse
     */
    public function createProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPropertyWithOptions($request, $runtime);
    }

    /**
     * The mobile number of the end user.
     *   *
     * @param CreateUsersRequest $request CreateUsersRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The mobile number of the end user.
     *   *
     * @param CreateUsersRequest $request CreateUsersRequest
     *
     * @return CreateUsersResponse CreateUsersResponse
     */
    public function createUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUsersWithOptions($request, $runtime);
    }

    /**
     * The operation that you want to perform. Set the value to **DeleteUserPropertyValue**.
     *   *
     * @param DeleteUserPropertyValueRequest $request DeleteUserPropertyValueRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteUserPropertyValueResponse DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $body['PropertyValueId'] = $request->propertyValueId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteUserPropertyValue',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The operation that you want to perform. Set the value to **DeleteUserPropertyValue**.
     *   *
     * @param DeleteUserPropertyValueRequest $request DeleteUserPropertyValueRequest
     *
     * @return DeleteUserPropertyValueResponse DeleteUserPropertyValueResponse
     */
    public function deleteUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @param DescribeMfaDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeMfaDevicesResponse
     */
    public function describeMfaDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->serialNumbers)) {
            $query['SerialNumbers'] = $request->serialNumbers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMfaDevices',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMfaDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeMfaDevicesRequest $request
     *
     * @return DescribeMfaDevicesResponse
     */
    public function describeMfaDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMfaDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsersRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeUsersResponse
     */
    public function describeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $body = [];
        if (!Utils::isUnset($request->endUserIds)) {
            $body['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->excludeEndUserIds)) {
            $body['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }
        if (!Utils::isUnset($request->orgId)) {
            $body['OrgId'] = $request->orgId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsersRequest $request
     *
     * @return DescribeUsersResponse
     */
    public function describeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersWithOptions($request, $runtime);
    }

    /**
     * @param FilterUsersRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return FilterUsersResponse
     */
    public function filterUsersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FilterUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderParam)) {
            $request->orderParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderParam, 'OrderParam', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->excludeEndUserIds)) {
            $query['ExcludeEndUserIds'] = $request->excludeEndUserIds;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->includeDesktopCount)) {
            $query['IncludeDesktopCount'] = $request->includeDesktopCount;
        }
        if (!Utils::isUnset($request->includeDesktopGroupCount)) {
            $query['IncludeDesktopGroupCount'] = $request->includeDesktopGroupCount;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderParamShrink)) {
            $query['OrderParam'] = $request->orderParamShrink;
        }
        if (!Utils::isUnset($request->orgId)) {
            $query['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->ownerType)) {
            $query['OwnerType'] = $request->ownerType;
        }
        if (!Utils::isUnset($request->propertyFilterParam)) {
            $query['PropertyFilterParam'] = $request->propertyFilterParam;
        }
        if (!Utils::isUnset($request->propertyKeyValueFilterParam)) {
            $query['PropertyKeyValueFilterParam'] = $request->propertyKeyValueFilterParam;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'FilterUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return FilterUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param FilterUsersRequest $request
     *
     * @return FilterUsersResponse
     */
    public function filterUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->filterUsersWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListPropertyResponse
     */
    public function listPropertyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListProperty',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListPropertyResponse
     */
    public function listProperty()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyWithOptions($runtime);
    }

    /**
     * @param ListPropertyValueRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListPropertyValueResponse
     */
    public function listPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->propertyId)) {
            $query['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPropertyValue',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListPropertyValueRequest $request
     *
     * @return ListPropertyValueResponse
     */
    public function listPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPropertyValueWithOptions($request, $runtime);
    }

    /**
     * Locks a virtual MFA device that is bound to a convenience user.
     *   *
     * @param LockMfaDeviceRequest $request LockMfaDeviceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return LockMfaDeviceResponse LockMfaDeviceResponse
     */
    public function lockMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockMfaDevice',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Locks a virtual MFA device that is bound to a convenience user.
     *   *
     * @param LockMfaDeviceRequest $request LockMfaDeviceRequest
     *
     * @return LockMfaDeviceResponse LockMfaDeviceResponse
     */
    public function lockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @param LockUsersRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return LockUsersResponse
     */
    public function lockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'LockUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param LockUsersRequest $request
     *
     * @return LockUsersResponse
     */
    public function lockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockUsersWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ModifyUserResponse
     */
    public function modifyUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->email)) {
            $query['Email'] = $request->email;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->phone)) {
            $query['Phone'] = $request->phone;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUser',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyUserRequest $request
     *
     * @return ModifyUserResponse
     */
    public function modifyUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUidWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'QuerySyncStatusByAliUid',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QuerySyncStatusByAliUidResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return QuerySyncStatusByAliUidResponse
     */
    public function querySyncStatusByAliUid()
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySyncStatusByAliUidWithOptions($runtime);
    }

    /**
     * @param RemoveMfaDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RemoveMfaDeviceResponse
     */
    public function removeMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveMfaDevice',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveMfaDeviceRequest $request
     *
     * @return RemoveMfaDeviceResponse
     */
    public function removeMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @param RemovePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RemovePropertyResponse
     */
    public function removePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveProperty',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemovePropertyRequest $request
     *
     * @return RemovePropertyResponse
     */
    public function removeProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePropertyWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return RemoveUsersResponse
     */
    public function removeUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveUsersRequest $request
     *
     * @return RemoveUsersResponse
     */
    public function removeUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUsersWithOptions($request, $runtime);
    }

    /**
     * @param ResetUserPasswordRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->notifyType)) {
            $body['NotifyType'] = $request->notifyType;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ResetUserPassword',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetUserPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetUserPasswordRequest $request
     *
     * @return ResetUserPasswordResponse
     */
    public function resetUserPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetUserPasswordWithOptions($request, $runtime);
    }

    /**
     * The ID of the request.
     *   *
     * @param SetUserPropertyValueRequest $request SetUserPropertyValueRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetUserPropertyValueResponse SetUserPropertyValueResponse
     */
    public function setUserPropertyValueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyValueId)) {
            $body['PropertyValueId'] = $request->propertyValueId;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->userName)) {
            $body['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetUserPropertyValue',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetUserPropertyValueResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The ID of the request.
     *   *
     * @param SetUserPropertyValueRequest $request SetUserPropertyValueRequest
     *
     * @return SetUserPropertyValueResponse SetUserPropertyValueResponse
     */
    public function setUserPropertyValue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserPropertyValueWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return SyncAllEduInfoResponse
     */
    public function syncAllEduInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'SyncAllEduInfo',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncAllEduInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return SyncAllEduInfoResponse
     */
    public function syncAllEduInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncAllEduInfoWithOptions($runtime);
    }

    /**
     * @param UnlockMfaDeviceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnlockMfaDeviceResponse
     */
    public function unlockMfaDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockMfaDevice',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockMfaDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockMfaDeviceRequest $request
     *
     * @return UnlockMfaDeviceResponse
     */
    public function unlockMfaDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockMfaDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnlockUsersRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UnlockUsersResponse
     */
    public function unlockUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UnlockUsers',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockUsersRequest $request
     *
     * @return UnlockUsersResponse
     */
    public function unlockUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockUsersWithOptions($request, $runtime);
    }

    /**
     * @param UpdatePropertyRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePropertyResponse
     */
    public function updatePropertyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->propertyId)) {
            $body['PropertyId'] = $request->propertyId;
        }
        if (!Utils::isUnset($request->propertyKey)) {
            $body['PropertyKey'] = $request->propertyKey;
        }
        if (!Utils::isUnset($request->propertyValues)) {
            $body['PropertyValues'] = $request->propertyValues;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateProperty',
            'version'     => '2021-03-08',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdatePropertyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdatePropertyRequest $request
     *
     * @return UpdatePropertyResponse
     */
    public function updateProperty($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePropertyWithOptions($request, $runtime);
    }
}
