<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UsersDetailsVO extends Model
{
    /**
     * @var string
     */
    public $approvalSignatureBase64;

    /**
     * @var string
     */
    public $approvalSqlTemplate;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var int
     */
    public $creator;

    /**
     * @var int
     */
    public $dataReady;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mekid;

    /**
     * @var string
     */
    public $pathPrefix;

    /**
     * @var int
     */
    public $resultParty;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $userConfirmed;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPublicKeyPem;
    protected $_name = [
        'approvalSignatureBase64' => 'ApprovalSignatureBase64',
        'approvalSqlTemplate'     => 'ApprovalSqlTemplate',
        'approvalStatus'          => 'ApprovalStatus',
        'creator'                 => 'Creator',
        'dataReady'               => 'DataReady',
        'id'                      => 'Id',
        'mekid'                   => 'Mekid',
        'pathPrefix'              => 'PathPrefix',
        'resultParty'             => 'ResultParty',
        'uid'                     => 'Uid',
        'userConfirmed'           => 'UserConfirmed',
        'userName'                => 'UserName',
        'userPublicKeyPem'        => 'UserPublicKeyPem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalSignatureBase64) {
            $res['ApprovalSignatureBase64'] = $this->approvalSignatureBase64;
        }
        if (null !== $this->approvalSqlTemplate) {
            $res['ApprovalSqlTemplate'] = $this->approvalSqlTemplate;
        }
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataReady) {
            $res['DataReady'] = $this->dataReady;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mekid) {
            $res['Mekid'] = $this->mekid;
        }
        if (null !== $this->pathPrefix) {
            $res['PathPrefix'] = $this->pathPrefix;
        }
        if (null !== $this->resultParty) {
            $res['ResultParty'] = $this->resultParty;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userConfirmed) {
            $res['UserConfirmed'] = $this->userConfirmed;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPublicKeyPem) {
            $res['UserPublicKeyPem'] = $this->userPublicKeyPem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UsersDetailsVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalSignatureBase64'])) {
            $model->approvalSignatureBase64 = $map['ApprovalSignatureBase64'];
        }
        if (isset($map['ApprovalSqlTemplate'])) {
            $model->approvalSqlTemplate = $map['ApprovalSqlTemplate'];
        }
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataReady'])) {
            $model->dataReady = $map['DataReady'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mekid'])) {
            $model->mekid = $map['Mekid'];
        }
        if (isset($map['PathPrefix'])) {
            $model->pathPrefix = $map['PathPrefix'];
        }
        if (isset($map['ResultParty'])) {
            $model->resultParty = $map['ResultParty'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserConfirmed'])) {
            $model->userConfirmed = $map['UserConfirmed'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPublicKeyPem'])) {
            $model->userPublicKeyPem = $map['UserPublicKeyPem'];
        }

        return $model;
    }
}
