<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211125\Models;

use AlibabaCloud\Tea\Model;

class SendBatchMessageRequest extends Model
{
    /**
     * @var string
     */
    public $batchFlag;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $phoneNumberJson;

    /**
     * @var string
     */
    public $signNameJson;

    /**
     * @var string
     */
    public $specificChannel;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParamJson;
    protected $_name = [
        'batchFlag'         => 'BatchFlag',
        'extendInfo'        => 'ExtendInfo',
        'idType'            => 'IdType',
        'phoneNumberJson'   => 'PhoneNumberJson',
        'signNameJson'      => 'SignNameJson',
        'specificChannel'   => 'SpecificChannel',
        'templateCode'      => 'TemplateCode',
        'templateParamJson' => 'TemplateParamJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchFlag) {
            $res['BatchFlag'] = $this->batchFlag;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->phoneNumberJson) {
            $res['PhoneNumberJson'] = $this->phoneNumberJson;
        }
        if (null !== $this->signNameJson) {
            $res['SignNameJson'] = $this->signNameJson;
        }
        if (null !== $this->specificChannel) {
            $res['SpecificChannel'] = $this->specificChannel;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateParamJson) {
            $res['TemplateParamJson'] = $this->templateParamJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendBatchMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchFlag'])) {
            $model->batchFlag = $map['BatchFlag'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['PhoneNumberJson'])) {
            $model->phoneNumberJson = $map['PhoneNumberJson'];
        }
        if (isset($map['SignNameJson'])) {
            $model->signNameJson = $map['SignNameJson'];
        }
        if (isset($map['SpecificChannel'])) {
            $model->specificChannel = $map['SpecificChannel'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateParamJson'])) {
            $model->templateParamJson = $map['TemplateParamJson'];
        }

        return $model;
    }
}
