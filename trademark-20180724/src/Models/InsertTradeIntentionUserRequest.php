<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class InsertTradeIntentionUserRequest extends Model
{
    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $vcode;

    /**
     * @var string
     */
    public $partnerCode;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $ua;
    protected $_name = [
        'registerNumber' => 'RegisterNumber',
        'classification' => 'Classification',
        'type'           => 'Type',
        'mobile'         => 'Mobile',
        'vcode'          => 'Vcode',
        'partnerCode'    => 'PartnerCode',
        'userName'       => 'UserName',
        'description'    => 'Description',
        'channel'        => 'Channel',
        'token'          => 'Token',
        'ua'             => 'Ua',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->vcode) {
            $res['Vcode'] = $this->vcode;
        }
        if (null !== $this->partnerCode) {
            $res['PartnerCode'] = $this->partnerCode;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertTradeIntentionUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Vcode'])) {
            $model->vcode = $map['Vcode'];
        }
        if (isset($map['PartnerCode'])) {
            $model->partnerCode = $map['PartnerCode'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }

        return $model;
    }
}
