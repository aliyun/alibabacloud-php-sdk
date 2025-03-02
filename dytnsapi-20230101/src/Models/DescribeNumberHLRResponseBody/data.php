<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody\data\call;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody\data\live;
use AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody\data\sms;

class data extends Model
{
    /**
     * @var string
     */
    public $blocked;
    /**
     * @var call
     */
    public $call;
    /**
     * @var string
     */
    public $carrier;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $countryIso3;
    /**
     * @var live
     */
    public $live;
    /**
     * @var string
     */
    public $phoneType;
    /**
     * @var sms
     */
    public $sms;
    protected $_name = [
        'blocked'     => 'Blocked',
        'call'        => 'Call',
        'carrier'     => 'Carrier',
        'city'        => 'City',
        'countryIso3' => 'CountryIso3',
        'live'        => 'Live',
        'phoneType'   => 'PhoneType',
        'sms'         => 'Sms',
    ];

    public function validate()
    {
        if (null !== $this->call) {
            $this->call->validate();
        }
        if (null !== $this->live) {
            $this->live->validate();
        }
        if (null !== $this->sms) {
            $this->sms->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blocked) {
            $res['Blocked'] = $this->blocked;
        }

        if (null !== $this->call) {
            $res['Call'] = null !== $this->call ? $this->call->toArray($noStream) : $this->call;
        }

        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->countryIso3) {
            $res['CountryIso3'] = $this->countryIso3;
        }

        if (null !== $this->live) {
            $res['Live'] = null !== $this->live ? $this->live->toArray($noStream) : $this->live;
        }

        if (null !== $this->phoneType) {
            $res['PhoneType'] = $this->phoneType;
        }

        if (null !== $this->sms) {
            $res['Sms'] = null !== $this->sms ? $this->sms->toArray($noStream) : $this->sms;
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
        if (isset($map['Blocked'])) {
            $model->blocked = $map['Blocked'];
        }

        if (isset($map['Call'])) {
            $model->call = call::fromMap($map['Call']);
        }

        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CountryIso3'])) {
            $model->countryIso3 = $map['CountryIso3'];
        }

        if (isset($map['Live'])) {
            $model->live = live::fromMap($map['Live']);
        }

        if (isset($map['PhoneType'])) {
            $model->phoneType = $map['PhoneType'];
        }

        if (isset($map['Sms'])) {
            $model->sms = sms::fromMap($map['Sms']);
        }

        return $model;
    }
}
