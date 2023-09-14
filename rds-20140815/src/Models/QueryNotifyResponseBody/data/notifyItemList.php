<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody\data;

use AlibabaCloud\Tea\Model;

class notifyItemList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 22973492**********
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Indicates whether the notification has been confirmed. You can call the [ConfirmNotify](~~610444~~) operation to mark the notification as confirmed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $confirmFlag;

    /**
     * @description The UID of the contact who called the [ConfirmNotify](~~610444~~) operation to mark the notification as confirmed. The contact belongs to the current Alibaba Cloud account.
     *
     * The value **0** indicates that the notification is automatically confirmed by the system.
     * @example 0
     *
     * @var int
     */
    public $confirmor;

    /**
     * @description The time when the notification was created.
     *
     * @example 2022-04-21T02:04:04Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the notification was modified.
     *
     * @example 2022-04-21T02:10:47Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the notification.
     *
     * @example 103499
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of times that repeatedly sent notifications are blocked.
     *
     * @example 0
     *
     * @var string
     */
    public $idempotentCount;

    /**
     * @description This parameter ensures the idempotence of the notification and prevents the notification from being repeatedly sent.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @description The level of the notification. Valid values:
     *
     *   **help**
     *   **success**
     *   **warning**
     *   **error**
     *   **loading**
     *   **notice**
     *
     * @example error
     *
     * @var string
     */
    public $level;

    /**
     * @description The element in the notification template. This parameter is a JSON string. Fields in the JSON string vary based on the value of the **TemplateName** parameter.
     *
     *   If the **TemplateName** parameter is **RenewalRecommend**, the JSON string contains the following fields:
     *
     *   **instanceName**: the ID of the instance that is about to expire
     *   **reservedTime**: the remaining validity period of the instance in days
     *
     *   If the **TemplateName** parameter is **InstanceCreateFailed**, the JSON string contains the following fields:
     *
     *   **orderId**: the ID of the order to purchase the instance
     *   **reason**: the cause of the instance creation failure
     *
     * @example {\"orderId\":21466**********}
     *
     * @var string
     */
    public $notifyElement;

    /**
     * @description The template of the notification. Valid values:
     *
     *   **RenewalRecommend**: The template that is used to notify of renewal suggestions.
     *   **InstanceCreateFailed**: The template that is used to notify that an instance fails to be created and is refunded.
     *
     * @example InstanceCreateFailed
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The type of the notification. Valid values:
     *
     *   **Sell**: sales notification
     *   **Operation**: O\&M notification
     *   **Promotion**: promotion notification
     *
     * @example Sell
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'confirmFlag'     => 'ConfirmFlag',
        'confirmor'       => 'Confirmor',
        'gmtCreated'      => 'GmtCreated',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'idempotentCount' => 'IdempotentCount',
        'idempotentId'    => 'IdempotentId',
        'level'           => 'Level',
        'notifyElement'   => 'NotifyElement',
        'templateName'    => 'TemplateName',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->confirmFlag) {
            $res['ConfirmFlag'] = $this->confirmFlag;
        }
        if (null !== $this->confirmor) {
            $res['Confirmor'] = $this->confirmor;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idempotentCount) {
            $res['IdempotentCount'] = $this->idempotentCount;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->notifyElement) {
            $res['NotifyElement'] = $this->notifyElement;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ConfirmFlag'])) {
            $model->confirmFlag = $map['ConfirmFlag'];
        }
        if (isset($map['Confirmor'])) {
            $model->confirmor = $map['Confirmor'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdempotentCount'])) {
            $model->idempotentCount = $map['IdempotentCount'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['NotifyElement'])) {
            $model->notifyElement = $map['NotifyElement'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
