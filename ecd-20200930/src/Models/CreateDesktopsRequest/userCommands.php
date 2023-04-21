<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class userCommands extends Model
{
    /**
     * @description The content of the command.
     *
     * @example bmV3LWl0ZW0gZDpcdGVzdF91c2VyX2NvbW1hbmRzLnR4dCAtdHlwZSBm****
     *
     * @var string
     */
    public $content;

    /**
     * @description The encoding mode of the command content (CommandContent).
     *
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The language type of the command.
     *
     * @example RunPowerShellScript
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return userCommands
     */
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
