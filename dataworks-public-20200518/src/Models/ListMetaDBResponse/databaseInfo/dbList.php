<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponse\databaseInfo;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var int
     */
    public $modifiedTimeStamp;

    /**
     * @var string
     */
    public $UUID;
    protected $_name = [
        'name'              => 'Name',
        'type'              => 'Type',
        'ownerId'           => 'OwnerId',
        'location'          => 'Location',
        'createTimeStamp'   => 'CreateTimeStamp',
        'modifiedTimeStamp' => 'ModifiedTimeStamp',
        'UUID'              => 'UUID',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('createTimeStamp', $this->createTimeStamp, true);
        Model::validateRequired('modifiedTimeStamp', $this->modifiedTimeStamp, true);
        Model::validateRequired('UUID', $this->UUID, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->modifiedTimeStamp) {
            $res['ModifiedTimeStamp'] = $this->modifiedTimeStamp;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['ModifiedTimeStamp'])) {
            $model->modifiedTimeStamp = $map['ModifiedTimeStamp'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
