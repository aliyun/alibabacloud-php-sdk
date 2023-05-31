<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddClientUserDefineRuleRequest extends Model
{
    /**
     * @description The action of the custom defense rule. Valid values:
     *
     *   **0**: allow
     *   **1**: block
     *
     * @example 1
     *
     * @var int
     */
    public $actionType;

    /**
     * @description The command line.
     *
     * @example /usr/sbin/s****
     *
     * @var string
     */
    public $cmdline;

    /**
     * @description The file path.
     *
     * @example /etc/pam****
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The IP address.
     *
     * @example 10.240.XX.XX
     *
     * @var string
     */
    public $IP;

    /**
     * @description The hash values of processes.
     *
     * @example 0c9045b5bec90f9825f1f3f64dd4****
     *
     * @var string
     */
    public $md5List;

    /**
     * @description The name of the custom defense rule.
     *
     * @example Rule 1
     *
     * @var string
     */
    public $name;

    /**
     * @description The new file path after the file is renamed.
     *
     * @example /etc/pam****
     *
     * @var string
     */
    public $newFilePath;

    /**
     * @description The parent command line.
     *
     * @example /usr/sbin/s****
     *
     * @var string
     */
    public $parentCmdline;

    /**
     * @description The path to the parent process.
     *
     * @example c:/windows/system32/i****
     *
     * @var string
     */
    public $parentProcPath;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   **windows**: Windows
     *   **linux**: Linux
     *   **all**: all types
     *
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The port number. This parameter is deprecated.
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @description The port number. Valid values: **1 to 65535**.
     *
     * @example 80
     *
     * @var string
     */
    public $portStr;

    /**
     * @description The path to the process.
     *
     * @example c:/windows/system32/i****
     *
     * @var string
     */
    public $procPath;

    /**
     * @description The registry value.
     *
     * @example *SECOH-QAD.exe*
     *
     * @var string
     */
    public $registryContent;

    /**
     * @description The registry key.
     *
     * @example HKEY_DYN_****
     *
     * @var string
     */
    public $registryKey;

    /**
     * @description The type of the custom defense rule. Valid values:
     *
     *   **1**: Process hash
     *   **2**: Command line
     *   **3**: Process Network
     *   **4**: File Read and Write
     *   **5**: Operation on Registry
     *   **6**: Dynamic-link Library Loading
     *   **7**: File Renaming
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'actionType'      => 'ActionType',
        'cmdline'         => 'Cmdline',
        'filePath'        => 'FilePath',
        'IP'              => 'IP',
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
     * @return AddClientUserDefineRuleRequest
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
