<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody\result\files;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 配置内容 http，git 请求时不为空
     *
     * @var string
     */
    public $content;

    /**
     * @description 配置内容的类型 (FILE, GIT, HTTP, ODPS)
     *
     * @var string
     */
    public $contentType;

    /**
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @example my_index
     *
     * @var string
     */
    public $name;

    /**
     * @example drafting
     *
     * @var string
     */
    public $status;

    /**
     * @example 1631070464000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'content'     => 'content',
        'contentType' => 'contentType',
        'desc'        => 'desc',
        'files'       => 'files',
        'name'        => 'name',
        'status'      => 'status',
        'updateTime'  => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? files::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
