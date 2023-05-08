<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClientUserDefineRuleRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $actionType;

    /**
     * @example /usr/sbin/s****
     *
     * @var string
     */
    public $cmdline;

    /**
     * @example /etc/pam.d/su****
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $IP;

    /**
     * @example 210****
     *
     * @var int
     */
    public $id;

    /**
     * @example aa5ee3ed4363c9d195a591a70281****,3e522d6f3bf5cf88bb77e9ff3d13****
     *
     * @var string
     */
    public $md5List;

    /**
     * @var string
     */
    public $name;

    /**
     * @example /etc/pam****
     *
     * @var string
     */
    public $newFilePath;

    /**
     * @example /usr/sbin/s****
     *
     * @var string
     */
    public $parentCmdline;

    /**
     * @example C:/Windows/System32/cmd****
     *
     * @var string
     */
    public $parentProcPath;

    /**
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @example 80
     *
     * @var string
     */
    public $portStr;

    /**
     * @example /root/1111/****
     *
     * @var string
     */
    public $procPath;

    /**
     * @example SECOH-QAD****
     *
     * @var string
     */
    public $registryContent;

    /**
     * @example HKEY_DYN_****
     *
     * @var string
     */
    public $registryKey;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'actionType'      => 'ActionType',
        'cmdline'         => 'Cmdline',
        'filePath'        => 'FilePath',
        'IP'              => 'IP',
        'id'              => 'Id',
        'md5List'         => 'Md5List',
        'name'            => 'Name',
        'newFilePath'     => 'NewFilePath',
        'parentCmdline'   => 'ParentCmdline',
        'parentProcPath'  => 'ParentProcPath',
        'platform'        => 'Platform',
        'port'            => 'Port',
        'portStr'         => 'PortStr',
        'procPath'        => 'ProcPath',
        'registryContent' => 'RegistryContent',
        'registryKey'     => 'RegistryKey',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->cmdline) {
            $res['Cmdline'] = $this->cmdline;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5List) {
            $res['Md5List'] = $this->md5List;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->newFilePath) {
            $res['NewFilePath'] = $this->newFilePath;
        }
        if (null !== $this->parentCmdline) {
            $res['ParentCmdline'] = $this->parentCmdline;
        }
        if (null !== $this->parentProcPath) {
            $res['ParentProcPath'] = $this->parentProcPath;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->portStr) {
            $res['PortStr'] = $this->portStr;
        }
        if (null !== $this->procPath) {
            $res['ProcPath'] = $this->procPath;
        }
        if (null !== $this->registryContent) {
            $res['RegistryContent'] = $this->registryContent;
        }
        if (null !== $this->registryKey) {
            $res['RegistryKey'] = $this->registryKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClientUserDefineRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['Cmdline'])) {
            $model->cmdline = $map['Cmdline'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5List'])) {
            $model->md5List = $map['Md5List'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NewFilePath'])) {
            $model->newFilePath = $map['NewFilePath'];
        }
        if (isset($map['ParentCmdline'])) {
            $model->parentCmdline = $map['ParentCmdline'];
        }
        if (isset($map['ParentProcPath'])) {
            $model->parentProcPath = $map['ParentProcPath'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PortStr'])) {
            $model->portStr = $map['PortStr'];
        }
        if (isset($map['ProcPath'])) {
            $model->procPath = $map['ProcPath'];
        }
        if (isset($map['RegistryContent'])) {
            $model->registryContent = $map['RegistryContent'];
        }
        if (isset($map['RegistryKey'])) {
            $model->registryKey = $map['RegistryKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
