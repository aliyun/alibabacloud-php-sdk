<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowSankeyExit extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $from;

    /**
     * @var int
     */
    public $fromIdx;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'count' => 'Count',
        'from' => 'From',
        'fromIdx' => 'FromIdx',
        'label' => 'Label',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->fromIdx) {
            $res['FromIdx'] = $this->fromIdx;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['FromIdx'])) {
            $model->fromIdx = $map['FromIdx'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
