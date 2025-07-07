<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseRoleCreateBizRoleRequest extends Model
{
    /**
     * @var string
     */
    public $bizPermissionCodeListJson;

    /**
     * @var string
     */
    public $bizRoleDesc;

    /**
     * @var string
     */
    public $bizRoleName;

    /**
     * @var string
     */
    public $encryptTicket;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'bizPermissionCodeListJson' => 'BizPermissionCodeListJson',
        'bizRoleDesc' => 'BizRoleDesc',
        'bizRoleName' => 'BizRoleName',
        'encryptTicket' => 'EncryptTicket',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizPermissionCodeListJson) {
            $res['BizPermissionCodeListJson'] = $this->bizPermissionCodeListJson;
        }

        if (null !== $this->bizRoleDesc) {
            $res['BizRoleDesc'] = $this->bizRoleDesc;
        }

        if (null !== $this->bizRoleName) {
            $res['BizRoleName'] = $this->bizRoleName;
        }

        if (null !== $this->encryptTicket) {
            $res['EncryptTicket'] = $this->encryptTicket;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['BizPermissionCodeListJson'])) {
            $model->bizPermissionCodeListJson = $map['BizPermissionCodeListJson'];
        }

        if (isset($map['BizRoleDesc'])) {
            $model->bizRoleDesc = $map['BizRoleDesc'];
        }

        if (isset($map['BizRoleName'])) {
            $model->bizRoleName = $map['BizRoleName'];
        }

        if (isset($map['EncryptTicket'])) {
            $model->encryptTicket = $map['EncryptTicket'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
