<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest;

use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ### 序号1
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example markdown
     *
     * @var string
     */
    public $contentType;

    /**
     * @description This parameter is required.
     *
     * @example 今日完成工作
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'content'     => 'Content',
        'contentType' => 'ContentType',
        'key'         => 'Key',
        'sort'        => 'Sort',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
