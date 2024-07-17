<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListAdvanceConfigsResponseBody\result\files;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description *   The type of the advanced configuration. Valid values: -ONLINE: online configuration
     *   \\-ONLINE_CAVA: online Cava configuration
     *   \\-ONLINE_PLUGIN: online plug-in configuration
     *   \\-ONLINE_QUERY: query configuration
     *   \\-OFFLINE_DICT: offline dictionary configuration
     *   \\-OFFLINE_TABLE: offline table configuration
     *   \\-OFFLINE_COMMON: offline configuration
     *   \\-OFFLINE_PLUGIN: offline plug-in configuration
     *   \\-OFFLINE_INDEX: index configuration
     *
     * @example ONLINE
     *
     * @var string
     */
    public $advanceConfigType;

    /**
     * @description The content of the advanced configuration that is returned.
     *
     * @example {\\"url\\":\\"http://xxxxxx.aliyuncs.com/outnet_hz/packages/xxxxx/opensearch_offline_plugins_xxxxx.tar\\"}
     *
     * @var string
     */
    public $content;

    /**
     * @description The type of the configuration content. Valid values: FILE, GIT, HTTP, and ODPS.
     *
     * @example FILE
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The Alibaba Cloud account ID of the user who created the advanced configuration.
     *
     * @example 123456
     *
     * @var string
     */
    public $creator;

    /**
     * @description The description of the advanced configuration.
     *
     * @example test
     *
     * @var string
     */
    public $desc;

    /**
     * @description The files.
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
     * @description The status of the advanced configuration. Valid values: drafting: The advanced configuration is in the draft state. used: The advanced configuration is being used. unused: The advanced configuration is not used. trash: The advanced configuration is being deleted.
     *
     * @example drafting
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the advanced configuration was updated.
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
