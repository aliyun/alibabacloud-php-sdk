<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models;

use AlibabaCloud\Tea\Model;

class HuichengetRequest extends Model
{
    /**
     * @var string
     */
    public $add;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $apple;

    /**
     * @var string
     */
    public $blue;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $enight;

    /**
     * @var string
     */
    public $five;

    /**
     * @var string
     */
    public $four;

    /**
     * @var string
     */
    public $hello;

    /**
     * @var string
     */
    public $jack;

    /**
     * @var string
     */
    public $list;

    /**
     * @var string
     */
    public $mack;

    /**
     * @var string
     */
    public $newName;

    /**
     * @var string
     */
    public $nigh;

    /**
     * @var string
     */
    public $now;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $params1;

    /**
     * @var string
     */
    public $params2;

    /**
     * @var string
     */
    public $params3;

    /**
     * @var string
     */
    public $params4;

    /**
     * @var string
     */
    public $red;

    /**
     * @var string
     */
    public $six;

    /**
     * @var string
     */
    public $tea;

    /**
     * @var string
     */
    public $ten;

    /**
     * @var string
     */
    public $three;

    /**
     * @var string
     */
    public $two;

    /**
     * @var string
     */
    public $white;
    protected $_name = [
        'add'     => 'Add',
        'address' => 'Address',
        'apple'   => 'Apple',
        'blue'    => 'Blue',
        'code'    => 'Code',
        'enight'  => 'Enight',
        'five'    => 'Five',
        'four'    => 'Four',
        'hello'   => 'Hello',
        'jack'    => 'Jack',
        'list'    => 'List',
        'mack'    => 'Mack',
        'newName' => 'NewName',
        'nigh'    => 'Nigh',
        'now'     => 'Now',
        'params'  => 'Params',
        'params1' => 'Params1',
        'params2' => 'Params2',
        'params3' => 'Params3',
        'params4' => 'Params4',
        'red'     => 'Red',
        'six'     => 'Six',
        'tea'     => 'Tea',
        'ten'     => 'Ten',
        'three'   => 'Three',
        'two'     => 'Two',
        'white'   => 'White',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['Add'] = $this->add;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->apple) {
            $res['Apple'] = $this->apple;
        }
        if (null !== $this->blue) {
            $res['Blue'] = $this->blue;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->enight) {
            $res['Enight'] = $this->enight;
        }
        if (null !== $this->five) {
            $res['Five'] = $this->five;
        }
        if (null !== $this->four) {
            $res['Four'] = $this->four;
        }
        if (null !== $this->hello) {
            $res['Hello'] = $this->hello;
        }
        if (null !== $this->jack) {
            $res['Jack'] = $this->jack;
        }
        if (null !== $this->list) {
            $res['List'] = $this->list;
        }
        if (null !== $this->mack) {
            $res['Mack'] = $this->mack;
        }
        if (null !== $this->newName) {
            $res['NewName'] = $this->newName;
        }
        if (null !== $this->nigh) {
            $res['Nigh'] = $this->nigh;
        }
        if (null !== $this->now) {
            $res['Now'] = $this->now;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->params1) {
            $res['Params1'] = $this->params1;
        }
        if (null !== $this->params2) {
            $res['Params2'] = $this->params2;
        }
        if (null !== $this->params3) {
            $res['Params3'] = $this->params3;
        }
        if (null !== $this->params4) {
            $res['Params4'] = $this->params4;
        }
        if (null !== $this->red) {
            $res['Red'] = $this->red;
        }
        if (null !== $this->six) {
            $res['Six'] = $this->six;
        }
        if (null !== $this->tea) {
            $res['Tea'] = $this->tea;
        }
        if (null !== $this->ten) {
            $res['Ten'] = $this->ten;
        }
        if (null !== $this->three) {
            $res['Three'] = $this->three;
        }
        if (null !== $this->two) {
            $res['Two'] = $this->two;
        }
        if (null !== $this->white) {
            $res['White'] = $this->white;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HuichengetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Add'])) {
            $model->add = $map['Add'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Apple'])) {
            $model->apple = $map['Apple'];
        }
        if (isset($map['Blue'])) {
            $model->blue = $map['Blue'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Enight'])) {
            $model->enight = $map['Enight'];
        }
        if (isset($map['Five'])) {
            $model->five = $map['Five'];
        }
        if (isset($map['Four'])) {
            $model->four = $map['Four'];
        }
        if (isset($map['Hello'])) {
            $model->hello = $map['Hello'];
        }
        if (isset($map['Jack'])) {
            $model->jack = $map['Jack'];
        }
        if (isset($map['List'])) {
            $model->list = $map['List'];
        }
        if (isset($map['Mack'])) {
            $model->mack = $map['Mack'];
        }
        if (isset($map['NewName'])) {
            $model->newName = $map['NewName'];
        }
        if (isset($map['Nigh'])) {
            $model->nigh = $map['Nigh'];
        }
        if (isset($map['Now'])) {
            $model->now = $map['Now'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Params1'])) {
            $model->params1 = $map['Params1'];
        }
        if (isset($map['Params2'])) {
            $model->params2 = $map['Params2'];
        }
        if (isset($map['Params3'])) {
            $model->params3 = $map['Params3'];
        }
        if (isset($map['Params4'])) {
            $model->params4 = $map['Params4'];
        }
        if (isset($map['Red'])) {
            $model->red = $map['Red'];
        }
        if (isset($map['Six'])) {
            $model->six = $map['Six'];
        }
        if (isset($map['Tea'])) {
            $model->tea = $map['Tea'];
        }
        if (isset($map['Ten'])) {
            $model->ten = $map['Ten'];
        }
        if (isset($map['Three'])) {
            $model->three = $map['Three'];
        }
        if (isset($map['Two'])) {
            $model->two = $map['Two'];
        }
        if (isset($map['White'])) {
            $model->white = $map['White'];
        }

        return $model;
    }
}
