<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class handleStatusCounts extends Model
{
    /**
     * @var int
     */
    public $handled;

    /**
     * @var int
     */
    public $handling;

    /**
     * @var int
     */
    public $unhandled;
    protected $_name = [
        'handled' => 'Handled',
        'handling' => 'Handling',
        'unhandled' => 'Unhandled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handled) {
            $res['Handled'] = $this->handled;
        }

        if (null !== $this->handling) {
            $res['Handling'] = $this->handling;
        }

        if (null !== $this->unhandled) {
            $res['Unhandled'] = $this->unhandled;
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
        if (isset($map['Handled'])) {
            $model->handled = $map['Handled'];
        }

        if (isset($map['Handling'])) {
            $model->handling = $map['Handling'];
        }

        if (isset($map['Unhandled'])) {
            $model->unhandled = $map['Unhandled'];
        }

        return $model;
    }
}
