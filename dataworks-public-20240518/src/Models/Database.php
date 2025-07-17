<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class Database extends Model
{
    /**
     * @example test comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1736852168000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example holo-database:h-xxxx::test_db
     *
     * @var string
     */
    public $id;

    /**
     * @example oss://test-bucket/test_db
     *
     * @var string
     */
    public $locationUri;

    /**
     * @example 1736852168000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example test_db
     *
     * @var string
     */
    public $name;

    /**
     * @example holo:h-xxxx
     *
     * @var string
     */
    public $parentMetaEntityId;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'locationUri' => 'LocationUri',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'parentMetaEntityId' => 'ParentMetaEntityId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->locationUri) {
            $res['LocationUri'] = $this->locationUri;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentMetaEntityId) {
            $res['ParentMetaEntityId'] = $this->parentMetaEntityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Database
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LocationUri'])) {
            $model->locationUri = $map['LocationUri'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentMetaEntityId'])) {
            $model->parentMetaEntityId = $map['ParentMetaEntityId'];
        }

        return $model;
    }
}
