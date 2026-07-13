<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateAtiRegistrantRequest extends Model
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
    public $clientToken;

    /**
     * @var string
     */
    public $documentCode;

    /**
     * @var string
     */
    public $documentImage;

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
    public $phone;

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
    public $street;
    protected $_name = [
        'cc' => 'Cc',
        'city' => 'City',
        'clientToken' => 'ClientToken',
        'documentCode' => 'DocumentCode',
        'documentImage' => 'DocumentImage',
        'documentType' => 'DocumentType',
        'email' => 'Email',
        'name' => 'Name',
        'phone' => 'Phone',
        'registrantId' => 'RegistrantId',
        'state' => 'State',
        'street' => 'Street',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->documentCode) {
            $res['DocumentCode'] = $this->documentCode;
        }

        if (null !== $this->documentImage) {
            $res['DocumentImage'] = $this->documentImage;
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

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->registrantId) {
            $res['RegistrantId'] = $this->registrantId;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->street) {
            $res['Street'] = $this->street;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DocumentCode'])) {
            $model->documentCode = $map['DocumentCode'];
        }

        if (isset($map['DocumentImage'])) {
            $model->documentImage = $map['DocumentImage'];
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

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['RegistrantId'])) {
            $model->registrantId = $map['RegistrantId'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Street'])) {
            $model->street = $map['Street'];
        }

        return $model;
    }
}
