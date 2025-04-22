<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CNameStatus extends Model
{
    /**
     * @var string
     */
    public $bingdingState;

    /**
     * @var string
     */
    public $legalState;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'bingdingState' => 'bingding_state',
        'legalState' => 'legal_state',
        'remark' => 'remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bingdingState) {
            $res['bingding_state'] = $this->bingdingState;
        }

        if (null !== $this->legalState) {
            $res['legal_state'] = $this->legalState;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['bingding_state'])) {
            $model->bingdingState = $map['bingding_state'];
        }

        if (isset($map['legal_state'])) {
            $model->legalState = $map['legal_state'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
