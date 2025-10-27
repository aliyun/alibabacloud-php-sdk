<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy;

use AlibabaCloud\Dara\Model;

class clipboardPolicy extends Model
{
    /**
     * @var string
     */
    public $clipboard;

    /**
     * @var int
     */
    public $clipboardReadLimit;

    /**
     * @var string
     */
    public $clipboardScope;

    /**
     * @var int
     */
    public $clipboardWriteLimit;

    /**
     * @var string
     */
    public $fileClipboard;

    /**
     * @var string
     */
    public $richTextClipboard;

    /**
     * @var string
     */
    public $textClipboard;
    protected $_name = [
        'clipboard' => 'Clipboard',
        'clipboardReadLimit' => 'ClipboardReadLimit',
        'clipboardScope' => 'ClipboardScope',
        'clipboardWriteLimit' => 'ClipboardWriteLimit',
        'fileClipboard' => 'FileClipboard',
        'richTextClipboard' => 'RichTextClipboard',
        'textClipboard' => 'TextClipboard',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipboard) {
            $res['Clipboard'] = $this->clipboard;
        }

        if (null !== $this->clipboardReadLimit) {
            $res['ClipboardReadLimit'] = $this->clipboardReadLimit;
        }

        if (null !== $this->clipboardScope) {
            $res['ClipboardScope'] = $this->clipboardScope;
        }

        if (null !== $this->clipboardWriteLimit) {
            $res['ClipboardWriteLimit'] = $this->clipboardWriteLimit;
        }

        if (null !== $this->fileClipboard) {
            $res['FileClipboard'] = $this->fileClipboard;
        }

        if (null !== $this->richTextClipboard) {
            $res['RichTextClipboard'] = $this->richTextClipboard;
        }

        if (null !== $this->textClipboard) {
            $res['TextClipboard'] = $this->textClipboard;
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
        if (isset($map['Clipboard'])) {
            $model->clipboard = $map['Clipboard'];
        }

        if (isset($map['ClipboardReadLimit'])) {
            $model->clipboardReadLimit = $map['ClipboardReadLimit'];
        }

        if (isset($map['ClipboardScope'])) {
            $model->clipboardScope = $map['ClipboardScope'];
        }

        if (isset($map['ClipboardWriteLimit'])) {
            $model->clipboardWriteLimit = $map['ClipboardWriteLimit'];
        }

        if (isset($map['FileClipboard'])) {
            $model->fileClipboard = $map['FileClipboard'];
        }

        if (isset($map['RichTextClipboard'])) {
            $model->richTextClipboard = $map['RichTextClipboard'];
        }

        if (isset($map['TextClipboard'])) {
            $model->textClipboard = $map['TextClipboard'];
        }

        return $model;
    }
}
