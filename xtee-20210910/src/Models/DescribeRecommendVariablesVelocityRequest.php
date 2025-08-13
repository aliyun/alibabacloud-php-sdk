<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRecommendVariablesVelocityRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $variableIdsStr;
    protected $_name = [
        'lang' => 'Lang',
        'regId' => 'regId',
        'taskId' => 'taskId',
        'variableIdsStr' => 'variableIdsStr',
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

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->variableIdsStr) {
            $res['variableIdsStr'] = $this->variableIdsStr;
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

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['variableIdsStr'])) {
            $model->variableIdsStr = $map['variableIdsStr'];
        }

        return $model;
    }
}
