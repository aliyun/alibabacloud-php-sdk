<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig;

use AlibabaCloud\Tea\Model;

class SSH extends Model
{
    /**
     * @description Specifies whether to enable remote command execution. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $execCommand;

    /**
     * @description Specifies whether to enable SFTP channels. Valid values:
     *
     *   Enable
     *   Disable
     *
     * >
     *
     *   If you do not specify this parameter, the default value Disable is used.
     *
     *   You must set at least one of the following parameters to Enable: SSHChannel and SFTPChannel.
     *
     *   If you select Enable Only SFTP Permission for a host account, do not set SSHChannel and SFTPChannel to Disable for the account. Otherwise, users of the bastion host cannot use the account to access the host.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPChannel;

    /**
     * @description Specifies whether to enable file downloading during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPDownloadFile;

    /**
     * @description Specifies whether to enable folder creation during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPMkdir;

    /**
     * @description Specifies whether to enable file deletion during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRemoveFile;

    /**
     * @description Specifies whether to enable file renaming during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRenameFile;

    /**
     * @description Specifies whether to enable folder deletion during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPRmdir;

    /**
     * @description Specifies whether to enable file uploading during SFTP-based O\\&M. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
     *
     * @example Enable
     *
     * @var string
     */
    public $SFTPUploadFile;

    /**
     * @description Specifies whether to enable SSH channels. Valid values:
     *
     *   Enable
     *   Disable
     *
     * >
     *
     *   If you do not specify this parameter, the default value Disable is used.
     *
     *   You must set at least one of the following parameters to Enable: SSHChannel and SFTPChannel. If you set SSHChannel to Disable, SSH-based logon is disabled for the asset account. Proceed with caution.
     *
     *   If you select Enable Only SFTP Permission for a host account, do not set SSHChannel and SFTPChannel to Disable for the account. Otherwise, users of the bastion host cannot use the account to access the host.
     *
     * @example Enable
     *
     * @var string
     */
    public $SSHChannel;

    /**
     * @description Specifies whether to enable X11 forwarding. Valid values:
     *
     *   Enable
     *   Disable
     *
     * > If you do not specify this parameter, the default value Disable is used.
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
