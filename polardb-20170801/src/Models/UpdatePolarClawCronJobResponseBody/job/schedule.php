<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdatePolarClawCronJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class schedule extends Model
{
    /**
     * @var int
     */
    public $anchorMs;

    /**
     * @var string
     */
    public $at;

    /**
     * @var int
     */
    public $everyMs;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $tz;
    protected $_name = [
        'anchorMs' => 'AnchorMs',
        'at' => 'At',
        'everyMs' => 'EveryMs',
        'expr' => 'Expr',
        'kind' => 'Kind',
        'tz' => 'Tz',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorMs) {
            $res['AnchorMs'] = $this->anchorMs;
        }

        if (null !== $this->at) {
            $res['At'] = $this->at;
        }

        if (null !== $this->everyMs) {
            $res['EveryMs'] = $this->everyMs;
        }

        if (null !== $this->expr) {
            $res['Expr'] = $this->expr;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->tz) {
            $res['Tz'] = $this->tz;
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
        if (isset($map['AnchorMs'])) {
            $model->anchorMs = $map['AnchorMs'];
        }

        if (isset($map['At'])) {
            $model->at = $map['At'];
        }

        if (isset($map['EveryMs'])) {
            $model->everyMs = $map['EveryMs'];
        }

        if (isset($map['Expr'])) {
            $model->expr = $map['Expr'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['Tz'])) {
            $model->tz = $map['Tz'];
        }

        return $model;
    }
}
