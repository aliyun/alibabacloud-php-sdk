<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $adminRamId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var int
     */
    public $storageMaxDays;

    /**
     * @var int
     */
    public $storageMaxSize;

    /**
     * @var string[]
     */
    public $userObject;
    protected $_name = [
        'adminRamId'     => 'AdminRamId',
        'description'    => 'Description',
        'directoryId'    => 'DirectoryId',
        'domainName'     => 'DomainName',
        'name'           => 'Name',
        'phoneNumber'    => 'PhoneNumber',
        'phoneNumbers'   => 'PhoneNumbers',
        'storageMaxDays' => 'StorageMaxDays',
        'storageMaxSize' => 'StorageMaxSize',
        'userObject'     => 'UserObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminRamId) {
            $res['AdminRamId'] = $this->adminRamId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = $this->phoneNumbers;
        }
        if (null !== $this->storageMaxDays) {
            $res['StorageMaxDays'] = $this->storageMaxDays;
        }
        if (null !== $this->storageMaxSize) {
            $res['StorageMaxSize'] = $this->storageMaxSize;
        }
        if (null !== $this->userObject) {
            $res['UserObject'] = $this->userObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminRamId'])) {
            if (!empty($map['AdminRamId'])) {
                $model->adminRamId = $map['AdminRamId'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = $map['PhoneNumbers'];
            }
        }
        if (isset($map['StorageMaxDays'])) {
            $model->storageMaxDays = $map['StorageMaxDays'];
        }
        if (isset($map['StorageMaxSize'])) {
            $model->storageMaxSize = $map['StorageMaxSize'];
        }
        if (isset($map['UserObject'])) {
            if (!empty($map['UserObject'])) {
                $model->userObject = $map['UserObject'];
            }
        }

        return $model;
    }
}
