<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\CreateVideoSnapshotTaskRequest;

use AlibabaCloud\Dara\Model;

class input extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $oss;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'content' => 'content',
        'fileName' => 'file_name',
        'oss' => 'oss',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->fileName) {
            $res['file_name'] = $this->fileName;
        }

        if (null !== $this->oss) {
            $res['oss'] = $this->oss;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['file_name'])) {
            $model->fileName = $map['file_name'];
        }

        if (isset($map['oss'])) {
            $model->oss = $map['oss'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
