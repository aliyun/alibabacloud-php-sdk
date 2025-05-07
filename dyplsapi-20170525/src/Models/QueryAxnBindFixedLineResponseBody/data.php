<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnBindFixedLineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnBindFixedLineResponseBody\data\extra;

class data extends Model
{
    /**
     * @var string
     */
    public $anucode;

    /**
     * @var string
     */
    public $anucodecalled;

    /**
     * @var string
     */
    public $areacode;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var extra
     */
    public $extra;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $subid;

    /**
     * @var string
     */
    public $subts;

    /**
     * @var string
     */
    public $TAnucodeConnect;

    /**
     * @var string
     */
    public $telA;

    /**
     * @var string
     */
    public $telB;

    /**
     * @var string
     */
    public $telX;
    protected $_name = [
        'anucode' => 'Anucode',
        'anucodecalled' => 'Anucodecalled',
        'areacode' => 'Areacode',
        'expiration' => 'Expiration',
        'extra' => 'Extra',
        'remark' => 'Remark',
        'subid' => 'Subid',
        'subts' => 'Subts',
        'TAnucodeConnect' => 'TAnucodeConnect',
        'telA' => 'TelA',
        'telB' => 'TelB',
        'telX' => 'TelX',
    ];

    public function validate()
    {
        if (null !== $this->extra) {
            $this->extra->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anucode) {
            $res['Anucode'] = $this->anucode;
        }

        if (null !== $this->anucodecalled) {
            $res['Anucodecalled'] = $this->anucodecalled;
        }

        if (null !== $this->areacode) {
            $res['Areacode'] = $this->areacode;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->extra) {
            $res['Extra'] = null !== $this->extra ? $this->extra->toArray($noStream) : $this->extra;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->subid) {
            $res['Subid'] = $this->subid;
        }

        if (null !== $this->subts) {
            $res['Subts'] = $this->subts;
        }

        if (null !== $this->TAnucodeConnect) {
            $res['TAnucodeConnect'] = $this->TAnucodeConnect;
        }

        if (null !== $this->telA) {
            $res['TelA'] = $this->telA;
        }

        if (null !== $this->telB) {
            $res['TelB'] = $this->telB;
        }

        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
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
        if (isset($map['Anucode'])) {
            $model->anucode = $map['Anucode'];
        }

        if (isset($map['Anucodecalled'])) {
            $model->anucodecalled = $map['Anucodecalled'];
        }

        if (isset($map['Areacode'])) {
            $model->areacode = $map['Areacode'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Extra'])) {
            $model->extra = extra::fromMap($map['Extra']);
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Subid'])) {
            $model->subid = $map['Subid'];
        }

        if (isset($map['Subts'])) {
            $model->subts = $map['Subts'];
        }

        if (isset($map['TAnucodeConnect'])) {
            $model->TAnucodeConnect = $map['TAnucodeConnect'];
        }

        if (isset($map['TelA'])) {
            $model->telA = $map['TelA'];
        }

        if (isset($map['TelB'])) {
            $model->telB = $map['TelB'];
        }

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        return $model;
    }
}
