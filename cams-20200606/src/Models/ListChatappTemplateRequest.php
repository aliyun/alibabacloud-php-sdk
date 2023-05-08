<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest\page;
use AlibabaCloud\Tea\Model;

class ListChatappTemplateRequest extends Model
{
    /**
     * @description The review status of the message template. Valid values:
     *
     *   **pass**: The message template is approved.
     *   **fail**: The message template is rejected.
     *   **auditing**: The message template is being reviewed.
     *   **unaudit**: The review is suspended.
     *
     * @example pass
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The space ID of the user under the ISV account.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The ID of the WhatsApp account that you register.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The independent software vendor (ISV) verification code, which is used to verify whether the user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The language that is used in the message template. For more information, see [Language codes](~~463420~~).
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
     * @description The paging settings.
     *
     * @example "page": "{\"index\": 1,\"size\": 20}
     *
     * @var page
     */
    public $page;

    /**
     * @description The type of the message template.
     *
     *   **WHATSAPP**
     *   **VIBER**
     *   LINE: the Line message template. This type of message template will be released later.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'custSpaceId'  => 'CustSpaceId',
        'custWabaId'   => 'CustWabaId',
        'isvCode'      => 'IsvCode',
        'language'     => 'Language',
        'name'         => 'Name',
        'page'         => 'Page',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->custWabaId) {
            $res['CustWabaId'] = $this->custWabaId;
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
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['CustWabaId'])) {
            $model->custWabaId = $map['CustWabaId'];
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
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
