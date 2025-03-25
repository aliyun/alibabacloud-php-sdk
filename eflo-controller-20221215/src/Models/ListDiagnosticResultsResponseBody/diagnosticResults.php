<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListDiagnosticResultsResponseBody;

use AlibabaCloud\Dara\Model;

class diagnosticResults extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $diagContent;

    /**
     * @var string
     */
    public $diagId;

    /**
     * @var string
     */
    public $diagResult;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $serverName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
