<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\BatchSubmitPreBillResponseBody\module;

use AlibabaCloud\Dara\Model;

class forbidUpdateDetail extends Model
{
    /**
     * @var int
     */
    public $canNotUpdateCount;

    /**
     * @var int
     */
    public $canUpdateCount;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'canNotUpdateCount' => 'can_not_update_count',
        'canUpdateCount' => 'can_update_count',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canNotUpdateCount) {
            $res['can_not_update_count'] = $this->canNotUpdateCount;
        }

        if (null !== $this->canUpdateCount) {
            $res['can_update_count'] = $this->canUpdateCount;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['can_not_update_count'])) {
            $model->canNotUpdateCount = $map['can_not_update_count'];
        }

        if (isset($map['can_update_count'])) {
            $model->canUpdateCount = $map['can_update_count'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
