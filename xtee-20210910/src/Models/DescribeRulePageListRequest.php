<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRulePageListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleAuthType;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var string
     */
    public $sort;
    protected $_name = [
        'lang' => 'Lang',
        'createType' => 'createType',
        'currentPage' => 'currentPage',
        'eventCode' => 'eventCode',
        'pageSize' => 'pageSize',
        'regId' => 'regId',
        'ruleAuthType' => 'ruleAuthType',
        'ruleName' => 'ruleName',
        'ruleStatus' => 'ruleStatus',
        'sort' => 'sort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleAuthType) {
            $res['ruleAuthType'] = $this->ruleAuthType;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleAuthType'])) {
            $model->ruleAuthType = $map['ruleAuthType'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        return $model;
    }
}
