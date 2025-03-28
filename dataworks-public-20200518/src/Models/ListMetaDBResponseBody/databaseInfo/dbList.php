<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo;

use AlibabaCloud\Dara\Model;

class dbList extends Model
{
    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $modifiedTimeStamp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $UUID;
    protected $_name = [
        'createTimeStamp' => 'CreateTimeStamp',
        'location' => 'Location',
        'modifiedTimeStamp' => 'ModifiedTimeStamp',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'type' => 'Type',
        'UUID' => 'UUID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->modifiedTimeStamp) {
            $res['ModifiedTimeStamp'] = $this->modifiedTimeStamp;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
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
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['ModifiedTimeStamp'])) {
            $model->modifiedTimeStamp = $map['ModifiedTimeStamp'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
