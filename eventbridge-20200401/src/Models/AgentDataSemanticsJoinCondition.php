<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AgentDataSemanticsJoinCondition extends Model
{
    /**
     * @var string
     */
    public $leftColumn;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $rightColumn;

    /**
     * @var string
     */
    public $SQLExpression;
    protected $_name = [
        'leftColumn' => 'LeftColumn',
        'mode' => 'Mode',
        'rightColumn' => 'RightColumn',
        'SQLExpression' => 'SQLExpression',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->leftColumn) {
            $res['LeftColumn'] = $this->leftColumn;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->rightColumn) {
            $res['RightColumn'] = $this->rightColumn;
        }

        if (null !== $this->SQLExpression) {
            $res['SQLExpression'] = $this->SQLExpression;
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
        if (isset($map['LeftColumn'])) {
            $model->leftColumn = $map['LeftColumn'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RightColumn'])) {
            $model->rightColumn = $map['RightColumn'];
        }

        if (isset($map['SQLExpression'])) {
            $model->SQLExpression = $map['SQLExpression'];
        }

        return $model;
    }
}
