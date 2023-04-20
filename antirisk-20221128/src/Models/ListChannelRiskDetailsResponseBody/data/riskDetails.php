<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class riskDetails extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $an;

    /**
     * @example v1.1.0
     *
     * @var string
     */
    public $av;

    /**
     * @example 1
     *
     * @var string
     */
    public $bn;

    /**
     * @example 360market
     *
     * @var string
     */
    public $c;

    /**
     * @example 20230410
     *
     * @var string
     */
    public $date;

    /**
     * @example 1
     *
     * @var string
     */
    public $fd;

    /**
     * @example 0000-0000-0000000
     *
     * @var string
     */
    public $idfa;

    /**
     * @example 0
     *
     * @var string
     */
    public $jb;

    /**
     * @example 343rUFD834343KJDDFS
     *
     * @var string
     */
    public $oaid;

    /**
     * @example 1
     *
     * @var string
     */
    public $py;

    /**
     * @example RISK
     *
     * @var string
     */
    public $rl;

    /**
     * @example 60
     *
     * @var string
     */
    public $rs;

    /**
     * @example 815E045B-4A9E-AA76-BEFF-048C9B9F651A
     *
     * @var string
     */
    public $zid;
    protected $_name = [
        'an'   => 'an',
        'av'   => 'av',
        'bn'   => 'bn',
        'c'    => 'c',
        'date' => 'date',
        'fd'   => 'fd',
        'idfa' => 'idfa',
        'jb'   => 'jb',
        'oaid' => 'oaid',
        'py'   => 'py',
        'rl'   => 'rl',
        'rs'   => 'rs',
        'zid'  => 'zid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->an) {
            $res['an'] = $this->an;
        }
        if (null !== $this->av) {
            $res['av'] = $this->av;
        }
        if (null !== $this->bn) {
            $res['bn'] = $this->bn;
        }
        if (null !== $this->c) {
            $res['c'] = $this->c;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->fd) {
            $res['fd'] = $this->fd;
        }
        if (null !== $this->idfa) {
            $res['idfa'] = $this->idfa;
        }
        if (null !== $this->jb) {
            $res['jb'] = $this->jb;
        }
        if (null !== $this->oaid) {
            $res['oaid'] = $this->oaid;
        }
        if (null !== $this->py) {
            $res['py'] = $this->py;
        }
        if (null !== $this->rl) {
            $res['rl'] = $this->rl;
        }
        if (null !== $this->rs) {
            $res['rs'] = $this->rs;
        }
        if (null !== $this->zid) {
            $res['zid'] = $this->zid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['an'])) {
            $model->an = $map['an'];
        }
        if (isset($map['av'])) {
            $model->av = $map['av'];
        }
        if (isset($map['bn'])) {
            $model->bn = $map['bn'];
        }
        if (isset($map['c'])) {
            $model->c = $map['c'];
        }
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['fd'])) {
            $model->fd = $map['fd'];
        }
        if (isset($map['idfa'])) {
            $model->idfa = $map['idfa'];
        }
        if (isset($map['jb'])) {
            $model->jb = $map['jb'];
        }
        if (isset($map['oaid'])) {
            $model->oaid = $map['oaid'];
        }
        if (isset($map['py'])) {
            $model->py = $map['py'];
        }
        if (isset($map['rl'])) {
            $model->rl = $map['rl'];
        }
        if (isset($map['rs'])) {
            $model->rs = $map['rs'];
        }
        if (isset($map['zid'])) {
            $model->zid = $map['zid'];
        }

        return $model;
    }
}
