<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class GetCardSmsLinkRequest extends Model
{
    /**
     * @var string
     */
    public $cardTemplateCode;

    /**
     * @var string
     */
    public $cardTemplateParamJson;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @var string
     */
    public $signNameJson;
    protected $_name = [
        'cardTemplateCode'      => 'CardTemplateCode',
        'cardTemplateParamJson' => 'CardTemplateParamJson',
        'outId'                 => 'OutId',
        'phoneNumberJson'       => 'PhoneNumberJson',
        'signNameJson'          => 'SignNameJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardTemplateCode) {
            $res['CardTemplateCode'] = $this->cardTemplateCode;
        }
        if (null !== $this->cardTemplateParamJson) {
            $res['CardTemplateParamJson'] = $this->cardTemplateParamJson;
        }
        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCardSmsLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardTemplateCode'])) {
            $model->cardTemplateCode = $map['CardTemplateCode'];
        }
        if (isset($map['CardTemplateParamJson'])) {
            $model->cardTemplateParamJson = $map['CardTemplateParamJson'];
        }
        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }

        return $model;
    }
}
