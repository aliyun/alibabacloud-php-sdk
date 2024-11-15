<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities\errors;
use AlibabaCloud\Tea\Model;

class entities extends Model
{
    /**
     * @description The Business Manager ID.
     *
     * @example 3992****
     *
     * @var string
     */
    public $businessId;

    /**
     * @description Indicates whether the messages can be sent.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $canSendMessage;

    /**
     * @description The entity type.
     *
     * @example PHONE_NUMBER
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The reasons why the messages failed to be sent.
     *
     * @var errors[]
     */
    public $errors;

    /**
     * @description The template language.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The phone number to which the messages are sent.
     *
     * @example 86138****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The template code. This parameter is returned when the NodeType parameter is set to **template**.
     *
     * @example 939928****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The WABA ID. You can view the WABA ID in the Chat App Message Service console after you create the WABA.
     *
     * @example 39939***
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'businessId'     => 'BusinessId',
        'canSendMessage' => 'CanSendMessage',
        'entityType'     => 'EntityType',
        'errors'         => 'Errors',
        'language'       => 'Language',
        'phoneNumber'    => 'PhoneNumber',
        'templateCode'   => 'TemplateCode',
        'wabaId'         => 'WabaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->canSendMessage) {
            $res['CanSendMessage'] = $this->canSendMessage;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->errors) {
            $res['Errors'] = [];
            if (null !== $this->errors && \is_array($this->errors)) {
                $n = 0;
                foreach ($this->errors as $item) {
                    $res['Errors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['CanSendMessage'])) {
            $model->canSendMessage = $map['CanSendMessage'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                $n             = 0;
                foreach ($map['Errors'] as $item) {
                    $model->errors[$n++] = null !== $item ? errors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
