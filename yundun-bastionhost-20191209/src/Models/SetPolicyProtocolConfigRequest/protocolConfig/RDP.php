<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig;

use AlibabaCloud\Dara\Model;

class RDP extends Model
{
    /**
     * @var string
     */
    public $clipboardDownload;

    /**
     * @var string
     */
    public $clipboardUpload;

    /**
     * @var string
     */
    public $diskRedirection;

    /**
     * @var string
     */
    public $diskRedirectionDownload;

    /**
     * @var string
     */
    public $diskRedirectionUpload;

    /**
     * @var string
     */
    public $recordKeyboard;
    protected $_name = [
        'clipboardDownload' => 'ClipboardDownload',
        'clipboardUpload' => 'ClipboardUpload',
        'diskRedirection' => 'DiskRedirection',
        'diskRedirectionDownload' => 'DiskRedirectionDownload',
        'diskRedirectionUpload' => 'DiskRedirectionUpload',
        'recordKeyboard' => 'RecordKeyboard',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->diskRedirectionDownload) {
            $res['DiskRedirectionDownload'] = $this->diskRedirectionDownload;
        }

        if (null !== $this->diskRedirectionUpload) {
            $res['DiskRedirectionUpload'] = $this->diskRedirectionUpload;
        }

        if (null !== $this->recordKeyboard) {
            $res['RecordKeyboard'] = $this->recordKeyboard;
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
        if (isset($map['ClipboardDownload'])) {
            $model->clipboardDownload = $map['ClipboardDownload'];
        }

        if (isset($map['ClipboardUpload'])) {
            $model->clipboardUpload = $map['ClipboardUpload'];
        }

        if (isset($map['DiskRedirection'])) {
            $model->diskRedirection = $map['DiskRedirection'];
        }

        if (isset($map['DiskRedirectionDownload'])) {
            $model->diskRedirectionDownload = $map['DiskRedirectionDownload'];
        }

        if (isset($map['DiskRedirectionUpload'])) {
            $model->diskRedirectionUpload = $map['DiskRedirectionUpload'];
        }

        if (isset($map['RecordKeyboard'])) {
            $model->recordKeyboard = $map['RecordKeyboard'];
        }

        return $model;
    }
}
