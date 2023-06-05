<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMetaDBResponseBody\databaseInfo;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @description The timestamp at which the metadatabase was updated.
     *
     * @example 1388776825
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @example hdfs://localhost:777/user/hadoop/test.txt
     *
     * @var string
     */
    public $location;

    /**
     * @description The ID of the metadatabase owner.
     *
     * @example 1388776837
     *
     * @var int
     */
    public $modifiedTimeStamp;

    /**
     * @description The URL of the metadatabase.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 1232
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The universally unique identifier (UUID) of the metadatabase.
     *
     * @example HIVE
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the metadatabase.
     *
     * @example 32342
     *
     * @var string
     */
    public $UUID;
    protected $_name = [
        'createTimeStamp'   => 'CreateTimeStamp',
        'location'          => 'Location',
        'modifiedTimeStamp' => 'ModifiedTimeStamp',
        'name'              => 'Name',
        'ownerId'           => 'OwnerId',
        'type'              => 'Type',
        'UUID'              => 'UUID',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dbList
     */
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
