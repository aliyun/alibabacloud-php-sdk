<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList\credential;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList\credentials;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList\tickets;
use AlibabaCloud\Tea\Model;

class passengerList extends Model
{
    /**
     * @example 1991-06-21 00:00:00
     *
     * @var string
     */
    public $birthday;

    /**
     * @example 12172819047252004460056
     *
     * @var string
     */
    public $btripUserId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $country;

    /**
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @var credential
     */
    public $credential;

    /**
     * @var credentials[]
     */
    public $credentials;

    /**
     * @example 17800000001@163.com
     *
     * @var string
     */
    public $email;

    /**
     * @example san
     *
     * @var string
     */
    public $enFirstName;

    /**
     * @example zhang
     *
     * @var string
     */
    public $enLastName;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $englishName;

    /**
     * @example 1
     *
     * @var int
     */
    public $gender;

    /**
     * @example 3243028
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isComplete;

    /**
     * @example false
     *
     * @var bool
     */
    public $isFrequently;

    /**
     * @var string
     */
    public $memo;

    /**
     * @example 86
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @example 17800000001
     *
     * @var string
     */
    public $mobilePhoneNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $oneself;

    /**
     * @var string
     */
    public $orderName;

    /**
     * @example 1111
     *
     * @var string
     */
    public $outPassengerId;

    /**
     * @example 17800000001
     *
     * @var string
     */
    public $phone;

    /**
     * @example 111
     *
     * @var string
     */
    public $shengPiPinyin;

    /**
     * @var string[]
     */
    public $ticketNos;

    /**
     * @var tickets[]
     */
    public $tickets;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example 312312
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'birthday'          => 'birthday',
        'btripUserId'       => 'btrip_user_id',
        'code'              => 'code',
        'country'           => 'country',
        'countryCode'       => 'country_code',
        'credential'        => 'credential',
        'credentials'       => 'credentials',
        'email'             => 'email',
        'enFirstName'       => 'en_first_name',
        'enLastName'        => 'en_last_name',
        'englishName'       => 'english_name',
        'gender'            => 'gender',
        'id'                => 'id',
        'isComplete'        => 'is_complete',
        'isFrequently'      => 'is_frequently',
        'memo'              => 'memo',
        'mobileCountryCode' => 'mobile_country_code',
        'mobilePhoneNumber' => 'mobile_phone_number',
        'name'              => 'name',
        'oneself'           => 'oneself',
        'orderName'         => 'order_name',
        'outPassengerId'    => 'out_passenger_id',
        'phone'             => 'phone',
        'shengPiPinyin'     => 'sheng_pi_pinyin',
        'ticketNos'         => 'ticket_nos',
        'tickets'           => 'tickets',
        'type'              => 'type',
        'userId'            => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->btripUserId) {
            $res['btrip_user_id'] = $this->btripUserId;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->countryCode) {
            $res['country_code'] = $this->countryCode;
        }
        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toMap() : null;
        }
        if (null !== $this->credentials) {
            $res['credentials'] = [];
            if (null !== $this->credentials && \is_array($this->credentials)) {
                $n = 0;
                foreach ($this->credentials as $item) {
                    $res['credentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->enFirstName) {
            $res['en_first_name'] = $this->enFirstName;
        }
        if (null !== $this->enLastName) {
            $res['en_last_name'] = $this->enLastName;
        }
        if (null !== $this->englishName) {
            $res['english_name'] = $this->englishName;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isComplete) {
            $res['is_complete'] = $this->isComplete;
        }
        if (null !== $this->isFrequently) {
            $res['is_frequently'] = $this->isFrequently;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->mobileCountryCode) {
            $res['mobile_country_code'] = $this->mobileCountryCode;
        }
        if (null !== $this->mobilePhoneNumber) {
            $res['mobile_phone_number'] = $this->mobilePhoneNumber;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->oneself) {
            $res['oneself'] = $this->oneself;
        }
        if (null !== $this->orderName) {
            $res['order_name'] = $this->orderName;
        }
        if (null !== $this->outPassengerId) {
            $res['out_passenger_id'] = $this->outPassengerId;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->shengPiPinyin) {
            $res['sheng_pi_pinyin'] = $this->shengPiPinyin;
        }
        if (null !== $this->ticketNos) {
            $res['ticket_nos'] = $this->ticketNos;
        }
        if (null !== $this->tickets) {
            $res['tickets'] = [];
            if (null !== $this->tickets && \is_array($this->tickets)) {
                $n = 0;
                foreach ($this->tickets as $item) {
                    $res['tickets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passengerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['btrip_user_id'])) {
            $model->btripUserId = $map['btrip_user_id'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['country_code'])) {
            $model->countryCode = $map['country_code'];
        }
        if (isset($map['credential'])) {
            $model->credential = credential::fromMap($map['credential']);
        }
        if (isset($map['credentials'])) {
            if (!empty($map['credentials'])) {
                $model->credentials = [];
                $n                  = 0;
                foreach ($map['credentials'] as $item) {
                    $model->credentials[$n++] = null !== $item ? credentials::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['en_first_name'])) {
            $model->enFirstName = $map['en_first_name'];
        }
        if (isset($map['en_last_name'])) {
            $model->enLastName = $map['en_last_name'];
        }
        if (isset($map['english_name'])) {
            $model->englishName = $map['english_name'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['is_complete'])) {
            $model->isComplete = $map['is_complete'];
        }
        if (isset($map['is_frequently'])) {
            $model->isFrequently = $map['is_frequently'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['mobile_country_code'])) {
            $model->mobileCountryCode = $map['mobile_country_code'];
        }
        if (isset($map['mobile_phone_number'])) {
            $model->mobilePhoneNumber = $map['mobile_phone_number'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['oneself'])) {
            $model->oneself = $map['oneself'];
        }
        if (isset($map['order_name'])) {
            $model->orderName = $map['order_name'];
        }
        if (isset($map['out_passenger_id'])) {
            $model->outPassengerId = $map['out_passenger_id'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['sheng_pi_pinyin'])) {
            $model->shengPiPinyin = $map['sheng_pi_pinyin'];
        }
        if (isset($map['ticket_nos'])) {
            if (!empty($map['ticket_nos'])) {
                $model->ticketNos = $map['ticket_nos'];
            }
        }
        if (isset($map['tickets'])) {
            if (!empty($map['tickets'])) {
                $model->tickets = [];
                $n              = 0;
                foreach ($map['tickets'] as $item) {
                    $model->tickets[$n++] = null !== $item ? tickets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
