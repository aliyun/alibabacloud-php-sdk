<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetSubPartnerListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $address;
    /**
     * @var string
     */
    public $agreementStatus;
    /**
     * @var string
     */
    public $agreementStatusDesc;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var string
     */
    public $contact;
    /**
     * @var string
     */
    public $district;
    /**
     * @var string
     */
    public $joinTime;
    /**
     * @var string
     */
    public $masterAccount;
    /**
     * @var string
     */
    public $masterUid;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'address'             => 'Address',
        'agreementStatus'     => 'AgreementStatus',
        'agreementStatusDesc' => 'AgreementStatusDesc',
        'city'                => 'City',
        'companyName'         => 'CompanyName',
        'contact'             => 'Contact',
        'district'            => 'District',
        'joinTime'            => 'JoinTime',
        'masterAccount'       => 'MasterAccount',
        'masterUid'           => 'MasterUid',
        'pid'                 => 'Pid',
        'province'            => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->agreementStatus) {
            $res['AgreementStatus'] = $this->agreementStatus;
        }

        if (null !== $this->agreementStatusDesc) {
            $res['AgreementStatusDesc'] = $this->agreementStatusDesc;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->contact) {
            $res['Contact'] = $this->contact;
        }

        if (null !== $this->district) {
            $res['District'] = $this->district;
        }

        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }

        if (null !== $this->masterAccount) {
            $res['MasterAccount'] = $this->masterAccount;
        }

        if (null !== $this->masterUid) {
            $res['MasterUid'] = $this->masterUid;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AgreementStatus'])) {
            $model->agreementStatus = $map['AgreementStatus'];
        }

        if (isset($map['AgreementStatusDesc'])) {
            $model->agreementStatusDesc = $map['AgreementStatusDesc'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['Contact'])) {
            $model->contact = $map['Contact'];
        }

        if (isset($map['District'])) {
            $model->district = $map['District'];
        }

        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }

        if (isset($map['MasterAccount'])) {
            $model->masterAccount = $map['MasterAccount'];
        }

        if (isset($map['MasterUid'])) {
            $model->masterUid = $map['MasterUid'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
