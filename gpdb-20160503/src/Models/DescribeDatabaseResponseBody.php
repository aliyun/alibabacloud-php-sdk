<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeDatabaseResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessPrivilege;

    /**
     * @var string
     */
    public $characterSetName;

    /**
     * @var string
     */
    public $collate;

    /**
     * @var string
     */
    public $connLimit;

    /**
     * @var string
     */
    public $ctype;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $tableSpace;
    protected $_name = [
        'accessPrivilege' => 'AccessPrivilege',
        'characterSetName' => 'CharacterSetName',
        'collate' => 'Collate',
        'connLimit' => 'ConnLimit',
        'ctype' => 'Ctype',
        'DBInstanceId' => 'DBInstanceId',
        'databaseName' => 'DatabaseName',
        'description' => 'Description',
        'owner' => 'Owner',
        'requestId' => 'RequestId',
        'size' => 'Size',
        'tableSpace' => 'TableSpace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPrivilege) {
            $res['AccessPrivilege'] = $this->accessPrivilege;
        }

        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }

        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }

        if (null !== $this->connLimit) {
            $res['ConnLimit'] = $this->connLimit;
        }

        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->tableSpace) {
            $res['TableSpace'] = $this->tableSpace;
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
        if (isset($map['AccessPrivilege'])) {
            $model->accessPrivilege = $map['AccessPrivilege'];
        }

        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }

        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }

        if (isset($map['ConnLimit'])) {
            $model->connLimit = $map['ConnLimit'];
        }

        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TableSpace'])) {
            $model->tableSpace = $map['TableSpace'];
        }

        return $model;
    }
}
