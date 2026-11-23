<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSecretValueResponseBody;

use AlibabaCloud\Dara\Model;

class secrets extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var string
     */
    public $secretType;
    protected $_name = [
        'comment' => 'comment',
        'content' => 'content',
        'createTime' => 'createTime',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'name' => 'name',
        'secretId' => 'secretId',
        'secretType' => 'secretType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->secretId) {
            $res['secretId'] = $this->secretId;
        }

        if (null !== $this->secretType) {
            $res['secretType'] = $this->secretType;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['secretId'])) {
            $model->secretId = $map['secretId'];
        }

        if (isset($map['secretType'])) {
            $model->secretType = $map['secretType'];
        }

        return $model;
    }
}
