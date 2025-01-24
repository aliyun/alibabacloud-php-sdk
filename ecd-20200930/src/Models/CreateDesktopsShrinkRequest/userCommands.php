<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest;

use AlibabaCloud\Dara\Model;

class userCommands extends Model
{
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentEncoding;
    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'content'         => 'Content',
        'contentEncoding' => 'ContentEncoding',
        'contentType'     => 'ContentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
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

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        return $model;
    }
}
