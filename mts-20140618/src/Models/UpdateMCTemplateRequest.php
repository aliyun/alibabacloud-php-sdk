<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class UpdateMCTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $porn;

    /**
     * @var string
     */
    public $terrorism;

    /**
     * @var string
     */
    public $politics;

    /**
     * @var string
     */
    public $ad;

    /**
     * @var string
     */
    public $qrcode;

    /**
     * @var string
     */
    public $live;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $abuse;

    /**
     * @var string
     */
    public $contraband;

    /**
     * @var string
     */
    public $spam;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateId'           => 'TemplateId',
        'name'                 => 'Name',
        'porn'                 => 'Porn',
        'terrorism'            => 'Terrorism',
        'politics'             => 'Politics',
        'ad'                   => 'Ad',
        'qrcode'               => 'Qrcode',
        'live'                 => 'Live',
        'logo'                 => 'Logo',
        'abuse'                => 'Abuse',
        'contraband'           => 'Contraband',
        'spam'                 => 'spam',
        'ownerAccount'         => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->porn) {
            $res['Porn'] = $this->porn;
        }
        if (null !== $this->terrorism) {
            $res['Terrorism'] = $this->terrorism;
        }
        if (null !== $this->politics) {
            $res['Politics'] = $this->politics;
        }
        if (null !== $this->ad) {
            $res['Ad'] = $this->ad;
        }
        if (null !== $this->qrcode) {
            $res['Qrcode'] = $this->qrcode;
        }
        if (null !== $this->live) {
            $res['Live'] = $this->live;
        }
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->abuse) {
            $res['Abuse'] = $this->abuse;
        }
        if (null !== $this->contraband) {
            $res['Contraband'] = $this->contraband;
        }
        if (null !== $this->spam) {
            $res['spam'] = $this->spam;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMCTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Porn'])) {
            $model->porn = $map['Porn'];
        }
        if (isset($map['Terrorism'])) {
            $model->terrorism = $map['Terrorism'];
        }
        if (isset($map['Politics'])) {
            $model->politics = $map['Politics'];
        }
        if (isset($map['Ad'])) {
            $model->ad = $map['Ad'];
        }
        if (isset($map['Qrcode'])) {
            $model->qrcode = $map['Qrcode'];
        }
        if (isset($map['Live'])) {
            $model->live = $map['Live'];
        }
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['Abuse'])) {
            $model->abuse = $map['Abuse'];
        }
        if (isset($map['Contraband'])) {
            $model->contraband = $map['Contraband'];
        }
        if (isset($map['spam'])) {
            $model->spam = $map['spam'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
