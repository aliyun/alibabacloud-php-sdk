<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRuleVersionListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $consoleRuleId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'lang' => 'Lang',
        'consoleRuleId' => 'consoleRuleId',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'regId' => 'regId',
        'ruleId' => 'ruleId',
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

        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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

        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
