<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $UUID;

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
    public $location;
    protected $_name = [
        'type'              => 'Type',
        'createTimeStamp'   => 'CreateTimeStamp',
        'UUID'              => 'UUID',
        'modifiedTimeStamp' => 'ModifiedTimeStamp',
        'name'              => 'Name',
        'ownerId'           => 'OwnerId',
        'location'          => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
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
        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
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
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
