<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyProtocolConfigRequest\protocolConfig;

use AlibabaCloud\Dara\Model;

class SSH extends Model
{
    /**
     * @var string
     */
    public $allowDirectTcp;

    /**
     * @var string
     */
    public $allowTcpForwarding;

    /**
     * @var string
     */
    public $execCommand;

    /**
     * @var string
     */
    public $SFTPChannel;

    /**
     * @var string
     */
    public $SFTPDownloadFile;

    /**
     * @var string
     */
    public $SFTPMkdir;

    /**
     * @var string
     */
    public $SFTPRemoveFile;

    /**
     * @var string
     */
    public $SFTPRenameFile;

    /**
     * @var string
     */
    public $SFTPRmdir;

    /**
     * @var string
     */
    public $SFTPUploadFile;

    /**
     * @var string
     */
    public $SSHChannel;

    /**
     * @var string
     */
    public $x11Forwarding;
    protected $_name = [
        'allowDirectTcp' => 'AllowDirectTcp',
        'allowTcpForwarding' => 'AllowTcpForwarding',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowDirectTcp) {
            $res['AllowDirectTcp'] = $this->allowDirectTcp;
        }

        if (null !== $this->allowTcpForwarding) {
            $res['AllowTcpForwarding'] = $this->allowTcpForwarding;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowDirectTcp'])) {
            $model->allowDirectTcp = $map['AllowDirectTcp'];
        }

        if (isset($map['AllowTcpForwarding'])) {
            $model->allowTcpForwarding = $map['AllowTcpForwarding'];
        }

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
