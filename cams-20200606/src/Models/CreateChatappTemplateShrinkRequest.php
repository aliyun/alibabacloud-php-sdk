<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappTemplateShrinkRequest extends Model
{
    /**
     * @description The category of the message template. Valid values:
     *
     *   **ACCOUNT_UPDATE**: account update
     *   **PAYMENT_UPDATE**: payment update
     *   **PERSONAL_FINANCE\_UPDATE**: personal finance update
     *   **SHIPPING_UPDATE**: traffic update
     *   **RESERVATION_UPDATE**: reservation update
     *   **ISSUE_RESOLUTION**: issue resolution
     *   **APPOINTMENT_UPDATE**: appointment update
     *   **TRANSPORTATION_UPDATE**: logistics information update
     *   **TICKET_UPDATE**: ticket update
     *   **ALERT_UPDATE**: alert update
     *   **AUTO_REPLY**: auto reply
     *
     * @example ACCOUNT_UPDATE
     *
     * @var string
     */
    public $category;

    /**
     * @description The components of the message template.
     *
     * @var string
     */
    public $componentsShrink;

    /**
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The unique identifier of the WhatsApp account that you register.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The examples of variables that are used when you create the message template.
     *
     * @var string
     */
    public $exampleShrink;

    /**
     * @description Assigned by ISV for RAM user authentication and authorization.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The language that is used in the message template.
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the message template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the message template. Valid values:
     *
     *   **WHATSAPP**
     *   VIBER (under development)
     *   LINE (under development)
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'category'         => 'Category',
        'componentsShrink' => 'Components',
        'custSpaceId'      => 'CustSpaceId',
        'custWabaId'       => 'CustWabaId',
        'exampleShrink'    => 'Example',
        'isvCode'          => 'IsvCode',
        'language'         => 'Language',
        'name'             => 'Name',
        'templateType'     => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
        }
        if (null !== $this->exampleShrink) {
            $res['Example'] = $this->exampleShrink;
        }
        if (null !== $this->isvCode) {
            $res['IsvCode'] = $this->isvCode;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Components'])) {
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
        }
        if (isset($map['Example'])) {
            $model->exampleShrink = $map['Example'];
        }
        if (isset($map['IsvCode'])) {
            $model->isvCode = $map['IsvCode'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
