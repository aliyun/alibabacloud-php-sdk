<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountDept;

    /**
     * @example 1065737167271819
     *
     * @var string
     */
    public $accountId;

    /**
     * @example larus_prd
     *
     * @var string
     */
    public $accountName;

    /**
     * @example https://xxxxx
     *
     * @var string
     */
    public $approvalUrl;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $bpmSubstate;

    /**
     * @var string[]
     */
    public $commodityTypeCodeList;

    /**
     * @example 262940
     *
     * @var string
     */
    public $creator;

    /**
     * @example xxx
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @example URGENT
     *
     * @var string
     */
    public $detailType;

    /**
     * @example 2021-12-17 16:53:21
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-17 16:53:21
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 262940
     *
     * @var string
     */
    public $modifier;

    /**
     * @example xx
     *
     * @var string
     */
    public $modifierName;

    /**
     * @example 11223
     *
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @example 220
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $yunzhiProductName;
    protected $_name = [
        'accountDept' => 'accountDept',
        'accountId' => 'accountId',
        'accountName' => 'accountName',
        'approvalUrl' => 'approvalUrl',
        'bpmSubstate' => 'bpmSubstate',
        'commodityTypeCodeList' => 'commodityTypeCodeList',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'description' => 'description',
        'detailType' => 'detailType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'planId' => 'planId',
        'planName' => 'planName',
        'status' => 'status',
        'yunzhiProductName' => 'yunzhiProductName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDept) {
            $res['accountDept'] = $this->accountDept;
        }
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }
        if (null !== $this->approvalUrl) {
            $res['approvalUrl'] = $this->approvalUrl;
        }
        if (null !== $this->bpmSubstate) {
            $res['bpmSubstate'] = $this->bpmSubstate;
        }
        if (null !== $this->commodityTypeCodeList) {
            $res['commodityTypeCodeList'] = $this->commodityTypeCodeList;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->detailType) {
            $res['detailType'] = $this->detailType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->yunzhiProductName) {
            $res['yunzhiProductName'] = $this->yunzhiProductName;
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
        if (isset($map['accountDept'])) {
            $model->accountDept = $map['accountDept'];
        }
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }
        if (isset($map['approvalUrl'])) {
            $model->approvalUrl = $map['approvalUrl'];
        }
        if (isset($map['bpmSubstate'])) {
            $model->bpmSubstate = $map['bpmSubstate'];
        }
        if (isset($map['commodityTypeCodeList'])) {
            if (!empty($map['commodityTypeCodeList'])) {
                $model->commodityTypeCodeList = $map['commodityTypeCodeList'];
            }
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['detailType'])) {
            $model->detailType = $map['detailType'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['yunzhiProductName'])) {
            $model->yunzhiProductName = $map['yunzhiProductName'];
        }

        return $model;
    }
}
