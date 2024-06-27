<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeHasRuleNameByEventCodeRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $excludeRuleId;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'lang'          => 'Lang',
        'eventCode'     => 'eventCode',
        'excludeRuleId' => 'excludeRuleId',
        'regId'         => 'regId',
        'ruleName'      => 'ruleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->excludeRuleId) {
            $res['excludeRuleId'] = $this->excludeRuleId;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHasRuleNameByEventCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['excludeRuleId'])) {
            $model->excludeRuleId = $map['excludeRuleId'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        return $model;
    }
}
