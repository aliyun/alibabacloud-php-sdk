<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginParam;

class dataArchiveOrderDetail extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $committer;
    /**
     * @var int
     */
    public $committerId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var pluginExtraData
     */
    public $pluginExtraData;
    /**
     * @var pluginParam
     */
    public $pluginParam;
    /**
     * @var string
     */
    public $pluginType;
    /**
     * @var int[]
     */
    public $relatedUserList;
    /**
     * @var string[]
     */
    public $relatedUserNickList;
    /**
     * @var string
     */
    public $statusCode;
    /**
     * @var string
     */
    public $statusDesc;
    /**
     * @var int
     */
    public $workflowInstanceId;
    /**
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'comment'             => 'Comment',
        'committer'           => 'Committer',
        'committerId'         => 'CommitterId',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'pluginExtraData'     => 'PluginExtraData',
        'pluginParam'         => 'PluginParam',
        'pluginType'          => 'PluginType',
        'relatedUserList'     => 'RelatedUserList',
        'relatedUserNickList' => 'RelatedUserNickList',
        'statusCode'          => 'StatusCode',
        'statusDesc'          => 'StatusDesc',
        'workflowInstanceId'  => 'WorkflowInstanceId',
        'workflowStatusDesc'  => 'WorkflowStatusDesc',
    ];

    public function validate()
    {
        if (null !== $this->pluginExtraData) {
            $this->pluginExtraData->validate();
        }
        if (null !== $this->pluginParam) {
            $this->pluginParam->validate();
        }
        if (\is_array($this->relatedUserList)) {
            Model::validateArray($this->relatedUserList);
        }
        if (\is_array($this->relatedUserNickList)) {
            Model::validateArray($this->relatedUserNickList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }

        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->pluginExtraData) {
            $res['PluginExtraData'] = null !== $this->pluginExtraData ? $this->pluginExtraData->toArray($noStream) : $this->pluginExtraData;
        }

        if (null !== $this->pluginParam) {
            $res['PluginParam'] = null !== $this->pluginParam ? $this->pluginParam->toArray($noStream) : $this->pluginParam;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        if (null !== $this->relatedUserList) {
            if (\is_array($this->relatedUserList)) {
                $res['RelatedUserList'] = [];
                $n1                     = 0;
                foreach ($this->relatedUserList as $item1) {
                    $res['RelatedUserList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->relatedUserNickList) {
            if (\is_array($this->relatedUserNickList)) {
                $res['RelatedUserNickList'] = [];
                $n1                         = 0;
                foreach ($this->relatedUserNickList as $item1) {
                    $res['RelatedUserNickList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }

        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        if (null !== $this->workflowStatusDesc) {
            $res['WorkflowStatusDesc'] = $this->workflowStatusDesc;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }

        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PluginExtraData'])) {
            $model->pluginExtraData = pluginExtraData::fromMap($map['PluginExtraData']);
        }

        if (isset($map['PluginParam'])) {
            $model->pluginParam = pluginParam::fromMap($map['PluginParam']);
        }

        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = [];
                $n1                     = 0;
                foreach ($map['RelatedUserList'] as $item1) {
                    $model->relatedUserList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RelatedUserNickList'])) {
            if (!empty($map['RelatedUserNickList'])) {
                $model->relatedUserNickList = [];
                $n1                         = 0;
                foreach ($map['RelatedUserNickList'] as $item1) {
                    $model->relatedUserNickList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }

        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        if (isset($map['WorkflowStatusDesc'])) {
            $model->workflowStatusDesc = $map['WorkflowStatusDesc'];
        }

        return $model;
    }
}
