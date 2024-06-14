<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody\result\files;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $advanceConfigType;

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
    public $creator;

    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description The list of file names.
     *
     * @var files[]
     */
    public $files;

    /**
     * @description The name of the advanced configuration.
     *
     * @example my_index
     *
     * @var string
     */
    public $name;

    /**
     * @description The state of the advanced configuration. Valid values: drafting, used, unused, and trash. drafting indicates that the advanced configuration is a draft. used indicates that the advanced configuration is in use. unused indicates that the advanced configuration is unused. trash indicates that the advanced configuration is being deleted.
     *
     * @example drafting
     *
     * @var string
     */
    public $status;

    /**
     * @description The update time.
     *
     * @example 1631070464000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'advanceConfigType' => 'advanceConfigType',
        'content'           => 'content',
        'contentType'       => 'contentType',
        'creator'           => 'creator',
        'desc'              => 'desc',
        'files'             => 'files',
        'name'              => 'name',
        'status'            => 'status',
        'updateTime'        => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceConfigType) {
            $res['advanceConfigType'] = $this->advanceConfigType;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
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
        if (isset($map['advanceConfigType'])) {
            $model->advanceConfigType = $map['advanceConfigType'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
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
