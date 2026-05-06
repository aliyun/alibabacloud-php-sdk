<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\GetSubTaskResultResponseBody\resultObject\file;

use AlibabaCloud\Dara\Model;

class col extends Model
{
    /**
     * @var string
     */
    public $a0;

    /**
     * @var string
     */
    public $a1;

    /**
     * @var string
     */
    public $a10;

    /**
     * @var string
     */
    public $a11;

    /**
     * @var string
     */
    public $a2;

    /**
     * @var string
     */
    public $a3;

    /**
     * @var string
     */
    public $a4;

    /**
     * @var string
     */
    public $a5;

    /**
     * @var string
     */
    public $a6;

    /**
     * @var string
     */
    public $a7;

    /**
     * @var string
     */
    public $a8;

    /**
     * @var string
     */
    public $a9;
    protected $_name = [
        'a0' => 'A0',
        'a1' => 'A1',
        'a10' => 'A10',
        'a11' => 'A11',
        'a2' => 'A2',
        'a3' => 'A3',
        'a4' => 'A4',
        'a5' => 'A5',
        'a6' => 'A6',
        'a7' => 'A7',
        'a8' => 'A8',
        'a9' => 'A9',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->a0) {
            $res['A0'] = $this->a0;
        }

        if (null !== $this->a1) {
            $res['A1'] = $this->a1;
        }

        if (null !== $this->a10) {
            $res['A10'] = $this->a10;
        }

        if (null !== $this->a11) {
            $res['A11'] = $this->a11;
        }

        if (null !== $this->a2) {
            $res['A2'] = $this->a2;
        }

        if (null !== $this->a3) {
            $res['A3'] = $this->a3;
        }

        if (null !== $this->a4) {
            $res['A4'] = $this->a4;
        }

        if (null !== $this->a5) {
            $res['A5'] = $this->a5;
        }

        if (null !== $this->a6) {
            $res['A6'] = $this->a6;
        }

        if (null !== $this->a7) {
            $res['A7'] = $this->a7;
        }

        if (null !== $this->a8) {
            $res['A8'] = $this->a8;
        }

        if (null !== $this->a9) {
            $res['A9'] = $this->a9;
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
        if (isset($map['A0'])) {
            $model->a0 = $map['A0'];
        }

        if (isset($map['A1'])) {
            $model->a1 = $map['A1'];
        }

        if (isset($map['A10'])) {
            $model->a10 = $map['A10'];
        }

        if (isset($map['A11'])) {
            $model->a11 = $map['A11'];
        }

        if (isset($map['A2'])) {
            $model->a2 = $map['A2'];
        }

        if (isset($map['A3'])) {
            $model->a3 = $map['A3'];
        }

        if (isset($map['A4'])) {
            $model->a4 = $map['A4'];
        }

        if (isset($map['A5'])) {
            $model->a5 = $map['A5'];
        }

        if (isset($map['A6'])) {
            $model->a6 = $map['A6'];
        }

        if (isset($map['A7'])) {
            $model->a7 = $map['A7'];
        }

        if (isset($map['A8'])) {
            $model->a8 = $map['A8'];
        }

        if (isset($map['A9'])) {
            $model->a9 = $map['A9'];
        }

        return $model;
    }
}
