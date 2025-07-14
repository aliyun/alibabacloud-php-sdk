<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponseBody;

use AlibabaCloud\Tea\Model;

class diagnosticResults extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i118578141694745246055
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster Name
     *
     * @example pjlab-lingjun
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Creation time of the diagnostic task.
     *
     * @example 2024-01-15T02:01:12Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Diagnostic content. For example, in network diagnostics, there are static configuration checks, dynamic operation checks, and other diagnostic contents.
     *
     * @example diagcontent
     *
     * @var string
     */
    public $diagContent;

    /**
     * @description Diagnosis ID
     *
     * @example 123
     *
     * @var string
     */
    public $diagId;

    /**
     * @description Diagnostic result, either success or failure.
     *
     * @example Success
     *
     * @var string
     */
    public $diagResult;

    /**
     * @description Completion time of the diagnostic task.
     *
     * @example 2024-10-16T02:04Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The resource ID.
     *
     * @example e01-cn-bl03ofg6206
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Server name.
     *
     * @example proxy-rps.mos.csvw.com
     *
     * @var string
     */
    public $serverName;

    /**
     * @description Status of the diagnostic task. Possible values:
     * - InProgress: Diagnosing.
     * - Finished: Diagnosis completed.
     * - Failed: Diagnosis failed.
     *
     * @example succeed
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'creationTime' => 'CreationTime',
        'diagContent' => 'DiagContent',
        'diagId' => 'DiagId',
        'diagResult' => 'DiagResult',
        'finishedTime' => 'FinishedTime',
        'resourceId' => 'ResourceId',
        'serverName' => 'ServerName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->diagContent) {
            $res['DiagContent'] = $this->diagContent;
        }
        if (null !== $this->diagId) {
            $res['DiagId'] = $this->diagId;
        }
        if (null !== $this->diagResult) {
            $res['DiagResult'] = $this->diagResult;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnosticResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DiagContent'])) {
            $model->diagContent = $map['DiagContent'];
        }
        if (isset($map['DiagId'])) {
            $model->diagId = $map['DiagId'];
        }
        if (isset($map['DiagResult'])) {
            $model->diagResult = $map['DiagResult'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
