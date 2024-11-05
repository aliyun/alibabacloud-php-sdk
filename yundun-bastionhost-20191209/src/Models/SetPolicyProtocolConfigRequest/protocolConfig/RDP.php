<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig;

use AlibabaCloud\Tea\Model;

class RDP extends Model
{
    /**
     * @description Specifies whether to enable downloading from the clipboard. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     * @example Enable
     *
     * @var string
     */
    public $clipboardDownload;

    /**
     * @description Specifies whether to enable uploading from the clipboard. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     * @example Enable
     *
     * @var string
     */
    public $clipboardUpload;

    /**
     * @description Specifies whether to enable driver mapping. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     * @example Enable
     *
     * @var string
     */
    public $diskRedirection;

    /**
     * @description Specifies whether to enable keyboard operation recording. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
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
