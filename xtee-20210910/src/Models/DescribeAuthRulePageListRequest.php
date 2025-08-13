<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeAuthRulePageListRequest extends Model
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
    public $regId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'lang' => 'Lang',
        'eventCode' => 'eventCode',
        'regId' => 'regId',
        'ruleName' => 'ruleName',
        'status' => 'status',
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

        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
