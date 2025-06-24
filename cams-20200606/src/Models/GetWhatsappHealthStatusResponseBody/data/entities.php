<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetWhatsappHealthStatusResponseBody\data\entities\errors;

class entities extends Model
{
    /**
     * @var string
     */
    public $businessId;

    /**
     * @var string
     */
    public $canSendMessage;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var errors[]
     */
    public $errors;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'businessId' => 'BusinessId',
        'canSendMessage' => 'CanSendMessage',
        'entityType' => 'EntityType',
        'errors' => 'Errors',
        'language' => 'Language',
        'phoneNumber' => 'PhoneNumber',
        'templateCode' => 'TemplateCode',
        'wabaId' => 'WabaId',
    ];

    public function validate()
    {
        if (\is_array($this->errors)) {
            Model::validateArray($this->errors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->errors)) {
                $res['Errors'] = [];
                $n1 = 0;
                foreach ($this->errors as $item1) {
                    $res['Errors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Errors'] as $item1) {
                    $model->errors[$n1] = errors::fromMap($item1);
                    ++$n1;
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
