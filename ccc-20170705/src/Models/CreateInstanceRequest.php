<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

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
        'adminRamId' => 'AdminRamId',
        'description' => 'Description',
        'directoryId' => 'DirectoryId',
        'domainName' => 'DomainName',
        'name' => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'phoneNumbers' => 'PhoneNumbers',
        'storageMaxDays' => 'StorageMaxDays',
        'storageMaxSize' => 'StorageMaxSize',
        'userObject' => 'UserObject',
    ];

    public function validate()
    {
        if (\is_array($this->adminRamId)) {
            Model::validateArray($this->adminRamId);
        }
        if (\is_array($this->phoneNumbers)) {
            Model::validateArray($this->phoneNumbers);
        }
        if (\is_array($this->userObject)) {
            Model::validateArray($this->userObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminRamId) {
            if (\is_array($this->adminRamId)) {
                $res['AdminRamId'] = [];
                $n1 = 0;
                foreach ($this->adminRamId as $item1) {
                    $res['AdminRamId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->phoneNumbers)) {
                $res['PhoneNumbers'] = [];
                $n1 = 0;
                foreach ($this->phoneNumbers as $item1) {
                    $res['PhoneNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->storageMaxDays) {
            $res['StorageMaxDays'] = $this->storageMaxDays;
        }

        if (null !== $this->storageMaxSize) {
            $res['StorageMaxSize'] = $this->storageMaxSize;
        }

        if (null !== $this->userObject) {
            if (\is_array($this->userObject)) {
                $res['UserObject'] = [];
                $n1 = 0;
                foreach ($this->userObject as $item1) {
                    $res['UserObject'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AdminRamId'])) {
            if (!empty($map['AdminRamId'])) {
                $model->adminRamId = [];
                $n1 = 0;
                foreach ($map['AdminRamId'] as $item1) {
                    $model->adminRamId[$n1] = $item1;
                    ++$n1;
                }
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
                $model->phoneNumbers = [];
                $n1 = 0;
                foreach ($map['PhoneNumbers'] as $item1) {
                    $model->phoneNumbers[$n1] = $item1;
                    ++$n1;
                }
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
                $model->userObject = [];
                $n1 = 0;
                foreach ($map['UserObject'] as $item1) {
                    $model->userObject[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
