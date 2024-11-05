<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig;

use AlibabaCloud\Tea\Model;

class RDP extends Model
{
    /**
     * @description Indicates whether downloading from the clipboard is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $clipboardDownload;

    /**
     * @description Indicates whether file uploading from the clipboard is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $clipboardUpload;

    /**
     * @description Indicates whether driver mapping is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $diskRedirection;

    /**
     * @description Indicates whether keyboard recording is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $recordKeyboard;
    protected $_name = [
        'clipboardDownload' => 'ClipboardDownload',
        'clipboardUpload'   => 'ClipboardUpload',
        'diskRedirection'   => 'DiskRedirection',
        'recordKeyboard'    => 'RecordKeyboard',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipboardDownload) {
            $res['ClipboardDownload'] = $this->clipboardDownload;
        }
        if (null !== $this->clipboardUpload) {
            $res['ClipboardUpload'] = $this->clipboardUpload;
        }
        if (null !== $this->diskRedirection) {
            $res['DiskRedirection'] = $this->diskRedirection;
        }
        if (null !== $this->recordKeyboard) {
            $res['RecordKeyboard'] = $this->recordKeyboard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RDP
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipboardDownload'])) {
            $model->clipboardDownload = $map['ClipboardDownload'];
        }
        if (isset($map['ClipboardUpload'])) {
            $model->clipboardUpload = $map['ClipboardUpload'];
        }
        if (isset($map['DiskRedirection'])) {
            $model->diskRedirection = $map['DiskRedirection'];
        }
        if (isset($map['RecordKeyboard'])) {
            $model->recordKeyboard = $map['RecordKeyboard'];
        }

        return $model;
    }
}
