<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\RegisterInternalAccountForBucResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountStructure;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $havanaId;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $ownerBid;

    /**
     * @var string
     */
    public $parentPk;

    /**
     * @var string
     */
    public $partnerPk;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $site;
    protected $_name = [
        'accountStatus' => 'AccountStatus',
        'accountStructure' => 'AccountStructure',
        'extendInfo' => 'ExtendInfo',
        'havanaId' => 'HavanaId',
        'lastLoginTime' => 'LastLoginTime',
        'ownerBid' => 'OwnerBid',
        'parentPk' => 'ParentPk',
        'partnerPk' => 'PartnerPk',
        'pk' => 'Pk',
        'site' => 'Site',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->accountStructure) {
            $res['AccountStructure'] = $this->accountStructure;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->havanaId) {
            $res['HavanaId'] = $this->havanaId;
        }

        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }

        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }

        if (null !== $this->parentPk) {
            $res['ParentPk'] = $this->parentPk;
        }

        if (null !== $this->partnerPk) {
            $res['PartnerPk'] = $this->partnerPk;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AccountStructure'])) {
            $model->accountStructure = $map['AccountStructure'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['HavanaId'])) {
            $model->havanaId = $map['HavanaId'];
        }

        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }

        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }

        if (isset($map['ParentPk'])) {
            $model->parentPk = $map['ParentPk'];
        }

        if (isset($map['PartnerPk'])) {
            $model->partnerPk = $map['PartnerPk'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        return $model;
    }
}
