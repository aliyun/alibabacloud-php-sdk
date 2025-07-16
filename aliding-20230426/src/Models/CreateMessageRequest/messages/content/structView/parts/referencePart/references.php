<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView\parts\referencePart;

use AlibabaCloud\Tea\Model;

class references extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $index;

    /**
     * @example mcp是....
     *
     * @var string
     */
    public $name;

    /**
     * @example ata
     *
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIcon;

    /**
     * @example 摘要
     *
     * @var string
     */
    public $summary;

    /**
     * @example 《mcp原理介绍》
     *
     * @var string
     */
    public $title;

    /**
     * @example https://taobao.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'index' => 'index',
        'name' => 'name',
        'sourceCode' => 'sourceCode',
        'sourceIcon' => 'sourceIcon',
        'summary' => 'summary',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourceCode) {
            $res['sourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIcon) {
            $res['sourceIcon'] = $this->sourceIcon;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return references
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourceCode'])) {
            $model->sourceCode = $map['sourceCode'];
        }
        if (isset($map['sourceIcon'])) {
            $model->sourceIcon = $map['sourceIcon'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
