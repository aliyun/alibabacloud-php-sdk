<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderDetailV2ResponseBody\module\passengerList;

use AlibabaCloud\Tea\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $certIssueDate;

    /**
     * @var string
     */
    public $certIssuePlace;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $driveLicenceFirst;

    /**
     * @var string
     */
    public $driveLicenceType;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $holderNationality;

    /**
     * @example 131332
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idCheckCode;

    /**
     * @var string
     */
    public $issueCountry;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'birthDate'         => 'birth_date',
        'certIssueDate'     => 'cert_issue_date',
        'certIssuePlace'    => 'cert_issue_place',
        'credentialNo'      => 'credential_no',
        'driveLicenceFirst' => 'drive_licence_first',
        'driveLicenceType'  => 'drive_licence_type',
        'expireDate'        => 'expire_date',
        'holderNationality' => 'holder_nationality',
        'id'                => 'id',
        'idCheckCode'       => 'id_check_code',
        'issueCountry'      => 'issue_country',
        'type'              => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthDate) {
            $res['birth_date'] = $this->birthDate;
        }
        if (null !== $this->certIssueDate) {
            $res['cert_issue_date'] = $this->certIssueDate;
        }
        if (null !== $this->certIssuePlace) {
            $res['cert_issue_place'] = $this->certIssuePlace;
        }
        if (null !== $this->credentialNo) {
            $res['credential_no'] = $this->credentialNo;
        }
        if (null !== $this->driveLicenceFirst) {
            $res['drive_licence_first'] = $this->driveLicenceFirst;
        }
        if (null !== $this->driveLicenceType) {
            $res['drive_licence_type'] = $this->driveLicenceType;
        }
        if (null !== $this->expireDate) {
            $res['expire_date'] = $this->expireDate;
        }
        if (null !== $this->holderNationality) {
            $res['holder_nationality'] = $this->holderNationality;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->idCheckCode) {
            $res['id_check_code'] = $this->idCheckCode;
        }
        if (null !== $this->issueCountry) {
            $res['issue_country'] = $this->issueCountry;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return credentials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birth_date'])) {
            $model->birthDate = $map['birth_date'];
        }
        if (isset($map['cert_issue_date'])) {
            $model->certIssueDate = $map['cert_issue_date'];
        }
        if (isset($map['cert_issue_place'])) {
            $model->certIssuePlace = $map['cert_issue_place'];
        }
        if (isset($map['credential_no'])) {
            $model->credentialNo = $map['credential_no'];
        }
        if (isset($map['drive_licence_first'])) {
            $model->driveLicenceFirst = $map['drive_licence_first'];
        }
        if (isset($map['drive_licence_type'])) {
            $model->driveLicenceType = $map['drive_licence_type'];
        }
        if (isset($map['expire_date'])) {
            $model->expireDate = $map['expire_date'];
        }
        if (isset($map['holder_nationality'])) {
            $model->holderNationality = $map['holder_nationality'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['id_check_code'])) {
            $model->idCheckCode = $map['id_check_code'];
        }
        if (isset($map['issue_country'])) {
            $model->issueCountry = $map['issue_country'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
