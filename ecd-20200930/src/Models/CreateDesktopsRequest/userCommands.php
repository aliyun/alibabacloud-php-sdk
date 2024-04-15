<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;

use AlibabaCloud\Tea\Model;

class userCommands extends Model
{
    /**
     * @description The command content.
     *
     * @example bmV3LWl0ZW0gZDpcdGVzdF91c2VyX2NvbW1hbmRzLnR4dCAtdHlwZSBm****
     *
     * @var string
     */
    public $content;

    /**
     * @description The encoding mode of the command content.
     *
     * Valid values:
     *
     *   Base64: encodes the command content in Base64.
     *
     * <!-- -->
     *
     *   PlainText: does not encode the command content.
     *
     * <!-- -->
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The language type of the command.
     *
     * Valid values:
     *
     *   RunPowerShellScript: PowerShell commands (applicable to Windows cloud computers).
     *
     * <!-- -->
     *
     *   RunShellScript: shell commands (applicable to Linux cloud computers).
     *
     * <!-- -->
     *
     *   RunBatScript: batch commands (applicable to Windows cloud computers).
     *
     * <!-- -->
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
