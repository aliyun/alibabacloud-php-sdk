<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptArtifactResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetPptArtifactResponseBody\data\fileAttr;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var fileAttr
     */
    public $fileAttr;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'fileAttr' => 'FileAttr',
        'fileKey' => 'FileKey',
        'id' => 'Id',
        'title' => 'Title',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->fileAttr) {
            $this->fileAttr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->fileAttr) {
            $res['FileAttr'] = null !== $this->fileAttr ? $this->fileAttr->toArray($noStream) : $this->fileAttr;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['FileAttr'])) {
            $model->fileAttr = fileAttr::fromMap($map['FileAttr']);
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
