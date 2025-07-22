<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowLogAttributeRequest extends Model
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
     * The description can be empty or 0 to 256 characters in length.
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
     * @description The ECR ID.
     *
     * This parameter is required.
     *
     * @example ecr-fu8rszhgv7623c****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the flow log.
     *
     * This parameter is required.
     *
     * @example flowlog-m5evbtbpt****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The new name of the flow log. The name must be 0 to 128 characters in length.
     *
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The time window for collecting log data. Unit: seconds. Valid values:
     *
     * - **60**
     * - **600**
     *
     * Default value: **600**.
     *
     * @example 600
     *
     * @var int
     */
    public $interval;

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
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'ecrId' => 'EcrId',
        'flowLogId' => 'FlowLogId',
        'flowLogName' => 'FlowLogName',
        'interval' => 'Interval',
        'samplingRate' => 'SamplingRate',
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
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->samplingRate) {
            $res['SamplingRate'] = $this->samplingRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowLogAttributeRequest
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
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SamplingRate'])) {
            $model->samplingRate = $map['SamplingRate'];
        }

        return $model;
    }
}
