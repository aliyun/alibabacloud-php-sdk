<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialListResponseBody\data;

use AlibabaCloud\Tea\Model;

class trademark extends Model
{
    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var int
     */
    public $validDate;

    /**
     * @var int
     */
    public $region;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var int
     */
    public $loaStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $loaKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'principalDescription' => 'PrincipalDescription',
        'status'               => 'Status',
        'type'                 => 'Type',
        'contactName'          => 'ContactName',
        'cardNumber'           => 'CardNumber',
        'validDate'            => 'ValidDate',
        'region'               => 'Region',
        'principalName'        => 'PrincipalName',
        'loaStatus'            => 'LoaStatus',
        'name'                 => 'Name',
        'loaKey'               => 'LoaKey',
        'id'                   => 'Id',
        'reason'               => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->loaKey) {
            $res['LoaKey'] = $this->loaKey;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LoaKey'])) {
            $model->loaKey = $map['LoaKey'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
