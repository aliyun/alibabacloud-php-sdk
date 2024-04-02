<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\GetAuditItemListResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $create;

    /**
     * @var string
     */
    public $customResult;

    /**
     * @var string
     */
    public $customRiskType;

    /**
     * @var string
     */
    public $customTs;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $rcpResult;

    /**
     * @var string
     */
    public $rcpRiskType;

    /**
     * @var string
     */
    public $rcpTs;

    /**
     * @var string
     */
    public $subUid;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'bizType'        => 'BizType',
        'content'        => 'Content',
        'create'         => 'Create',
        'customResult'   => 'CustomResult',
        'customRiskType' => 'CustomRiskType',
        'customTs'       => 'CustomTs',
        'dataId'         => 'DataId',
        'id'             => 'Id',
        'operator'       => 'Operator',
        'rcpResult'      => 'RcpResult',
        'rcpRiskType'    => 'RcpRiskType',
        'rcpTs'          => 'RcpTs',
        'subUid'         => 'SubUid',
        'taskId'         => 'TaskId',
        'thumbnail'      => 'Thumbnail',
        'type'           => 'Type',
        'uid'            => 'Uid',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->customResult) {
            $res['CustomResult'] = $this->customResult;
        }
        if (null !== $this->customRiskType) {
            $res['CustomRiskType'] = $this->customRiskType;
        }
        if (null !== $this->customTs) {
            $res['CustomTs'] = $this->customTs;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->rcpResult) {
            $res['RcpResult'] = $this->rcpResult;
        }
        if (null !== $this->rcpRiskType) {
            $res['RcpRiskType'] = $this->rcpRiskType;
        }
        if (null !== $this->rcpTs) {
            $res['RcpTs'] = $this->rcpTs;
        }
        if (null !== $this->subUid) {
            $res['SubUid'] = $this->subUid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['CustomResult'])) {
            $model->customResult = $map['CustomResult'];
        }
        if (isset($map['CustomRiskType'])) {
            $model->customRiskType = $map['CustomRiskType'];
        }
        if (isset($map['CustomTs'])) {
            $model->customTs = $map['CustomTs'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['RcpResult'])) {
            $model->rcpResult = $map['RcpResult'];
        }
        if (isset($map['RcpRiskType'])) {
            $model->rcpRiskType = $map['RcpRiskType'];
        }
        if (isset($map['RcpTs'])) {
            $model->rcpTs = $map['RcpTs'];
        }
        if (isset($map['SubUid'])) {
            $model->subUid = $map['SubUid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
