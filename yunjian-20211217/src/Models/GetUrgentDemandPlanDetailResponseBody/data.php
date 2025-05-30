<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountDept;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $approvalUrl;

    /**
     * @var mixed[]
     */
    public $bpmSubstate;

    /**
     * @var string[]
     */
    public $commodityTypeCodeList;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $detailType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
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

    public function validate()
    {
        if (\is_array($this->bpmSubstate)) {
            Model::validateArray($this->bpmSubstate);
        }
        if (\is_array($this->commodityTypeCodeList)) {
            Model::validateArray($this->commodityTypeCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->bpmSubstate)) {
                $res['bpmSubstate'] = [];
                foreach ($this->bpmSubstate as $key1 => $value1) {
                    $res['bpmSubstate'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->commodityTypeCodeList) {
            if (\is_array($this->commodityTypeCodeList)) {
                $res['commodityTypeCodeList'] = [];
                $n1 = 0;
                foreach ($this->commodityTypeCodeList as $item1) {
                    $res['commodityTypeCodeList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['bpmSubstate'])) {
                $model->bpmSubstate = [];
                foreach ($map['bpmSubstate'] as $key1 => $value1) {
                    $model->bpmSubstate[$key1] = $value1;
                }
            }
        }

        if (isset($map['commodityTypeCodeList'])) {
            if (!empty($map['commodityTypeCodeList'])) {
                $model->commodityTypeCodeList = [];
                $n1 = 0;
                foreach ($map['commodityTypeCodeList'] as $item1) {
                    $model->commodityTypeCodeList[$n1++] = $item1;
                }
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
