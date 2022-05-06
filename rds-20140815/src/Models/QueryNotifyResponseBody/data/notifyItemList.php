<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\QueryNotifyResponseBody\data;

use AlibabaCloud\Tea\Model;

class notifyItemList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var bool
     */
    public $confirmFlag;

    /**
     * @var int
     */
    public $confirmor;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idempotentCount;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $notifyElement;

    /**
     * @var string
     */
    public $templateName;

    /**
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
