<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListYikeProductionsResponseBody;

use AlibabaCloud\Dara\Model;

class productionList extends Model
{
    /**
     * @var string
     */
    public $auth;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'auth' => 'Auth',
        'coverUrl' => 'CoverUrl',
        'createTime' => 'CreateTime',
        'createUserName' => 'CreateUserName',
        'description' => 'Description',
        'productionId' => 'ProductionId',
        'title' => 'Title',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }

        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }

        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
