<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\CreateFlowLogRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateFlowLogRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the flow log.
     *
     * > The description can be empty or 1 to 256 characters in length. It cannot start with http:// or https://.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run.
     *   **false** (default): performs a dry run and performs the actual request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the ECR.
     *
     * This parameter is required.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The name of the flow log.
     *
     * > The name can be empty or 1 to 128 characters in length and cannot start with http:// or https://.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The VBR ID.
     *
     * This parameter is required.
     *
     * @example vbr-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of network instance. Valid values:
     *
     *   **VBR**
     *
     * This parameter is required.
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The time window for collecting log data. Unit: seconds. Valid values:
     *
     * - **60**
     * - **600**
     *
     * Default value: **600**.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     *   If a Logstore is already created in the selected region, enter the name of the Logstore.
     *   If no Logstores are created in the selected region, enter a name and the system automatically creates a Logstore. The name of the Logstore. The name must meet the following requirements:
     *   The name must be unique in a project.
     *   It can contain only lowercase letters, digits, hyphens (-), and underscores (_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * This parameter is required.
     *
     * @example flowlog-logstore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @description The project that stores the captured traffic data.
     *
     *   If a project is already created in the selected region, enter the name of the project.
     *   If no projects are created in the selected region, enter a name and the system automatically creates a project.
     *
     * The project name must be unique in a region. You cannot change the name after the project is created. The name must meet the following requirements:
     *
     *   The name must be globally unique.
     *   The name can contain only lowercase letters,
     *   digits, and hyphens (-).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length.
     *
     * This parameter is required.
     *
     * @example flowlog-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The sampling proportion. Valid values:
     *
     * - **1:4096**
     * - **1:2048**
     * - **1:1024**
     *
     * Default value: **1:4096**.
     *
     * @example 1:4096
     *
     * @var string
     */
    public $samplingRate;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'flowLogName' => 'FlowLogName',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'interval' => 'Interval',
        'logStoreName' => 'LogStoreName',
        'projectName' => 'ProjectName',
        'resourceGroupId' => 'ResourceGroupId',
        'samplingRate' => 'SamplingRate',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
