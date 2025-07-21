<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateRequest\page;
use AlibabaCloud\Tea\Model;

class ListChatappTemplateRequest extends Model
{
    /**
     * @description The review state of the template. Valid values:
     *
     *   **pass**: The template is approved.
     *   **fail**: The template is rejected.
     *   **auditing**: The template is being reviewed.
     *   **unaudit**: The review is suspended.
     *
     * @example pass
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description The category of the message template.
     *
     * @example AUTHENTICATION
     *
     * @var string
     */
    public $category;

    /**
     * @description The code of the message template.
     *
     * @example 838888822*****
     *
     * @var string
     */
    public $code;

    /**
     * @description The space ID of the RAM user within the ISV account.
     *
     * @example 28251486512358****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The WhatsApp Business Account (WABA) ID of the RAM user within the independent software vendor (ISV) account.
     *
     * >  CustWabaId is an obsolete parameter. Use CustSpaceId instead.
     *
     * @example 65921621816****
     *
     * @deprecated
     *
     * @var string
     */
    public $custWabaId;

    /**
     * @description The ISV verification code. This parameter is used to verify whether the RAM user is authorized by the ISV account.
     *
     * @example skdi3kksloslikdkkdk
     *
     * @var string
     */
    public $isvCode;

    /**
     * @description The language that is used in the message template. For more information, see [Language codes](https://help.aliyun.com/document_detail/463420.html).
     *
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @description The name of the template.
     *
     * @example hello_whatsapp
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The pagination settings.
     *
     * @example "page": "{\\"index\\": 1,\\"size\\": 20}
     *
     * @var page
     */
    public $page;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the message template.
     *
     *   **WHATSAPP**
     *   **VIBER**
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $templateType;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'category' => 'Category',
        'code' => 'Code',
        'custSpaceId' => 'CustSpaceId',
        'custWabaId' => 'CustWabaId',
        'isvCode' => 'IsvCode',
        'language' => 'Language',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateType' => 'TemplateType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
