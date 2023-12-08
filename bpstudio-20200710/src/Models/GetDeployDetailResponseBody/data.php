<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody;

use AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentProcess;

    /**
     * @var mixed[][]
     */
    public $deletingNodeList;

    /**
     * @var float
     */
    public $deployPercent;

    /**
     * @var mixed[][]
     */
    public $deployedNodeList;

    /**
     * @var mixed[][]
     */
    public $deployingNodeList;

    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $executionTime;

    /**
     * @var int
     */
    public $failStatus;

    /**
     * @var string[]
     */
    public $orderIdList;

    /**
     * @var string
     */
    public $pdfUrl;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceList[]
     */
    public $resourceList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $terraformScriptUrl;
    protected $_name = [
        'appId'              => 'AppId',
        'createTime'         => 'CreateTime',
        'currentProcess'     => 'CurrentProcess',
        'deletingNodeList'   => 'DeletingNodeList',
        'deployPercent'      => 'DeployPercent',
        'deployedNodeList'   => 'DeployedNodeList',
        'deployingNodeList'  => 'DeployingNodeList',
        'error'              => 'Error',
        'executionTime'      => 'ExecutionTime',
        'failStatus'         => 'FailStatus',
        'orderIdList'        => 'OrderIdList',
        'pdfUrl'             => 'PdfUrl',
        'resourceGroupId'    => 'ResourceGroupId',
        'resourceList'       => 'ResourceList',
        'status'             => 'Status',
        'terraformScriptUrl' => 'TerraformScriptUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentProcess) {
            $res['CurrentProcess'] = $this->currentProcess;
        }
        if (null !== $this->deletingNodeList) {
            $res['DeletingNodeList'] = $this->deletingNodeList;
        }
        if (null !== $this->deployPercent) {
            $res['DeployPercent'] = $this->deployPercent;
        }
        if (null !== $this->deployedNodeList) {
            $res['DeployedNodeList'] = $this->deployedNodeList;
        }
        if (null !== $this->deployingNodeList) {
            $res['DeployingNodeList'] = $this->deployingNodeList;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->executionTime) {
            $res['ExecutionTime'] = $this->executionTime;
        }
        if (null !== $this->failStatus) {
            $res['FailStatus'] = $this->failStatus;
        }
        if (null !== $this->orderIdList) {
            $res['OrderIdList'] = $this->orderIdList;
        }
        if (null !== $this->pdfUrl) {
            $res['PdfUrl'] = $this->pdfUrl;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceList) {
            $res['ResourceList'] = [];
            if (null !== $this->resourceList && \is_array($this->resourceList)) {
                $n = 0;
                foreach ($this->resourceList as $item) {
                    $res['ResourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->terraformScriptUrl) {
            $res['TerraformScriptUrl'] = $this->terraformScriptUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentProcess'])) {
            $model->currentProcess = $map['CurrentProcess'];
        }
        if (isset($map['DeletingNodeList'])) {
            if (!empty($map['DeletingNodeList'])) {
                $model->deletingNodeList = $map['DeletingNodeList'];
            }
        }
        if (isset($map['DeployPercent'])) {
            $model->deployPercent = $map['DeployPercent'];
        }
        if (isset($map['DeployedNodeList'])) {
            if (!empty($map['DeployedNodeList'])) {
                $model->deployedNodeList = $map['DeployedNodeList'];
            }
        }
        if (isset($map['DeployingNodeList'])) {
            if (!empty($map['DeployingNodeList'])) {
                $model->deployingNodeList = $map['DeployingNodeList'];
            }
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['ExecutionTime'])) {
            $model->executionTime = $map['ExecutionTime'];
        }
        if (isset($map['FailStatus'])) {
            $model->failStatus = $map['FailStatus'];
        }
        if (isset($map['OrderIdList'])) {
            if (!empty($map['OrderIdList'])) {
                $model->orderIdList = $map['OrderIdList'];
            }
        }
        if (isset($map['PdfUrl'])) {
            $model->pdfUrl = $map['PdfUrl'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceList'])) {
            if (!empty($map['ResourceList'])) {
                $model->resourceList = [];
                $n                   = 0;
                foreach ($map['ResourceList'] as $item) {
                    $model->resourceList[$n++] = null !== $item ? resourceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TerraformScriptUrl'])) {
            $model->terraformScriptUrl = $map['TerraformScriptUrl'];
        }

        return $model;
    }
}
