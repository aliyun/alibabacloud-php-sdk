<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\PaginateProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aggregateSceneCode;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'type'               => 'Type',
        'modifiedTime'       => 'ModifiedTime',
        'description'        => 'Description',
        'aggregateSceneCode' => 'AggregateSceneCode',
        'corpId'             => 'CorpId',
        'userId'             => 'UserId',
        'icon'               => 'Icon',
        'name'               => 'Name',
        'createdTime'        => 'CreatedTime',
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aggregateSceneCode) {
            $res['AggregateSceneCode'] = $this->aggregateSceneCode;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AggregateSceneCode'])) {
            $model->aggregateSceneCode = $map['AggregateSceneCode'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
