<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateDatabaseRequest extends Model
{
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
    protected $_name = [
        'characterSetName' => 'CharacterSetName',
        'collate' => 'Collate',
        'ctype' => 'Ctype',
        'DBInstanceId' => 'DBInstanceId',
        'databaseName' => 'DatabaseName',
        'description' => 'Description',
        'owner' => 'Owner',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }

        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }

        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
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

        return $model;
    }
}
