<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails;
use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 101
     *
     * @var int
     */
    public $apiGroupId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $apiGroupName;

    /**
     * @description This parameter is required.
     *
     * @example API_01
     *
     * @var string
     */
    public $apiName;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $apiType;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $bizProtocol;

    /**
     * @description This parameter is required.
     *
     * @example 600
     *
     * @var int
     */
    public $cacheTimeout;

    /**
     * @example 1
     *
     * @var int
     */
    public $callMode;

    /**
     * @var string
     */
    public $customUpdateRate;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 30
     *
     * @var int
     */
    public $executionTimeout;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $mode;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $requestType;

    /**
     * @description This parameter is required.
     *
     * @var scriptDetails
     */
    public $scriptDetails;

    /**
     * @description This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 1
     *
     * @var int
     */
    public $updateRate;

    /**
     * @description This parameter is required.
     *
     * @example V1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'apiGroupId' => 'ApiGroupId',
        'apiGroupName' => 'ApiGroupName',
        'apiName' => 'ApiName',
        'apiType' => 'ApiType',
        'bizProtocol' => 'BizProtocol',
        'cacheTimeout' => 'CacheTimeout',
        'callMode' => 'CallMode',
        'customUpdateRate' => 'CustomUpdateRate',
        'description' => 'Description',
        'executionTimeout' => 'ExecutionTimeout',
        'mode' => 'Mode',
        'projectId' => 'ProjectId',
        'requestType' => 'RequestType',
        'scriptDetails' => 'ScriptDetails',
        'timeout' => 'Timeout',
        'updateRate' => 'UpdateRate',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiGroupId) {
            $res['ApiGroupId'] = $this->apiGroupId;
        }
        if (null !== $this->apiGroupName) {
            $res['ApiGroupName'] = $this->apiGroupName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiType) {
            $res['ApiType'] = $this->apiType;
        }
        if (null !== $this->bizProtocol) {
            $res['BizProtocol'] = $this->bizProtocol;
        }
        if (null !== $this->cacheTimeout) {
            $res['CacheTimeout'] = $this->cacheTimeout;
        }
        if (null !== $this->callMode) {
            $res['CallMode'] = $this->callMode;
        }
        if (null !== $this->customUpdateRate) {
            $res['CustomUpdateRate'] = $this->customUpdateRate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionTimeout) {
            $res['ExecutionTimeout'] = $this->executionTimeout;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestType) {
            $res['RequestType'] = $this->requestType;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->updateRate) {
            $res['UpdateRate'] = $this->updateRate;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiGroupId'])) {
            $model->apiGroupId = $map['ApiGroupId'];
        }
        if (isset($map['ApiGroupName'])) {
            $model->apiGroupName = $map['ApiGroupName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiType'])) {
            $model->apiType = $map['ApiType'];
        }
        if (isset($map['BizProtocol'])) {
            if (!empty($map['BizProtocol'])) {
                $model->bizProtocol = $map['BizProtocol'];
            }
        }
        if (isset($map['CacheTimeout'])) {
            $model->cacheTimeout = $map['CacheTimeout'];
        }
        if (isset($map['CallMode'])) {
            $model->callMode = $map['CallMode'];
        }
        if (isset($map['CustomUpdateRate'])) {
            $model->customUpdateRate = $map['CustomUpdateRate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionTimeout'])) {
            $model->executionTimeout = $map['ExecutionTimeout'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestType'])) {
            $model->requestType = $map['RequestType'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = scriptDetails::fromMap($map['ScriptDetails']);
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['UpdateRate'])) {
            $model->updateRate = $map['UpdateRate'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
