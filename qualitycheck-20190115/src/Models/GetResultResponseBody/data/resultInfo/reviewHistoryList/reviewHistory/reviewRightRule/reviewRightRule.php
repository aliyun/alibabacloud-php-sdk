<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewHistoryList\reviewHistory\reviewRightRule;

use AlibabaCloud\Dara\Model;

class reviewRightRule extends Model
{
    /**
     * @var int
     */
    public $rid;
    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'rid'      => 'rid',
        'ruleName' => 'ruleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rid) {
            $res['rid'] = $this->rid;
        }

        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
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
        if (isset($map['rid'])) {
            $model->rid = $map['rid'];
        }

        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        return $model;
    }
}
