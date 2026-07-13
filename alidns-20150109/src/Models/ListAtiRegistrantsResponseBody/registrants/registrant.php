<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiRegistrantsResponseBody\registrants;

use AlibabaCloud\Dara\Model;

class registrant extends Model
{
    /**
     * @var string
     */
    public $cc;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $documentCode;

    /**
     * @var string
     */
    public $documentType;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $registrantId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTimestamp;
    protected $_name = [
        'cc' => 'Cc',
        'city' => 'City',
        'createTimestamp' => 'CreateTimestamp',
        'documentCode' => 'DocumentCode',
        'documentType' => 'DocumentType',
        'email' => 'Email',
        'name' => 'Name',
        'registrantId' => 'RegistrantId',
        'state' => 'State',
        'status' => 'Status',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = $this->cc;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->documentCode) {
            $res['DocumentCode'] = $this->documentCode;
        }

        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->registrantId) {
            $res['RegistrantId'] = $this->registrantId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['Cc'])) {
            $model->cc = $map['Cc'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['DocumentCode'])) {
            $model->documentCode = $map['DocumentCode'];
        }

        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
