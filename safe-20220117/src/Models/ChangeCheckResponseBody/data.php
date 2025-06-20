<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckResponseBody\data\ruleDetailUrlList;

class data extends Model
{
    /**
     * @var string
     */
    public $approveResultUrl;

    /**
     * @var string
     */
    public $bgCheckStatus;

    /**
     * @var string
     */
    public $bgVid;

    /**
     * @var string
     */
    public $changeStatus;

    /**
     * @var string
     */
    public $checkResultUrl;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string[]
     */
    public $checkholdReason;

    /**
     * @var ruleDetailUrlList[]
     */
    public $ruleDetailUrlList;

    /**
     * @var string
     */
    public $sourceOrderId;
    protected $_name = [
        'approveResultUrl' => 'ApproveResultUrl',
        'bgCheckStatus' => 'BgCheckStatus',
        'bgVid' => 'BgVid',
        'changeStatus' => 'ChangeStatus',
        'checkResultUrl' => 'CheckResultUrl',
        'checkStatus' => 'CheckStatus',
        'checkholdReason' => 'CheckholdReason',
        'ruleDetailUrlList' => 'RuleDetailUrlList',
        'sourceOrderId' => 'SourceOrderId',
    ];

    public function validate()
    {
        if (\is_array($this->checkholdReason)) {
            Model::validateArray($this->checkholdReason);
        }
        if (\is_array($this->ruleDetailUrlList)) {
            Model::validateArray($this->ruleDetailUrlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveResultUrl) {
            $res['ApproveResultUrl'] = $this->approveResultUrl;
        }

        if (null !== $this->bgCheckStatus) {
            $res['BgCheckStatus'] = $this->bgCheckStatus;
        }

        if (null !== $this->bgVid) {
            $res['BgVid'] = $this->bgVid;
        }

        if (null !== $this->changeStatus) {
            $res['ChangeStatus'] = $this->changeStatus;
        }

        if (null !== $this->checkResultUrl) {
            $res['CheckResultUrl'] = $this->checkResultUrl;
        }

        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->checkholdReason) {
            if (\is_array($this->checkholdReason)) {
                $res['CheckholdReason'] = [];
                $n1 = 0;
                foreach ($this->checkholdReason as $item1) {
                    $res['CheckholdReason'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleDetailUrlList) {
            if (\is_array($this->ruleDetailUrlList)) {
                $res['RuleDetailUrlList'] = [];
                $n1 = 0;
                foreach ($this->ruleDetailUrlList as $item1) {
                    $res['RuleDetailUrlList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
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
        if (isset($map['ApproveResultUrl'])) {
            $model->approveResultUrl = $map['ApproveResultUrl'];
        }

        if (isset($map['BgCheckStatus'])) {
            $model->bgCheckStatus = $map['BgCheckStatus'];
        }

        if (isset($map['BgVid'])) {
            $model->bgVid = $map['BgVid'];
        }

        if (isset($map['ChangeStatus'])) {
            $model->changeStatus = $map['ChangeStatus'];
        }

        if (isset($map['CheckResultUrl'])) {
            $model->checkResultUrl = $map['CheckResultUrl'];
        }

        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CheckholdReason'])) {
            if (!empty($map['CheckholdReason'])) {
                $model->checkholdReason = [];
                $n1 = 0;
                foreach ($map['CheckholdReason'] as $item1) {
                    $model->checkholdReason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleDetailUrlList'])) {
            if (!empty($map['RuleDetailUrlList'])) {
                $model->ruleDetailUrlList = [];
                $n1 = 0;
                foreach ($map['RuleDetailUrlList'] as $item1) {
                    $model->ruleDetailUrlList[$n1] = ruleDetailUrlList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        return $model;
    }
}
