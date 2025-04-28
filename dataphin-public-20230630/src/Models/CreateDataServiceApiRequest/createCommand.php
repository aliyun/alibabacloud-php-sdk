<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataServiceApiRequest\createCommand\scriptDetails;

class createCommand extends Model
{
    /**
     * @var int
     */
    public $apiGroupId;

    /**
     * @var string
     */
    public $apiGroupName;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $apiType;

    /**
     * @var int[]
     */
    public $bizProtocol;

    /**
     * @var int
     */
    public $cacheTimeout;

    /**
     * @var int
     */
    public $callMode;

    /**
     * @var string
     */
    public $customUpdateRate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $executionTimeout;

    /**
     * @var int
     */
    public $mode;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $requestType;

    /**
     * @var scriptDetails
     */
    public $scriptDetails;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $updateRate;

    /**
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

    public function validate()
    {
        if (\is_array($this->bizProtocol)) {
            Model::validateArray($this->bizProtocol);
        }
        if (null !== $this->scriptDetails) {
            $this->scriptDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->bizProtocol)) {
                $res['BizProtocol'] = [];
                $n1 = 0;
                foreach ($this->bizProtocol as $item1) {
                    $res['BizProtocol'][$n1++] = $item1;
                }
            }
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
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toArray($noStream) : $this->scriptDetails;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->bizProtocol = [];
                $n1 = 0;
                foreach ($map['BizProtocol'] as $item1) {
                    $model->bizProtocol[$n1++] = $item1;
                }
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
