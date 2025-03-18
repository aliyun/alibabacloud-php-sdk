<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy\protocolConfig;

use AlibabaCloud\Tea\Model;

class SSH extends Model
{
    /**
     * @description Indicates whether remote command execution is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $execCommand;

    /**
     * @description Indicates whether the SFTP channel option is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPChannel;

    /**
     * @description Indicates whether file downloading is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPDownloadFile;

    /**
     * @description Indicates whether folder creation is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPMkdir;

    /**
     * @description Indicates whether file deletion is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRemoveFile;

    /**
     * @description Indicates whether file renaming is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRenameFile;

    /**
     * @description Indicates whether folder deletion is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRmdir;

    /**
     * @description Indicates whether file uploading is enabled in SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPUploadFile;

    /**
     * @description Indicates whether the SSH channel option is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $SSHChannel;

    /**
     * @description Indicates whether X11 forwarding is enabled. Valid values:
     *
     *   Enable
     *   Disable
     *
     * @example Enable
     *
     * @var string
     */
    public $x11Forwarding;
    protected $_name = [
        'execCommand' => 'ExecCommand',
        'SFTPChannel' => 'SFTPChannel',
        'SFTPDownloadFile' => 'SFTPDownloadFile',
        'SFTPMkdir' => 'SFTPMkdir',
        'SFTPRemoveFile' => 'SFTPRemoveFile',
        'SFTPRenameFile' => 'SFTPRenameFile',
        'SFTPRmdir' => 'SFTPRmdir',
        'SFTPUploadFile' => 'SFTPUploadFile',
        'SSHChannel' => 'SSHChannel',
        'x11Forwarding' => 'X11Forwarding',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->execCommand) {
            $res['ExecCommand'] = $this->execCommand;
        }
        if (null !== $this->SFTPChannel) {
            $res['SFTPChannel'] = $this->SFTPChannel;
        }
        if (null !== $this->SFTPDownloadFile) {
            $res['SFTPDownloadFile'] = $this->SFTPDownloadFile;
        }
        if (null !== $this->SFTPMkdir) {
            $res['SFTPMkdir'] = $this->SFTPMkdir;
        }
        if (null !== $this->SFTPRemoveFile) {
            $res['SFTPRemoveFile'] = $this->SFTPRemoveFile;
        }
        if (null !== $this->SFTPRenameFile) {
            $res['SFTPRenameFile'] = $this->SFTPRenameFile;
        }
        if (null !== $this->SFTPRmdir) {
            $res['SFTPRmdir'] = $this->SFTPRmdir;
        }
        if (null !== $this->SFTPUploadFile) {
            $res['SFTPUploadFile'] = $this->SFTPUploadFile;
        }
        if (null !== $this->SSHChannel) {
            $res['SSHChannel'] = $this->SSHChannel;
        }
        if (null !== $this->x11Forwarding) {
            $res['X11Forwarding'] = $this->x11Forwarding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SSH
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecCommand'])) {
            $model->execCommand = $map['ExecCommand'];
        }
        if (isset($map['SFTPChannel'])) {
            $model->SFTPChannel = $map['SFTPChannel'];
        }
        if (isset($map['SFTPDownloadFile'])) {
            $model->SFTPDownloadFile = $map['SFTPDownloadFile'];
        }
        if (isset($map['SFTPMkdir'])) {
            $model->SFTPMkdir = $map['SFTPMkdir'];
        }
        if (isset($map['SFTPRemoveFile'])) {
            $model->SFTPRemoveFile = $map['SFTPRemoveFile'];
        }
        if (isset($map['SFTPRenameFile'])) {
            $model->SFTPRenameFile = $map['SFTPRenameFile'];
        }
        if (isset($map['SFTPRmdir'])) {
            $model->SFTPRmdir = $map['SFTPRmdir'];
        }
        if (isset($map['SFTPUploadFile'])) {
            $model->SFTPUploadFile = $map['SFTPUploadFile'];
        }
        if (isset($map['SSHChannel'])) {
            $model->SSHChannel = $map['SSHChannel'];
        }
        if (isset($map['X11Forwarding'])) {
            $model->x11Forwarding = $map['X11Forwarding'];
        }

        return $model;
    }
}
