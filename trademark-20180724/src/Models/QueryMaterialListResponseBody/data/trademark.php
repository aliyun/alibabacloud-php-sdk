<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialListResponseBody\data;

use AlibabaCloud\Tea\Model;

class trademark extends Model
{
    /**
     * @example 12121212
     *
     * @var string
     */
    public $cardNumber;

    /**
     * @example 1212
     *
     * @var string
     */
    public $contactName;

    /**
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @example test.key
     *
     * @var string
     */
    public $loaKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $loaStatus;

    /**
     * @var string
     */
    public $materialVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example 1
     *
     * @var int
     */
    public $region;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $validDate;
    protected $_name = [
        'cardNumber'           => 'CardNumber',
        'contactName'          => 'ContactName',
        'id'                   => 'Id',
        'loaKey'               => 'LoaKey',
        'loaStatus'            => 'LoaStatus',
        'materialVersion'      => 'MaterialVersion',
        'name'                 => 'Name',
        'principalDescription' => 'PrincipalDescription',
        'principalName'        => 'PrincipalName',
        'reason'               => 'Reason',
        'region'               => 'Region',
        'status'               => 'Status',
        'systemVersion'        => 'SystemVersion',
        'type'                 => 'Type',
        'validDate'            => 'ValidDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->loaKey) {
            $res['LoaKey'] = $this->loaKey;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->materialVersion) {
            $res['MaterialVersion'] = $this->materialVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LoaKey'])) {
            $model->loaKey = $map['LoaKey'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['MaterialVersion'])) {
            $model->materialVersion = $map['MaterialVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
