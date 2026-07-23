<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponseBody\pages\moderation;

class pages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var moderation
     */
    public $moderation;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'description' => 'Description',
        'id' => 'Id',
        'kind' => 'Kind',
        'moderation' => 'Moderation',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->moderation) {
            $this->moderation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->moderation) {
            $res['Moderation'] = null !== $this->moderation ? $this->moderation->toArray($noStream) : $this->moderation;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['Moderation'])) {
            $model->moderation = moderation::fromMap($map['Moderation']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
