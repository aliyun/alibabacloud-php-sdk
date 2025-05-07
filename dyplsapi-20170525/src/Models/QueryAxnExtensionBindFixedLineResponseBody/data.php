<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnExtensionBindFixedLineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QueryAxnExtensionBindFixedLineResponseBody\data\extraaxx;

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
     * @var extraaxx
     */
    public $extraaxx;

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
    public $telX;

    /**
     * @var string
     */
    public $telXext;
    protected $_name = [
        'anucode' => 'Anucode',
        'anucodecalled' => 'Anucodecalled',
        'areacode' => 'Areacode',
        'expiration' => 'Expiration',
        'extraaxx' => 'Extraaxx',
        'remark' => 'Remark',
        'subid' => 'Subid',
        'subts' => 'Subts',
        'TAnucodeConnect' => 'TAnucodeConnect',
        'telA' => 'TelA',
        'telX' => 'TelX',
        'telXext' => 'TelXext',
    ];

    public function validate()
    {
        if (null !== $this->extraaxx) {
            $this->extraaxx->validate();
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

        if (null !== $this->extraaxx) {
            $res['Extraaxx'] = null !== $this->extraaxx ? $this->extraaxx->toArray($noStream) : $this->extraaxx;
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

        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        if (null !== $this->telXext) {
            $res['TelXext'] = $this->telXext;
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

        if (isset($map['Extraaxx'])) {
            $model->extraaxx = extraaxx::fromMap($map['Extraaxx']);
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

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        if (isset($map['TelXext'])) {
            $model->telXext = $map['TelXext'];
        }

        return $model;
    }
}
