<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseOrgCreateNodeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $extShrink;

    /**
     * @var bool
     */
    public $isOpenApi;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var string
     */
    public $parentNodeId;

    /**
     * @var string
     */
    public $parentNodeType;

    /**
     * @var bool
     */
    public $showCompleteInfo;

    /**
     * @var int
     */
    public $treeId;
    protected $_name = [
        'appName' => 'AppName',
        'bizName' => 'BizName',
        'extShrink' => 'Ext',
        'isOpenApi' => 'IsOpenApi',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'parentNodeId' => 'ParentNodeId',
        'parentNodeType' => 'ParentNodeType',
        'showCompleteInfo' => 'ShowCompleteInfo',
        'treeId' => 'TreeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->extShrink) {
            $res['Ext'] = $this->extShrink;
        }

        if (null !== $this->isOpenApi) {
            $res['IsOpenApi'] = $this->isOpenApi;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->parentNodeId) {
            $res['ParentNodeId'] = $this->parentNodeId;
        }

        if (null !== $this->parentNodeType) {
            $res['ParentNodeType'] = $this->parentNodeType;
        }

        if (null !== $this->showCompleteInfo) {
            $res['ShowCompleteInfo'] = $this->showCompleteInfo;
        }

        if (null !== $this->treeId) {
            $res['TreeId'] = $this->treeId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['Ext'])) {
            $model->extShrink = $map['Ext'];
        }

        if (isset($map['IsOpenApi'])) {
            $model->isOpenApi = $map['IsOpenApi'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['ParentNodeId'])) {
            $model->parentNodeId = $map['ParentNodeId'];
        }

        if (isset($map['ParentNodeType'])) {
            $model->parentNodeType = $map['ParentNodeType'];
        }

        if (isset($map['ShowCompleteInfo'])) {
            $model->showCompleteInfo = $map['ShowCompleteInfo'];
        }

        if (isset($map['TreeId'])) {
            $model->treeId = $map['TreeId'];
        }

        return $model;
    }
}
